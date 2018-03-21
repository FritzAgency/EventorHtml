<?php 



require_once('../Database/conn.php');

if(isset($_POST['email'])){
	
$email=trim($_POST['email']);

$code=md5(uniqid(true)); //unique token sent to the user 

$query = "SELECT email FROM users WHERE email='$email'" or die(mysqli_error('Run time error...')); 


$result = mysqli_query($con,$query) or die(mysqli_error());

$count = mysqli_num_rows($result);

if ($count ==1){

$to = $email;
$subject = "Eventor: Reset Password";
$header = "From Eventor";
$body="Here is the link to reset your Password. Visit the link below to complete the process localhost/newpassword.php?email=$email&code=$code";  

$sent=mail($to,$subject,$body,$header);

$message = "An email has been sent to your mail. Check your mail to reset your password"; 

}

else{

echo 'You are not in our database'; 

}

}

?> 









