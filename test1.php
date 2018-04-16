<?php


require 'vendor/autoload.php';


// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");


$message = "<p>Hi,</p> <p>kindly help test the event rating system for fritz.</p> <p> Click on this <a href='dev-eventor.herokuapp.com/rate.php'> link </a> to test the rating system </p> <p> Thank you! </p> 

<p>Abiodun Adetona, Web developer @fritz</p> 
"; 

//$email =  array("abiodun@fritzng.com, adetonaabiodun12@gmail.com, adetona99@yahoo.com");


$from = new SendGrid\Email('Abiodun Adetona', "adetonaabiodun12@gmail.com");
$subject = "Fritz event review system.";
$to = new SendGrid\Email(null, "adetonaabiodun12@gmail.com");
$content = new SendGrid\Content("text/html", $message);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

//$apiKey = 'xxxx_api_key_xxxx';
$sg = new \SendGrid('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');

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();


/*$to = 'adetonaabiodun12@gmail.com';
$subject = "Test email for eventor";
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Fritz abiodun@fritzng.com' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";*/
//$headers = "From Abiodun"; 

 /*$body = "Hi Abiodun, you are a fucking genius"; */
/*For active your account, visit the link below to complete : 
http://www.thewallclone.com/updatepassword.php?email=$email&code=$code";*/ 

/*$sent=mail($to,$subject,$body,$headers);
if ($sent) 
{
echo ' Sent success';
} */ 



?>