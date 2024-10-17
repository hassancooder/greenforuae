<?php
header("Content-Type: application/json");

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // Validate form data (you can add more validation if necessary)
    if (empty($name) || empty($phone) || empty($message)) {
        $error_msg = json_encode(['status' => 'error', 'msg' => 'Please fill in all required fields.']);
        echo $error_msg;
        exit;
    }

    // Prepare email parameters
    $to = "waleed@greenfortuae.com"; // Replace with your email address
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Prepare the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        $success_msg = json_encode(['status' => 'success', 'msg' => "Sent! We'll Contact You Soon!"]);
        echo $success_msg;
    } else {
        $error_msg = json_encode(['status' => 'error', 'msg' => 'There was an error sending your message. Please try again later.']);
        echo $error_msg;
    }
} else {
    // If not a POST request, return an error
    $error_msg = json_encode(['status' => 'error', 'msg' => 'Invalid request method.']);
    echo $error_msg;
}
?>
