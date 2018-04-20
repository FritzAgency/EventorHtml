
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

$message = '
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>


   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <style type="text/css">

    * { margin: 0; padding: 0; font-size: 100%; font-family: "Avenir Next", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; line-height: 1.65; }

img { max-width: 100%; margin: 0 auto; display: block; }

body, .body-wrap { width: 100% !important; height: 100%; background: #f8f8f8; }

a { color: #71bc37; text-decoration: none; }

a:hover { text-decoration: underline; }

.text-center { text-align: center; }

.text-right { text-align: right; }

.text-left { text-align: left; }

.button { display: inline-block; color: white; background: #71bc37; border: solid #71bc37; border-width: 10px 20px 8px; font-weight: bold; border-radius: 4px; }

.button:hover { text-decoration: none; }

h1, h2, h3, h4, h5, h6 { margin-bottom: 20px; line-height: 1.25; }

h1 { font-size: 32px; }

h2 { font-size: 28px; }

h3 { font-size: 24px; }

h4 { font-size: 20px; }

h5 { font-size: 16px; }

p, ul, ol { font-size: 16px; font-weight: normal; margin-bottom: 20px; }

.container { display: block !important; clear: both !important; margin: 0 auto !important; max-width: 580px !important; }

.container table { width: 100% !important; border-collapse: collapse; }

.container .masthead { padding: 80px 0; background: white; color: white; }

.container .masthead h1 { margin: 0 auto !important; max-width: 90%; text-transform: uppercase; }

.container .content { background: white; padding: 30px 35px; }

.container .content.footer { background: none; }

.container .content.footer p { margin-bottom: 0; color: #888; text-align: center; font-size: 14px; }

.container .content.footer a { color: #888; text-decoration: none; font-weight: bold; }

.container .content.footer a:hover { text-decoration: underline; }


    </style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td align="center" class="masthead">

                        <!--h1></h1-->

                        <img src="http://dev-eventor.herokuapp.com/Fmedia.png"> 

                    </td>
                </tr>
                <tr>
                    <td class="content">

                        <h2>Hi Stranger,</h2>

                        <p class="text-justify">Buffalo tenderloin chuck short ribs filet mignon cow shankle. Shankle spare ribs rump drumstick, bacon swine sausage strip steak beef pork belly leberkas. </p>

                        <p>Biltong buffalo tongue t-bone bacon pastrami ribeye alcatra shoulder filet mignon leberkas strip steak capicola turkey ham.</p>

                        <p> Meatball jerky ground round, salami turducken buffalo shoulder spare ribs strip steak alcatra prosciutto pastrami tenderloin drumstick. Pig biltong flank shoulder tail chuck. </p>

                        <table>
                            <tr>
                                <td align="center">
                                    <p>
                                        <a href="http://fritzng.com/" class="button">Visit Our Site</a>
                                    </p>
                                </td>
                            </tr>
                        </table>

                       

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        <p>Sent by <a href="#">fmedia</a>, 1 Cranium One, Victoria Island, Lagos</p>
                        <p><a href="mailto:">hello@fmedia.com</a> | <a href="#">Unsubscribe</a></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>'; 




//$email =  array("abiodun@fritzng.com, adetonaabiodun12@gmail.com, adetona99@yahoo.com");


$from = new SendGrid\Email('Abiodun Adetona', "Abiodun@fritzng.com");
$subject = "Fmedia Template (test).";
$to = new SendGrid\Email(null, "lanre@fritzng.com");
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


