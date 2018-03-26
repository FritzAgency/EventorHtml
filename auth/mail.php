<?php

/* Send a link to reset password */
/*ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","587");
ini_set("sendmail_from","adetonaabiodun12@gmail.com");
ini_set("SMTP","tls://smtp.gmail.com");*/ 
error_reporting(E_ALL);
$to = 'adetonaabiodun12@gmail.com';
$subject = "Test email for eventor";
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Fritz abiodun@fritzng.com' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers = "From Abiodun"; 

 $body = "Hi Abiodun, you are a fucking genius"; 
/*For active your account, visit the link below to complete : 
http://www.thewallclone.com/updatepassword.php?email=$email&code=$code";*/ 

$sent=mail($to,$subject,$body,$headers);
if ($sent) 
{
echo ' Sent success';
} 



?>