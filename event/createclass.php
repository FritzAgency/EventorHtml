<?php


 require_once('../Database/conn.php');

if(isset($_POST['submit'])){
	
$title = $_POST['title']; 
$description = $_POST['description']; 
$creator_id = $_SESSION['id']; 
$created_at = date("Y-m-d"); //get the date of registration. 


	$query = "INSERT into `event` (title, description, creator_id) VALUES ($title, $description, $creator_id, $created_at)";

        $result = mysqli_query($con,$query);//send the query

        if ($result) {
        	echo 'event created'; 
        }
        else{
        	echo 'Something went wrong'; 
        }

}


?> 