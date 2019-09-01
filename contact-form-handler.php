<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['telephone'];
$message = $_POST['message'];

$email_form = 'helpmycar@tst-dev.com';

$email_subject = "Message from TST-dev";

$email_body = 
    "Name: $name.\n".
        "Email: $visitor_email.\n".
            "Phone: $phone.\n".
                "Message: $message.\n";


$to = "epetkov.dev@gmail.com";
$headers = "From: $email_form \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");

?>