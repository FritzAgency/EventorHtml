
<?php


require 'vendor/autoload.php';


// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");


/*$message = "<p>Hi,</p> <p>kindly help test the event rating system for fritz.</p> <p> Click on this <a href='https://dev-eventor.herokuapp.com/rate.php'> link </a> to test the rating system </p> <p> Thank you! </p> 

<p>Abiodun Adetona, Web developer @fritz</p> 
";*/ 




/*$message =  '

Kindly rate your experience
<form>
<ul class="rate-area" style="margin-left: -40px">


        
      <input type="radio" id="5-star" name="rating" value="5" /><label for="5-star" title="Amazing">5 stars</label>
      <input type="radio" id="4-star" name="rating" value="4" /><label for="4-star" title="Good">4 stars</label>
      <input type="radio" id="3-star" name="rating" value="3" /><label for="3-star" title="Average">3 stars</label>
      <input type="radio" id="2-star" name="rating" value="2" /><label for="2-star" title="Not Good">2 stars</label>
      <input type="radio" id="1-star" name="rating" value="1" /><label for="1-star" title="Bad">1 star</label>
      
  </ul>

  </form>'; */ 

$message = 
"<html>
<head>
<style>
/* Star hover using lang hack in its own style wrapper, otherwise Gmail will strip it out */
* [lang~='x-star-wrapper']:hover *[lang~='x-star-number']{
color: #119da2 !important;
border-color: #119da2 !important;
}

* [lang~='x-star-wrapper']:hover *[lang~='x-full-star'],
* [lang~='x-star-wrapper']:hover ~ *[lang~='x-star-wrapper'] *[lang~='x-full-star'] {
display : block !important;
width : auto !important;
overflow : visible !important;
float : none !important;
margin-top: -1px !important;
}

* [lang~='x-star-wrapper']:hover *[lang~='x-empty-star'],
* [lang~='x-star-wrapper']:hover ~ *[lang~='x-star-wrapper'] *[lang~='x-empty-star'] {
display : block !important;
width : 0 !important;
overflow : hidden !important;
float : left !important;
height: 0 !important;
}
</style>


<style>
/* Normal email CSS */
@-ms-viewport {
width: device-width;
}
body {
margin: 0;
padding: 0;
min-width: 100%;
}
table {
border-collapse: collapse;
border-spacing: 0;
}
td {
vertical-align: top;
}
img {
border: 0;
-ms-interpolation-mode: bicubic;
max-width: 100% !important;
height: auto;
}
a {
text-decoration: none;
color: #119da2;
}
a:hover {
text-decoration: underline;
}

*[class=main-wrapper],
*[class=main-content]{
min-width: 0 !important;
width: 600px !important;
margin: 0 auto !important;
}
*[class=rating] {
unicode-bidi: bidi-override;
direction: rtl;
}
*[class=rating] > *[class=star] {
display: inline-block;
position: relative;
text-decoration: none;
}

@media (max-width: 621px) {
* {
box-sizing: border-box;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
-o-box-sizing: border-box;
}
table {
min-width: 0 !important;
width: 100% !important;
}
*[class=body-copy] {
padding: 0 10px !important;
}
*[class=main-wrapper],
*[class=main-content]{
min-width: 0 !important;
width: 320px !important;
margin: 0 auto !important;
}
*[class=ms-sixhundred-table] {
width: 100% !important;
display: block !important;
float: left !important;
clear: both !important;
}
*[class=content-padding] {
padding-left: 10px !important;
padding-right: 10px !important;
}
*[class=bottom-padding]{
margin-bottom: 15px !important;
font-size: 0 !important;
line-height: 0 !important;
}
*[class=top-padding] {
display: none !important;
}
*[class=hide-mobile] {
display: none !important;
}


/* Prevent hover effects so double click issue doesn't happen on mobile devices */
* [lang~='x-star-wrapper']:hover *[lang~='x-star-number']{
color: #AEAEAE !important;
border-color: #FFFFFF !important;
}
* [lang~='x-star-wrapper']{
pointer-events: none !important;
}
* [lang~='x-star-divbox']{
pointer-events: auto !important;
}
*[class=rating] *[class='star-wrapper'] a div:nth-child(2),
*[class=rating] *[class='star-wrapper']:hover a div:nth-child(2),
*[class=rating] *[class='star-wrapper'] ~ *[class='star-wrapper'] a div:nth-child(2){
display : none !important;
width : 0 !important;
height: 0 !important;
overflow : hidden !important;
float : left !important;
}
*[class=rating] *[class='star-wrapper'] a div:nth-child(1),
*[class=rating] *[class='star-wrapper']:hover a div:nth-child(1),
*[class=rating] *[class='star-wrapper'] ~ *[class='star-wrapper'] a div:nth-child(1){
display : block !important;
width : auto !important;
overflow : visible !important;
float : none !important;
}
}
</style>
</head>
<body style='margin-top: 0;margin-bottom: 0;margin-left: 0;margin-right: 0;padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;min-width: 100%;background-color: #f5f5f5'>
<table class='main-wrapper' style='border-collapse: collapse;border-spacing: 0;display: table;table-layout: fixed; margin: 0 auto; -webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;text-rendering: optimizeLegibility;background-color: #f5f5f5; width: 100%;'>
<tbody>
<tr>
<td style='padding: 0;vertical-align: top'>
<div class='bottom-padding' style='margin-bottom: 0px; line-height: 30px; font-size: 30px;''>&nbsp;</div>
</td>
</tr>
<tr>
<td style='padding: 0;vertical-align: top; width: 100%;'>
<center>
<!--[if gte mso 11]>
<center>
<table><tr><td class='ms-sixhundred-table' width='600'>
<![endif]-->

