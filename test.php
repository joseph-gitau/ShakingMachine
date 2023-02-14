<!-- test sending emails -->
<?php

$to = "xybegqdl@eurokool.com";
$subject = "Test Email from Server";
$message = "This is a test email sent from the server.";
$headers = "From: sender@example.com" . "\r\n";
$headers .= "Reply-To: contact@shaking-machine.com;" . "\r\n";
$from = "contact@shaking-machine.com";

if (mail($to, $subject, $message, $headers, $from)) {
    echo "Email sent successfully";
} else {
    echo "Email sending failed";
}
