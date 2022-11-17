<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$email_from = 'eshop@gmail.com';
$to = "khanh201011@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

$email_subject = "New contact submission";

$email_body = "You have received a new message from the user $name.\n" .
  "Here is the message:\n $message";
echo $email_body;
echo $name;
echo $message;

try {
  mail($to, $email_subject, $message);
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "'\n";
}
