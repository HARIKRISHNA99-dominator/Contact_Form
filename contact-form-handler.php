<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'krishnah98@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n".
                     "User Message: $message.\n";
                 
$to = "hari.19bce7675@vitap.ac.in";

$headers ="From: $email_from \r\n";     

$headers .="Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:Contact_i.html");
?>