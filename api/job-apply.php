<?php
header("Content-Type: application/json");

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'msg' => 'Invalid request method.']);
    exit;
}

// Retrieve form data
$fullName = trim($_POST['full-name'] ?? '');
$email = trim($_POST['email'] ?? '');
$jobTitle = trim($_POST['job-title'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$education = trim($_POST['education'] ?? '');
$workExperience = trim($_POST['work-experience'] ?? '');

// Validate form data
$requiredFields = [$fullName, $email, $phone, $jobTitle, $education, $workExperience];
if (in_array('', $requiredFields, true)) {
    echo json_encode(['status' => 'error', 'msg' => 'Please fill in all required fields.']);
    exit;
}

// Handle CV upload
if (empty($_FILES['cv']) || $_FILES['cv']['error'] !== UPLOAD_ERR_OK) {
    echo json_encode(['status' => 'error', 'msg' => 'CV upload failed.']);
    exit;
}

$cvFile = $_FILES['cv'];

// Validate file type
$allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
if (!in_array($cvFile['type'], $allowedTypes, true)) {
    echo json_encode(['status' => 'error', 'msg' => 'Invalid file type. Only PDF and Word documents are allowed.']);
    exit;
}

// Create the uploads folder if it doesn't exist
$uploadDir = 'uploads/';
if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true) && !is_dir($uploadDir)) {
    echo json_encode(['status' => 'error', 'msg' => 'Failed to create upload directory.']);
    exit;
}

// Move uploaded file
$uploadFilePath = $uploadDir . basename($cvFile['name']);
if (!move_uploaded_file($cvFile['tmp_name'], $uploadFilePath)) {
    echo json_encode(['status' => 'error', 'msg' => 'Error uploading CV. Please try again.']);
    exit;
}

// Prepare email parameters
$to = "waleed@greenfortuae.com"; // Replace with your email address
$subject = "New Job Application from $fullName";
$headers = [
    "From: $fullName <$email>",
    "Reply-To: $email",
    "Content-Type: text/plain; charset=UTF-8"
];
$headersString = implode("\r\n", $headers);

// Prepare the email body
$body = "Full Name: $fullName\n";
$body .= "Job Title: $jobTitle\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Education: $education\n";
$body .= "Work Experience:\n$workExperience\n";
$body .= "CV Uploaded: $uploadFilePath\n"; // Including the path to the uploaded CV

// Send email
if (mail($to, $subject, $body, $headersString)) {
    echo json_encode(['status' => 'success', 'msg' => "Application submitted successfully! We'll contact you soon."]);
} else {
    echo json_encode(['status' => 'error', 'msg' => 'There was an error sending your application. Please try again later.']);
}
