
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


$message = '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Raleway" rel="stylesheet">
<style>

body{

font-family: "Montserrat", sans-serif;
}

</style>
  
  </head>
<body>

<div class="container">
 
  <div class="row">
    <div class="col-sm-2" style="background-color:; margin: 0px;">
    	
   <!--img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b9/Terminator-2-judgement-day.jpg/250px-Terminator-2-judgement-day.jpg" width="250" height="250"--> 		
   	
	<img src="https://i.imgur.com/CuAJRIn.jpg" width="200" height="200">

 	
	
	
	
	</div>
    <div class="col-sm-10" style="background-color:;">
    	<div class="col-sm-6" style="background-color:white;">
    		<p style="color:#4f2684;" style="font-size: 15px"><strong>LAWAL HARDCORE</strong></p>
    		<p style="color:#;">UI/UX  Designer | Graphics Designer</p>
    		<p> <b>Email:</b> lawalhardcore@eventor.com</p>

    	</div>
    	<div class="col-sm-12" style="background-color:#512586; color: white; height: 110px;">
    		<div class="col-sm-12">
    		<div class="col-sm-6">
    			<h5>Cranium One, Towry Close,</h5>

    			<h5>Adeola  Odeku,  Victoria Island, Lagos.</h5>
    		</div>
    		<div class="col-sm-6" style="padding: 10px;  height: 50px; text-align: center;">

				<button type="button" class="btn btn-default" style="border-radius: 50%;">
				    <!--span class="fa fa-facebook" style="color: #512586"></span-->
					<img src="https://i.imgur.com/NVnQSaR.jpg" class="fa fa-facebook" style="color: #512586"> 
				  </button>
				  <button type="button" class="btn btn-default" style="border-radius: 50%;">
				    <!--span class="fa fa-twitter" style="color: #512586"></span-->
					<img src="https://i.imgur.com/vvsD3wv.jpg" class="fa fa-facebook" style="color: #512586">
				  </button>
				  <button type="button" class="btn btn-default" style="border-radius: 50%;">
				    <!--span class="fa fa-instagram" style="color: #512586"></span-->
					<img src="https://i.imgur.com/cALUfN7.jpg" class="fa fa-facebook" style="color: #512586">
				  </button>

				  <!--button type="button" class="btn btn-default" style="border-radius: 50%;">
				    <span class="fa fa-linkedin" style="color: #512586"></span>
				  </button-->
    		</div>
	<div class="col-sm-12" >
    		<!--div class="col-sm-6">
    		<p>08111 0832 161 | info@eventor.com | <a href="https://fritzng.com">www.eventor.com</a> </p>
    		</div-->  
    		<!--span class="col-sm-1">|</span>
    		<div class="col-sm-2">
    		<p>info@eventor.com</p> 
    		</div> 
    		<span class="col-sm-1">|</span>
    		<div class="col-sm-2">
    		<p>www.eventor.com</p>
    		</div--> 
    			
    		</div>
    	
    		
    	</div>
    	
    </div>

    
  </div>
  <div class="col-sm-12" style="background-color:white; color: gray">
    	<div> DISCLAIMER: This email and any files transmitted with it are confidential and intended solely for the use of the individual or entity to whom they are addressed. This message contains confidential information and is intended only for the individual named. If you are not the named addressee you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately by e-mail if you have received this e-mail by mistake and delete this e-mail from your system.</div>
    </div>
</div>


</body>
</html>


'; 



//$email =  array("abiodun@fritzng.com, adetonaabiodun12@gmail.com, adetona99@yahoo.com");


$from = new SendGrid\Email('Abiodun Adetona', "Abiodun@fritzng.com");
$subject = "Fmedia Template (test).";
$to = new SendGrid\Email(null, "onojaife2va@yahoo.com");
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


