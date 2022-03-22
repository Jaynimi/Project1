<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mail_from = 'EyesLikeJays@yahoo.com';


$email_subject = 'New Website Form Submission'

$email_body = "User Name: $name.\n".
               "User Name: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message .\n";


$to = 'EyesLikeJays@yahoo.com';

$headers = "From: $email-from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>