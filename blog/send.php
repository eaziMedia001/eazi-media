<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your email (change this to your real email)
    $to = "ayubaezekkiel82@gmail.com";  
    $subject = "New Contact Form Message from blog";

    $body = "You have received a new message from your website:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>✅ Thank you, your message has been sent successfully!</h2>";
    } else {
        echo "<h2>❌ Sorry, there was a problem sending your message.</h2>";
    }
}
?>
