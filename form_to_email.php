<?php
$name = $_POST['contact-name'];
$email = $_POST['contact-email'];
$message = $_POST['contact-message'];

$email_from = 'everyday.insight.test@gmail.com';
$email_subject = "New Submission from $name";
$email_body = "You have received a new message from $name.\n".
    "email address: $email\n\n".
    "$message";
$to = 'everyday.insight.test@gmail.com';
$headers = 'From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

?>
