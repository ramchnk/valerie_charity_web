<?php
// Replace with your email address
$recipient = "ramchnk@gmail.com";

// Getting form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Construct the email content
$email_content = "Name: $name\n";
$email_content .= "Email: $email\n";
$email_content .= "Subject: $subject\n\n";
$email_content .= "Message:\n$message\n";

// Construct the email headers
$headers = "From: $email";

// Send the email
if (mail($recipient, $subject, $email_content, $headers)) {
    http_response_code(200);
    echo "Thank You! Your message has been sent.";
} else {
    http_response_code(500);
    echo "Oops! Something went wrong, and we couldn't send your message.";
}
?>
