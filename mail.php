<?php

$name = $_POST['name']
$email = $_POST['email']
$message = $_POST['message']
$to = "mdmustafazayedcoc@gmail.com"
$subject = "Mail from form"

$headers = "from: ".$name. "\r\n" .
"CC: mdmustafazayedcoc@gmail.com";

$txt = "You have recieved an e-mail from ".$name ."\r\nEmail: " .$email ."\r\n Message: ". $message;

if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}

header('Location: thankyou.html');

?>