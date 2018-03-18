

<?php

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

	$check_fn = 'First Name/Last Name is empty'; //check if firstname or lastname is empty 
}

elseif(empty($password)){

	$check_pass = 'Password field is empty'; //check if password field is empty 
}

else{

	$query = "INSERT into `users` (first_name, last_name,  email, password, dob, phoneNumber, Address, twitter, facebook, instagram, created_at ) VALUES ('$first_name', '$last_name',  '$email', '$password_hash', '$dob', '$phoneNumber', '$Address', '$twitter', '$facebook', '$instagram', '$created_at')"; //insert the form data into the database.  
       
        $result = mysqli_query($con,$query);//send the query  

        if ($result) {
        	
        	$success = 'User successfully registered'; 
        }

        else{

        	return 'something went wrong'; 

        }
}

}

?>


 


