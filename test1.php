<?php


require 'vendor/autoload.php';


// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "abiodun@fritzng.com");
$subject = "My test email for fritz review system";
$to = new SendGrid\Email(null, "adetonaabiodun12@gmail.com");
$content = new SendGrid\Content("text/plain", "Hello, This is from Fritzng!");
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