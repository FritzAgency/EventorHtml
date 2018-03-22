<?php


require_once('../Database/conn.php');

$email = 'adetonaabiodun12@gmail.com'; 


$update = "UPDATE users SET reset_token = 'fdbgdshgdsh' WHERE email = '$email'" or die(mysqli_error('Run time error...'));

$result = mysqli_query($con,$update) or die(mysqli_error());


if($result){

	echo 'Success'; 


}
else{
	echo 'Fail'; 
}

?> 