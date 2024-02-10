<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "elansarimostapha011@gmail.com";
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
