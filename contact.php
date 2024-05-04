<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = 'chaima.rebai01@gmail.com'; // Change this to your email address

    // Set email subject
    $email_subject = 'New Contact Form Submission';

    // Build the email content
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

    // Send email
    if (mail($to, $email_subject, $email_body)) {
        // Email sent successfully
        echo "Thank you for your message.";
    } else {
        // Failed to send email
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // If not submitted, redirect to the form page
    header("Location: your-form-page.html");
}
?>
