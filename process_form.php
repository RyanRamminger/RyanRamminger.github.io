<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Send an email (example using PHP's mail function)
    $to = "your_email@example.com"; // Replace with your email address
    $subject = "New message from your website";
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Send the email
    mail($to, $subject, $email_body);
    
    // Redirect back to a thank you page after successful submission
    header("Location: thank_you.html");
    exit;
}
?>
