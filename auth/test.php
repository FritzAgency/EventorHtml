<?php

session_start(); 

require_once('../Database/conn.php');

$id = $_SESSION['id']; 

$query =  "SELECT * FROM `event` JOIN users ON users.id = event.creator_id WHERE `creator_id` = $id"; 

 $result = mysqli_query($con,$query); 


$row = mysqli_num_rows($result); 
//or die(mysqli_error($con));

/*if($row<1 ){
	echo '0'; 
}*/

//echo $row; 


while($row = mysqli_fetch_array($result)){

	echo '<div>'. $row['event_title']. '</div>'; 
}


?>