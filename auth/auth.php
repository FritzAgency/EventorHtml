

<?php


/*
function to register a new user. 
*/

function signup(){

session_start();


require_once('../Database/conn.php');
//if the submit is clicked. 
if (isset($_POST['submit'])) {

$first_name= stripslashes($_POST['first_name']); //grabs the first_name from the form.  

$last_name= stripslashes($_POST['last_name']);//grabs the last_name from the form


//$gender= $_POST['gender']; //grabs the user's gender from the form.  


$email = stripslashes($_POST['email']); //grabs the email from the form 

$password = stripslashes($_POST['password']); //grabs the password from the form 

$password_hash = md5($password); //encrypt the password for security. 

$dob= stripslashes($_POST['dob']);//grabs the date of birth from the form



$phoneNumber = stripslashes($_POST['phoneNumber']); //grabs the user's phonenumber from the field

$Address= stripslashes($_POST['Address']); //grabs the user's Address from the field 


$twitter= stripslashes($_POST['twitter']); //grabs the user's twitter from the field 


$facebook= stripslashes($_POST['facebook']); //grabs the user's facebook from the field 


$instagram= stripslashes($_POST['instagram']); //grabs the user's instagram from the field 

$created_at = date("Y-m-d"); //get the date of registration. 


$select = mysqli_query($con,"SELECT `email` FROM `users` WHERE `email` = '$email'"); //query to make sure if user's email is not existing in our database.

	   if(mysqli_num_rows($select) >= 1) {
  $check_mail = 'This email is already being used. <a href="#">Login</a> if already registered'; //show message on the frontend.   
} 

elseif(empty($first_name) || empty($last_name)){

	//$check_fn = 'First Name/Last Name is empty'; //check if firstname or lastname is empty 

    $_SESSION['message'] = 'First Name/Last Name is empty';
}

elseif(empty($password)){

	//$check_pass = 'Password field is empty'; //check if password field is empty 

    $_SESSION['message']= 'Password field is empty'; 
}

else{

	$query = "INSERT into `users` (first_name, last_name,  email, password, dob, phoneNumber, Address, twitter, facebook, instagram, created_at ) VALUES ('$first_name', '$last_name',  '$email', '$password_hash', '$dob', '$phoneNumber', '$Address', '$twitter', '$facebook', '$instagram', '$created_at')"; //insert the form data into the database.  
       
        $result = mysqli_query($con,$query);//send the query  

        if ($result) {
        	
        	$_SESSION['message'] = 'User successfully registered'; 

        	header("Location: ../auth/login.php");
        }

        else{

        	$_SESSION['message'] = 'something went wrong'; 

        }
}

}
} 




function login(){
session_start();

/*$db_host='localhost'; //defining the database host. 
$db_user='root'; //defining the database user. 
$db_name='eventor';//defining the database name.   
$db_pass=''; //defining the password

$con = mysqli_connect($db_host, $db_user, "", $db_name);//establishing the connecting. 

// Check if its connected. 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();//returns error if connection failed. 
  } */ 

  
require_once('../Database/conn.php');

  
//if the submit button is clicked
if(isset($_POST['submit'])){
    $email = stripslashes($_POST['email']); 
    $password = stripslashes($_POST['password']); 
    $password_hash = md5($password); 

    //Checking if user exists in the database or not
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


 


