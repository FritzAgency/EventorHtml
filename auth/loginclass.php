<?php


$db_host='localhost'; //defining the database host. 
$db_user='root'; //defining the database user. 
$db_name='eventor';//defining the database name.   
$db_pass=''; //defining the password

$con = mysqli_connect($db_host, $db_user, "", $db_name);//establishing the connecting. 

// Check if its connected. 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();//returns error if connection failed. 
  } 
  
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

	header("Location: ../index.php");//redirect to the homepage after log in. 


} 
}

else{

	$success = 'Password/Email incorrect'; 
}

}


?> 