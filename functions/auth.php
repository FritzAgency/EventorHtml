

<?php
/*

This file contain the functions for processing user registration, login and logout.  

*/ 



/*
register a new user. 
*/

function signup(){

session_start(); //start session 

include('../Database/conn.php'); //include the database file. 

//when submit button is clicked
if (isset($_POST['submit'])) {


//grabs the user's input from the form field. 
$first_name= stripslashes($_POST['first_name']);
$last_name= stripslashes($_POST['last_name']);
//$gender= $_POST['gender']; 
$email = stripslashes($_POST['email']);
$password = stripslashes($_POST['password']); 
$password_hash = md5($password); 
$dob= stripslashes($_POST['dob']);
$phoneNumber = stripslashes($_POST['phoneNumber']); 
$Address= stripslashes($_POST['Address']);
$twitter= stripslashes($_POST['twitter']);
$facebook= stripslashes($_POST['facebook']); 
$instagram= stripslashes($_POST['instagram']); 
$created_at = date("Y-m-d");


//query the user's email 
$query = mysqli_query($con,"SELECT `email` FROM `users` WHERE `email` = '$email'");


//check if the user's email is in the user's table. 
	 if(mysqli_num_rows($query) >= 1) {
//throw error if already exists. 
  $_SESSION['message'] = 'This email is already being used. <a href="#">Login</a> if already registered'; 
} 

//check if the firtsname and last name is empty. 
if (empty($first_name) || empty($last_name)){
//throw error if empty. 
  $_SESSION['message'] = 'First Name/Last Name is empty'; 

  return false;  
}


//check if the password field is empty
if(empty($password)){
  //throw error if empty. 
  $_SESSION['message']= 'Password field is empty'; 
  return false; 
} 


//insert the user's input into the database. 

$insert = "INSERT into `users` (first_name, last_name,  email, password, dob, phoneNumber, Address, twitter, facebook, instagram, created_at ) VALUES ('$first_name', '$last_name',  '$email', '$password_hash', '$dob', '$phoneNumber', '$Address', '$twitter', '$facebook', '$instagram', '$created_at')";

$result = mysqli_query($con,$insert);

//if inserting of user's data failed
if ($result == true){ 
//redirect to the login page if registration succeeds.
  header("Location: ../auth/login.php"); 
}
else{
   //throw error.
 //$_SESSION['message'] = 'something went wrong';   

  echo "something went wrong " . mysqli_connect_error();
}

}

}
 




function login(){
session_start();

  
//if the submit button is clicked
if(isset($_POST['submit'])){
    $email = stripslashes($_POST['email']); 
    $password = stripslashes($_POST['password']); 
    $password_hash = md5($password); 

    //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email' and password='$password_hash'"; 

$result = mysqli_query($con,$query) or die(mysqli_error());

$count = mysqli_num_rows($result);

if ($count == 1){
while( $row = mysqli_fetch_array($result) ){
    //$array[]= $row;   
    $_SESSION['email'] = $email; //store the user's email into session 
    $id = $row['id'];

    $first_name = $row['first_name']; 

    $_SESSION['id'] = $id; //store the user's id into session   

    $_SESSION['first_name'] = $first_name; 

    $_SESSION['last_name'] = $last_name; 

    $_SESSION['phoneNumber'] = $phoneNumber; 

    $_SESSION['Address'] = $Address; 

    header("Location: ../index.php");//redirect to the homepage after log in. 


} 
}

else{
       $_SESSION['message'] = 'Password/Email incorrect'; 
}

}

}


function logout(){

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../index.php"); // Redirecting To Home Page
}


} 

/*
function to recover a lost password. 
*/ 

function forgotpassword(){

session_start();


require_once('../Database/conn.php');

//when the email has been filled. 
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

if($sent){

$_SESSION['message'] = "An email has been sent to your mail. Check your mail to reset your password"; //send a message if email sent successfully. 

}else{
    //echo "An error occured. Try again"; 

    $_SESSION['message'] = 'An error occured. Try again';
}

}


else{

//$message = 'You are not in our database'; 

$_SESSION['message'] = 'You are not a registered user on Eventor'; //show this when the email is not found in the database. 

}
}

}

/*

Set a new password. 

*/

function setnewpassword(){


session_start();


require_once('../Database/conn.php');


if(isset($_POST['submit'])){



$newpassword = $_POST['newpassword']; 

$repassword = $_POST['repassword']; 

$email = $_GET['email']; 

$token = $_GET['token']; 


if (isset($email) && isset($token) ){

    if ($newpassword == $repassword){

     $password=md5($newpassword);

     $query = "UPDATE users SET reset_token='', password='$password' WHERE email='$email'"; 


$result = mysqli_query($con,$query);

if ($result){
    $_SESSION['message'] = 'Your password has been changed successfully'; 

}

else{
   $_SESSION['message'] ='Something went wrong. Try again';  
}

}

else{

    $_SESSION['message'] = 'Password do not match'; 
}

}
}

}


?>


 


