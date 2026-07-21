<?php
/**
 * AJAX Contact Form Submission Handler for AD Infotech Redesign
 */

// Allow only POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['status' => 'error', 'message' => 'Only POST requests are allowed.']);
    exit;
}

// Set JSON Response Header
header('Content-Type: application/json');

// Gather input fields
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$service = isset($_POST['service']) ? trim($_POST['service']) : 'hardware';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validation checks
if (empty($name)) {
    echo json_encode(['status' => 'error', 'message' => 'Full Name is a required field.']);
    exit;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'A valid Email Address is required.']);
    exit;
}

if (empty($message)) {
    echo json_encode(['status' => 'error', 'message' => 'Message content is required.']);
    exit;
}

// Log / Store Enquiry locally in a JSON database file
$dbFile = __DIR__ . '/enquiries.json';
$enquiries = [];

if (file_exists($dbFile)) {
    $fileData = file_get_contents($dbFile);
    if (!empty($fileData)) {
        $decoded = json_decode($fileData, true);
        if (is_array($decoded)) {
            $enquiries = $decoded;
        }
    }
}

// Construct new enquiry payload
$newEnquiry = [
    'id' => uniqid('enq_'),
    'timestamp' => date('Y-m-d H:i:s'),
    'name' => htmlspecialchars($name),
    'email' => htmlspecialchars($email),
    'phone' => htmlspecialchars($phone),
    'service' => htmlspecialchars($service),
    'message' => htmlspecialchars($message),
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
];

// Append to log list
$enquiries[] = $newEnquiry;

// Write back to file with lock
$savedLocally = file_put_contents($dbFile, json_encode($enquiries, JSON_PRETTY_PRINT), LOCK_EX) !== false;

require_once __DIR__ . '/smtp-mailer.php';

// -------------------------------------------------------------
// SMTP Settings (Configure these for 100% Direct Inbox Delivery)
// -------------------------------------------------------------
$smtpHost = 'smtp.gmail.com';
$smtpPort = 587; // 587 for TLS or 465 for SSL
$smtpSecure = 'tls'; // 'tls' or 'ssl'
$smtpUser = 'adinfotech22@gmail.com'; // Your SMTP Username / Gmail Address
$smtpPass = ''; // Your Gmail App Password / SMTP Password

// Target email address where enquiries are received
$recipientEmail = 'adinfotech22@gmail.com';
$emailSubject = 'New Contact Enquiry from AD Infotech Website: ' . htmlspecialchars($name);

$emailBody = "
<html>
<head>
  <style>
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
    .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #e0e0e0; border-radius: 8px; background: #fdfdfd; }
    .header { background: #0052cc; color: #ffffff; padding: 15px 20px; border-radius: 6px 6px 0 0; }
    .header h2 { margin: 0; font-size: 20px; }
    .field { margin-bottom: 12px; }
    .label { font-weight: bold; color: #555; }
    .value { background: #f4f6f9; padding: 8px 12px; border-radius: 4px; display: block; margin-top: 4px; word-break: break-word; }
    .footer { margin-top: 20px; font-size: 12px; color: #888; border-top: 1px solid #eee; padding-top: 10px; }
  </style>
</head>
<body>
  <div class='container'>
    <div class='header'>
      <h2>New Website Enquiry</h2>
    </div>
    <div style='padding: 20px 0;'>
      <div class='field'><span class='label'>Full Name:</span> <span class='value'>" . htmlspecialchars($name) . "</span></div>
      <div class='field'><span class='label'>Email Address:</span> <span class='value'>" . htmlspecialchars($email) . "</span></div>
      <div class='field'><span class='label'>Phone Number:</span> <span class='value'>" . htmlspecialchars($phone ?: 'Not provided') . "</span></div>
      <div class='field'><span class='label'>Requested Service:</span> <span class='value'>" . htmlspecialchars(ucwords(str_replace('_', ' ', $service))) . "</span></div>
      <div class='field'><span class='label'>Message:</span> <span class='value'>" . nl2br(htmlspecialchars($message)) . "</span></div>
      <div class='field'><span class='label'>Submission Time:</span> <span class='value'>" . date('Y-m-d H:i:s') . "</span></div>
    </div>
    <div class='footer'>
      This email was sent automatically from the AD Infotech website contact form.
    </div>
  </div>
</body>
</html>
";

$mailSent = false;
$smtpError = null;

// Attempt 1: SMTP Delivery if password is provided
if (!empty($smtpUser) && !empty($smtpPass)) {
    $smtp = new SimpleSMTP($smtpHost, $smtpPort, $smtpUser, $smtpPass, $smtpSecure);
    $smtpResult = $smtp->send(
        $recipientEmail,
        $emailSubject,
        $emailBody,
        $smtpUser,
        'AD Infotech Website',
        $email
    );
    if ($smtpResult['success']) {
        $mailSent = true;
    } else {
        $smtpError = $smtpResult['error'];
    }
}

// Attempt 2: Fallback to PHP native mail() if SMTP is not configured or fails
if (!$mailSent) {
    $headers = [];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'From: AD Infotech Website <no-reply@' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '>';
    $headers[] = 'Reply-To: ' . htmlspecialchars($name) . ' <' . htmlspecialchars($email) . '>';
    $headers[] = 'X-Mailer: PHP/' . phpversion();

    $mailSent = @mail($recipientEmail, $emailSubject, $emailBody, implode("\r\n", $headers));
}

if ($savedLocally || $mailSent) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you for your enquiry. We will contact you shortly.',
        'email_sent' => $mailSent,
        'smtp_error' => $smtpError
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'We encountered an error processing your request. Please try again.'
    ]);
}
exit;
