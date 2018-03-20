<?php


 require_once('../Database/conn.php');


$target_dir = "../public/images/"; //target storage directory to store the image. 

if(isset($_POST['save'])){

$event_title = $_POST['event_title']; 
$creator_id = $_SESSION['id']; 
$event_description = $_POST['event_description']; 
$status = $_POST['status']; 
$sponsor_name = $_POST['sponsor_name']; 
$sponsor_url = $_POST['sponsor_url']; 
$created_at = date("Y-m-d");
$sponsor_logo = $_FILES["sponsor_logo"]["name"]; 
$org_name = $_POST['org_name']; 
$org_logo = $_FILES["org_logo"]["name"]; 
$event_flier = $_FILES["event_flier"]["name"]; 
$Address = $_POST['Address']; 
$city = $_POST ['city'];  
$state = $_POST['state'];
$lga = $_POST['lga']; 
$event_starts = $_POST['event_starts']; 
$event_ends = $_POST['event_ends'];
$facebook = $_POST['facebook']; 
$instagram = $_POST['instagram']; 
$twitter = $_POST['twitter']; 
$ticket_qty = $_POST['ticket_qty']; 
$ticket_price = $_POST['ticket_price']; 

$event_url = preg_replace('/\s+/', '-', $event_title); 


$target_file = $target_dir . basename($_FILES["sponsor_logo"]["name"]);	
$target_file = $target_dir . basename($_FILES["org_logo"]["name"]);	
$target_file = $target_dir . basename($_FILES["event_flyer"]["name"]);	


move_uploaded_file($_FILES["sponsor_logo"]["tmp_name"], "../public/images/".$_FILES['sponsor_logo']['name']); 


move_uploaded_file($_FILES["org_logo"]["tmp_name"], "../public/images/".$_FILES['org_logo']['name']); 


move_uploaded_file($_FILES["event_flyer"]["tmp_name"], "../public/images/".$_FILES['event_flyer']['name']); 

//move_uploaded_file($_FILES['userfile']['tmp_name'], 'c:/wamp/www/uploads/images/'.$file['name']);


	$query = "INSERT into `event` (creator_id, event_title, event_url, event_description, status, sponsor_name, sponsor_url, sponsor_logo, org_name, org_logo, event_flier, Address, city, state, lga, event_starts, event_ends, facebook, twitter, instagram, ticket_qty, ticket_price, created_at) VALUES ('$creator_id', '$event_title', '$event_url', '$event_description', '$status', '$sponsor_name', '$sponsor_url', '$sponsor_logo', '$org_name', '$org_logo', '$event_flier', '$Address', '$city', '$state', '$lga', '$event_starts', '$event_ends', '$facebook', '$twitter', '$instagram', '$ticket_qty', '$ticket_price', '$created_at' )";  

        $result = mysqli_query($con,$query) or die(mysqli_error($con));


        //send the query

        if ($result) {
        	$message = "Your page has been created successfully. Your event page is at '<a href='/eventorhtml/event/page/$event_url'> localhost/eventorhtml/event/page/$event_url</a>";        
        }
        else{
        	$message = 'oops, something went wrong'; 
        }
}
?> 