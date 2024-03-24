<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email
    $to = 'girishpetla112@gmail.com';

    $subject = 'New message from your portfolio';

    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo '<p>Your message has been sent successfully. Thank you!</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
    }
}
?>
