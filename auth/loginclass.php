<?php


require_once('../Database/conn.php');

session_start();

//if the submit button is clicked
if(isset($_POST['submit'])){
	$email = stripslashes($_POST['email']); 
	$password = stripslashes($_POST['password']); 
	$password_hash = md5($password); 

	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email' and password='$password_hash'"; 

$result = mysqli_query($con,$query) or die(mysql_error());

$rows = mysqli_num_rows($result);

if ($rows == 1){

	$success = 'successful logging in'; 
}

else{

	$success = 'Password/Email incorrect'; 
}

}


?> 