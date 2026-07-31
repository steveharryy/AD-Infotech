<?php

require_once __DIR__ . '/security-headers.php';
require_once __DIR__ . '/env-loader.php';
require_once __DIR__ . '/session-init.php';
require_once __DIR__ . '/db.php';

load_env_vars();
start_secure_session();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['status' => 'error', 'message' => 'Only POST requests allowed.']);
    exit;
}

header('Content-Type: application/json');

$csrf = $_POST['csrf_token'] ?? '';
if (!empty($_SESSION['csrf_token']) && !hash_equals($_SESSION['csrf_token'], $csrf)) {
    header('HTTP/1.1 403 Forbidden');
    echo json_encode(['status' => 'error', 'message' => 'Invalid CSRF token.']);
    exit;
}

$clientIP = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
$now = time();
$rateFile = __DIR__ . '/rate_limits.json';
$limits = file_exists($rateFile) ? (json_decode(@file_get_contents($rateFile), true) ?: []) : [];

$userTs = array_values(array_filter($limits[$clientIP] ?? [], fn($ts) => ($now - $ts) < 600));
if (count($userTs) >= 5) {
    header('HTTP/1.1 429 Too Many Requests');
    echo json_encode(['status' => 'error', 'message' => 'Too many requests. Try again in 10 minutes.']);
    exit;
}

$userTs[] = $now;
$limits[$clientIP] = $userTs;
@file_put_contents($rateFile, json_encode($limits), LOCK_EX);

$name = str_replace(["\r", "\n"], '', strip_tags(trim($_POST['name'] ?? '')));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$phone = str_replace(["\r", "\n"], '', strip_tags(trim($_POST['phone'] ?? '')));
$service = str_replace(["\r", "\n"], '', strip_tags(trim($_POST['service'] ?? 'hardware')));
$message = strip_tags(trim($_POST['message'] ?? ''));

if (empty($name) || !$email || empty($message)) {
    echo json_encode(['status' => 'error', 'message' => 'Please provide valid Name, Email, and Message.']);
    exit;
}

$uid = uniqid('enq_');
$nowStr = date('Y-m-d H:i:s');
$pdo = get_db_connection();

if ($pdo !== null) {
    try {
        $stmt = $pdo->prepare("INSERT INTO enquiries (enquiry_uid, name, email, phone, service, message, ip_address, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$uid, $name, $email, $phone, $service, $message, $clientIP, $nowStr]);
    } catch (PDOException $e) {
        error_log("DB Insert Error: " . $e->getMessage());
    }
}

$ep = getenv('FORMSPREE_ENDPOINT');
if (!empty($ep) && strpos($ep, 'YOUR_FORM_ID') === false) {
    $opt = [
        'http' => [
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\nAccept: application/json\r\n",
            'method'  => 'POST',
            'content' => http_build_query([
                'name'    => $name,
                'email'   => $email,
                'phone'   => $phone ?: 'Not provided',
                'service' => ucwords(str_replace('_', ' ', $service)),
                'message' => $message,
                '_to'     => 'info@adinfotech.online'
            ]),
            'timeout' => 8
        ]
    ];
    @file_get_contents($ep, false, stream_context_create($opt));
}

$emailSubject = "New Website Enquiry from " . $name;
$emailHeaders = "MIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8\r\nFrom: AD Infotech <no-reply@adinfotech.online>\r\nReply-To: {$name} <{$email}>\r\n";
$emailBody = "<h2>New Website Enquiry</h2><p><b>Name:</b> {$name}</p><p><b>Email:</b> {$email}</p><p><b>Phone:</b> " . ($phone ?: 'Not provided') . "</p><p><b>Service:</b> " . ucwords(str_replace('_', ' ', $service)) . "</p><p><b>Message:</b><br>" . nl2br(htmlspecialchars($message)) . "</p>";

@mail('info@adinfotech.online', $emailSubject, $emailBody, $emailHeaders);

echo json_encode(['status' => 'success', 'message' => 'Thank you for your enquiry. We will contact you shortly.']);
exit;