<table class='main-content' style='width: 100%; max-width: 600px; border-collapse: separate;border-spacing: 0;margin-left: auto;margin-right: auto; border: 1px solid #EAEAEA; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; background-color: #ffffff; overflow: hidden;' width='600'>
<tbody>
<tr>
<td style='padding: 0;vertical-align: top;''>
<table class='main-content' style='border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 100%; max-width: 600px;'>
<tbody>
<tr>
<td style='padding: 0;vertical-align: top;text-align: left'>
<table class='contents' style='border-collapse: collapse;border-spacing: 0;width: 100%;'>
<tbody>
<tr>
<td class='content-padding' style='padding: 0;vertical-align: top'>
<div style='margin-bottom: 0px; line-height: 30px; font-size: 30px;''>&nbsp;</div>
<div class='body-copy' style='margin: 0;'>

<div style='margin: 0;color: #60666d;font-size: 50px;font-family: sans-serif;line-height: 20px; text-align: left;'>
<div class='bottom-padding' style='margin-bottom: 0px; line-height: 15px; font-size: 15px;'>&nbsp;</div>
<div style='text-align: center; margin: 0; font-size: 10px;  text-transform: uppercase; letter-spacing: .5px;'>Rating (select a star amount):</div>
<div class='bottom-padding' style='margin-bottom: 0px; line-height: 7px; font-size: 7px;''>&nbsp;</div>
<div style='width: 100%; text-align: center; float: left;'>
<div class='rating' style='text-align: center; margin: 0; font-size: 50px; width: 275px; margin: 0 auto; margin-top: 10px;'>

<table style='border-collapse: collapse;border-spacing: 0;width: 275px; margin: 0 auto; font-size: 50px; direction: rtl;' dir='rtl'>
<tbody><tr>
<td style='padding: 0;vertical-align: top;'' width='55 class='star-wrapper' lang='x-star-wrapper'>
<div style='display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;'>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=5&&email=eniola.lion@gmail.com' class='star target='_blank' lang='x-star-divbox' style='color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;'' tabindex='1'>
<div lang='x-empty-star' style='margin: 0;display: inline-block;'>☆</div>
<div lang='x-full-star' style='margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;'>★</div>
</a>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=5&&email=eniola.lion@gmail.com' class='star-number' target='_blank' lang='x-star-number' style='font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;'>5</a>
</div>
</td>
<td style='padding: 0;vertical-align: top' width='55' class='star-wrapper' lang='x-star-wrapper'>
<div style='display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;'>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=4&&email=eniola.lion@gmail.com' class='star' target='_blank' lang='x-star-divbox' style='color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;' tabindex='2'>
<div lang='x-empty-star' style='margin: 0;display: inline-block;'>☆</div>
<div lang='x-full-star' style='margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;'>★</div>
</a>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=4&&email=eniola.lion@gmail.com' class='star-number' target='_blank' lang='x-star-number' style='font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;'>4</a>
</div>
</td>
<td style='padding: 0;vertical-align: top' width='55' class='star-wrapper' lang='x-star-wrapper'>
<div style='display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;'>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=3&&email=eniola.lion@gmail.com' class='star target='_blank' lang='x-star-divbox' style='color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;'' tabindex='3'>
<div lang='x-empty-star' style='margin: 0;display: inline-block;'>☆</div>
<div lang='x-full-star' style='margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;'>★</div>
</a>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=3&&email=eniola.lion@gmail.com' class

='star-number' target='_blank' lang='x-star-number' style='font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;'>3</a>
</div>
</td>
<td style='padding: 0;vertical-align: top' width='55' class='star-wrapper' lang='x-star-wrapper'>
<div style='display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;'>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=2&&email=eniola.lion@gmail.com' class='star' target='_blank' lang='x-star-divbox' style='color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;' tabindex='4'>
<div lang='x-empty-star' style='margin: 0;display: inline-block;'>☆</div>
<div lang='x-full-star' style='margin: 0;display: inline-block; w
idth:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;'>★</div>
</a>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=2&&email=eniola.lion@gmail.com' class='star-number' target='_blank' lang='x-star-number' style='font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;'>2</a>
</div>
</td>
<td style='padding: 0;vertical-align: top' width='55' class='star-wrapper' lang='x-star-wrapper'>
<div style='display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;'>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=1&&email=eniola.lion@gmail.com' class='star' target='_blank' lang='x-star-divbox' style='color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;' tabindex='5'>
<div lang='x-empty-star' style='margin: 0;display: inline-block;'>☆</div>
<div lang='x-full-star' style='margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;'>★</div>
</a>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=1&&email=eniola.lion@gmail.com' class='star-number' target='_blank' lang='x-star-number' style='font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;'>1</a>
</div>
</td>
</tr>
</tbody></table>




</div>
</div>
<div style='margin-bottom: 0px; line-height: 30px; font-size: 30px;'>&nbsp;</div>
</div>

</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if gte mso 11]>
</td></tr></table>
</center>
<![endif]-->
</center>
</td>
</tr>
</tbody>
</table>
</body>
</html>";




//$email =  array("abiodun@fritzng.com, adetonaabiodun12@gmail.com, adetona99@yahoo.com");


$from = new SendGrid\Email('Abiodun Adetona', "Abiodun@fritzng.com");
$subject = "Fritz event review system.";
$to = new SendGrid\Email(null, "eniola.lion@gmail.com");
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


