<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'amiqagroup@outlook.com'; // Change this to your own email address
    $subject = 'New Contact Form Submission';
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $message_body, $headers)) {
        echo '<p>Your message has been sent successfully!</p>';
    } else {
        echo '<p>Sorry, something went wrong. Please try again later.</p>';
    }
}
?>
