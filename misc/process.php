<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $services = $_POST["services"];
    $message = $_POST["message"];

    // Set your email address
    $to = "dave@neuron-consulting.com";

    // Set email subject
    $subject = "Contact Form Submission from $name";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Service Package: $services\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_message);

    // Redirect back to your website or a thank you page
    header("Location: thank-you.html");
    exit();
}
?>

