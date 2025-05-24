<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "thabelkodjo@gmail.com"; // your email
    $subject = "New message from Maths Utilities Contact Form";

    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $headers = "From: $name <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $body = "You received a new message from $name ($email):\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>✅ Your message has been sent successfully.</p>";
    } else {
        echo "<p>❌ Sorry, there was an error sending your message. Please try again later.</p>";
    }
}
?>
