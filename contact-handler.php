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
if (file_put_contents($dbFile, json_encode($enquiries, JSON_PRETTY_PRINT), LOCK_EX) !== false) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you for your enquiry. We will contact you shortly.'
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'We encountered an error saving your request on the server. Please try again.'
    ]);
}
exit;
