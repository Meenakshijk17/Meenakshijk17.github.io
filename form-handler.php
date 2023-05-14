<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Email for your website
$email_from = "contact@meenakshijk17.github.io";
$email_subject = "New Message";
$email_body = "Visitor Name: $name.\n".
              "Visitor Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "Message: $message.\n";
$to_email = 'meenakshi.krishnakumar.mk@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to_email, $email_subject, $email_body, $headers)
header("Location: contact.html")
?>