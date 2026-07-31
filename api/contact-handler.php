<?php

if (!headers_sent()) { header("X-Content-Type-Options: nosniff"); header("X-Frame-Options: SAMEORIGIN"); header("X-XSS-Protection: 1; mode=block"); header("Referrer-Policy: strict-origin-when-cross-origin"); }

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['status' => 'error', 'message' => 'Only POST requests allowed.']);
    exit;
}

header('Content-Type: application/json');

$name = str_replace(["\r", "\n"], '', strip_tags(trim($_POST['name'] ?? '')));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$phone = str_replace(["\r", "\n"], '', strip_tags(trim($_POST['phone'] ?? '')));
$service = str_replace(["\r", "\n"], '', strip_tags(trim($_POST['service'] ?? 'hardware')));
$message = strip_tags(trim($_POST['message'] ?? ''));

if (empty($name) || !$email || empty($message)) {
    echo json_encode(['status' => 'error', 'message' => 'Please provide valid Name, Email, and Message.']);
    exit;
}

$formspreeEndpoint = 'https://formspree.io/f/xlgqkelz';
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
@file_get_contents($formspreeEndpoint, false, stream_context_create($opt));

$emailSubject = "New Website Enquiry from " . $name;
$emailHeaders = "MIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8\r\nFrom: AD Infotech <no-reply@adinfotech.online>\r\nReply-To: {$name} <{$email}>\r\n";
$emailBody = "<h2>New Website Enquiry</h2><p><b>Name:</b> {$name}</p><p><b>Email:</b> {$email}</p><p><b>Phone:</b> " . ($phone ?: 'Not provided') . "</p><p><b>Service:</b> " . ucwords(str_replace('_', ' ', $service)) . "</p><p><b>Message:</b><br>" . nl2br(htmlspecialchars($message)) . "</p>";

@mail('info@adinfotech.online', $emailSubject, $emailBody, $emailHeaders);

echo json_encode(['status' => 'success', 'message' => 'Thank you for your enquiry. We will contact you shortly.']);
exit;
