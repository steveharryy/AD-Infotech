<?php
/**
 * Standalone Pure PHP SMTP Mailer Class for AD Infotech
 * Works across Localhost and Live Hosting (cPanel, VPS, Hostinger, GoDaddy, Gmail, etc.)
 */

class SimpleSMTP {
    private $host;
    private $port;
    private $username;
    private $password;
    private $secure; // 'tls', 'ssl', or 'none'
    private $timeout;
    public $debugLog = [];

    public function __construct($host = 'smtp.gmail.com', $port = 587, $username = '', $password = '', $secure = 'tls', $timeout = 15) {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->secure = strtolower($secure);
        $this->timeout = $timeout;
    }

    private function log($msg) {
        $this->debugLog[] = $msg;
    }

    private function readResponse($socket) {
        $response = '';
        while ($str = fgets($socket, 512)) {
            $response .= $str;
            if (substr($str, 3, 1) === ' ') {
                break;
            }
        }
        $this->log("SERVER: " . trim($response));
        return $response;
    }

    private function sendCommand($socket, $cmd) {
        $this->log("CLIENT: " . $cmd);
        fputs($socket, $cmd . "\r\n");
        return $this->readResponse($socket);
    }

    public function send($to, $subject, $htmlBody, $fromEmail = '', $fromName = 'AD Infotech Website', $replyTo = '') {
        if (empty($this->username) || empty($this->password)) {
            return ['success' => false, 'error' => 'SMTP credentials (username/password) are not set.'];
        }

        $fromEmail = !empty($fromEmail) ? $fromEmail : $this->username;
        $replyTo = !empty($replyTo) ? $replyTo : $fromEmail;

        $targetHost = ($this->secure === 'ssl') ? 'ssl://' . $this->host : $this->host;
        $socket = @fsockopen($targetHost, $this->port, $errno, $errstr, $this->timeout);

        if (!$socket) {
            return ['success' => false, 'error' => "Failed to connect to SMTP server {$this->host}:{$this->port} ($errstr)"];
        }

        stream_set_timeout($socket, $this->timeout);
        $this->readResponse($socket);

        // EHLO
        $res = $this->sendCommand($socket, "EHLO " . gethostname());
        if (substr($res, 0, 3) !== '250') {
            fclose($socket);
            return ['success' => false, 'error' => 'EHLO failed: ' . $res];
        }

        // STARTTLS if port 587 or tls specified
        if ($this->secure === 'tls') {
            $res = $this->sendCommand($socket, "STARTTLS");
            if (substr($res, 0, 3) !== '220') {
                fclose($socket);
                return ['success' => false, 'error' => 'STARTTLS failed: ' . $res];
            }
            $cryptoMethod = STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT;
            if (defined('STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT')) {
                $cryptoMethod |= STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT;
            }
            if (!@stream_socket_enable_crypto($socket, true, $cryptoMethod)) {
                fclose($socket);
                return ['success' => false, 'error' => 'TLS encryption handshake failed.'];
            }
            // Re-send EHLO after TLS negotiation
            $this->sendCommand($socket, "EHLO " . gethostname());
        }

        // AUTH LOGIN
        $res = $this->sendCommand($socket, "AUTH LOGIN");
        if (substr($res, 0, 3) !== '334') {
            fclose($socket);
            return ['success' => false, 'error' => 'AUTH LOGIN failed: ' . $res];
        }

        $res = $this->sendCommand($socket, base64_encode($this->username));
        if (substr($res, 0, 3) !== '334') {
            fclose($socket);
            return ['success' => false, 'error' => 'Username authentication failed: ' . $res];
        }

        $res = $this->sendCommand($socket, base64_encode($this->password));
        if (substr($res, 0, 3) !== '235') {
            fclose($socket);
            return ['success' => false, 'error' => 'Password authentication failed (check App Password or SMTP credentials): ' . $res];
        }

        // MAIL FROM
        $res = $this->sendCommand($socket, "MAIL FROM: <{$fromEmail}>");
        if (substr($res, 0, 3) !== '250') {
            fclose($socket);
            return ['success' => false, 'error' => 'MAIL FROM rejected: ' . $res];
        }

        // RCPT TO
        $res = $this->sendCommand($socket, "RCPT TO: <{$to}>");
        if (substr($res, 0, 3) !== '250') {
            fclose($socket);
            return ['success' => false, 'error' => 'RCPT TO rejected: ' . $res];
        }

        // DATA
        $res = $this->sendCommand($socket, "DATA");
        if (substr($res, 0, 3) !== '354') {
            fclose($socket);
            return ['success' => false, 'error' => 'DATA command failed: ' . $res];
        }

        // Construct headers and body
        $headers = [];
        $headers[] = "Date: " . date('r');
        $headers[] = "To: <{$to}>";
        $headers[] = "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <{$fromEmail}>";
        $headers[] = "Reply-To: <{$replyTo}>";
        $headers[] = "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=";
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Content-Type: text/html; charset=UTF-8";
        $headers[] = "X-Mailer: ADInfotech-SimpleSMTP/1.0";

        $emailData = implode("\r\n", $headers) . "\r\n\r\n" . $htmlBody . "\r\n.";
        $res = $this->sendCommand($socket, $emailData);

        $this->sendCommand($socket, "QUIT");
        fclose($socket);

        if (substr($res, 0, 3) === '250') {
            return ['success' => true, 'message' => 'Message successfully delivered via SMTP.'];
        } else {
            return ['success' => false, 'error' => 'Email sending failed: ' . $res];
        }
    }
}
