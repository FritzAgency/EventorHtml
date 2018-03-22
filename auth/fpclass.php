<?php 



require_once('../Database/conn.php');

if(isset($_POST['email'])){
	
$email=trim($_POST['email']);

$reset_token =md5(uniqid(true)); //unique token sent to the user 

$query = "SELECT email FROM users WHERE email='$email'" or die(mysqli_error('Run time error...')); 


$result = mysqli_query($con,$query) or die(mysqli_error());

$count = mysqli_num_rows($result);

if ($count ==1){

$update = "UPDATE users SET reset_token = '$reset_token' WHERE email = '$email'" or die(mysqli_error('Run time error...'));

$result = mysqli_query($con,$update) or die(mysqli_error());

$to = $email;
$subject = "Eventor: Reset Password";
//$header = "From Eventor";
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Fritz abiodun@fritzng.com' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$body="Here is the link to reset your Password. copy and paste into your browser below to complete the process localhost/eventorHtml/auth/newpassword.php?email=$email&token=$reset_token";  


$sent=mail($to,$subject,$body,$headers);

}

if($sent){
$message = "An email has been sent to your mail. Check your mail to reset your password"; 
}else{
	$message = "An error occured. Try again"; 
}
}

else{

echo 'You are not in our database'; 

}



?> 









