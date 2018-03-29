<?php


 require_once('../Database/conn.php');


$target_dir = "../public/images/"; //the storage directory to store the image. 

//when the submit button is clicked
if(isset($_POST['event_title'])){

$event_title = $_POST['event_title']; //grabs the event title from the form
$creator_id = $_SESSION['id']; //the creator session id to differentiate creators from each other. 
$event_description = $_POST['event_description'];  //grabs the event description from the form
//$status = $_POST['status'];  //grabs the event status from the form 
$sponsor_name = $_POST['sponsor_name']; //grabs the sponsor's name from the form 
$sponsor_url = $_POST['sponsor_url']; //grabs the sponsor's url from the form 
$created_at = date("Y-m-d");
$sponsor_logo = $_FILES["sponsor_logo"]["name"]; 

$sponsor_name1 = $_POST['sponsor_name1']; //grabs the sponsor's name from the form 
$sponsor_url1 = $_POST['sponsor_url1']; //grabs the sponsor's url from the form 

$sponsor_logo1 = $_FILES["sponsor_logo1"]["name"]; 

$sponsor_name2 = $_POST['sponsor_name2']; //grabs the sponsor's name from the form 
$sponsor_url2 = $_POST['sponsor_url2']; //grabs the sponsor's url from the form 

$sponsor_logo2 = $_FILES["sponsor_logo2"]["name"]; 
$org_name = $_POST['org_name']; 
$org_logo = $_FILES["org_logo"]["name"]; 
$event_flier = $_FILES["event_flier"]["name"]; 
//$event_flier1 = $_FILES["event_flier1"]["name"]; 
//$event_flier2 = $_FILES["event_flier2"]["name"]; 

$Address = $_POST['Address']; 
$city = $_POST ['city'];  
$state = $_POST['state'];
//$lga = $_POST['lga']; 
$event_starts = $_POST['event_starts']; 
$event_ends = $_POST['event_ends'];
$facebook = $_POST['facebook']; 
$instagram = $_POST['instagram']; 
$twitter = $_POST['twitter']; 
$ticket_qty = $_POST['ticket_qty']; 
$ticket_price = $_POST['ticket_price']; 


$sch_name = $_POST['sch_name'];
$sch_start = $_POST['sch_start']; 
$sch_end  = $_POST['sch_start'];


$sch_name1 = $_POST['sch_name1'];
$sch_start1 = $_POST['sch_start1']; 
$sch_end1  = $_POST['sch_start1'];


$sch_name2 = $_POST['sch_name2'];
$sch_start2 = $_POST['sch_start2']; 
$sch_end2  = $_POST['sch_start2'];


$act_name = $_POST['act_name']; 
$act_loc = $_POST['act_loc']; 
$act_desc = $_POST['act_desc']; 
$act_date = $_POST['act_date']; 
$act_img = $_FILES["act_img"]["name"];

$event_url = preg_replace('/\s+/', '-', $event_title); 


$target_file = $target_dir . basename($_FILES["sponsor_logo"]["name"]);	

$target_file = $target_dir . basename($_FILES["sponsor_logo1"]["name"]);	


$target_file = $target_dir . basename($_FILES["sponsor_logo2"]["name"]);	

$target_file = $target_dir . basename($_FILES["org_logo"]["name"]);	
$target_file = $target_dir . basename($_FILES["event_flier"]["name"]);	
//$target_file = $target_dir . basename($_FILES["event_flier1"]["name"]);	
//$target_file = $target_dir . basename($_FILES["event_flier2"]["name"]);	
$target_file = $target_dir . basename($_FILES["act_img"]["name"]);	


move_uploaded_file($_FILES["sponsor_logo"]["tmp_name"], "../public/images/".$_FILES['sponsor_logo']['name']); 


move_uploaded_file($_FILES["sponsor_logo1"]["tmp_name"], "../public/images/".$_FILES['sponsor_logo1']['name']); 

move_uploaded_file($_FILES["sponsor_logo2"]["tmp_name"], "../public/images/".$_FILES['sponsor_logo2']['name']); 

move_uploaded_file($_FILES["org_logo"]["tmp_name"], "../public/images/".$_FILES['org_logo']['name']); 


move_uploaded_file($_FILES["event_flier"]["tmp_name"], "../public/images/".$_FILES['event_flier']['name']); 

//move_uploaded_file($_FILES["event_flier1"]["tmp_name"], "../public/images/".$_FILES['event_flier1']['name']); 


//move_uploaded_file($_FILES["event_flier2"]["tmp_name"], "../public/images/".$_FILES['event_flier2']['name']); 


move_uploaded_file($_FILES["act_img"]["tmp_name"], "../public/images/".$_FILES['act_img']['name']); 


//move_uploaded_file($_FILES['userfile']['tmp_name'], 'c:/wamp/www/uploads/images/'.$file['name']);

$act_name = $_POST['act_name']; 
$act_loc = $_POST['act_loc']; 
$act_desc = $_POST['act_desc']; 
$act_date = $_POST['act_date']; 
$act_img = $_FILES["act_img"]["name"];

	$query = "INSERT into `event` (creator_id, event_title, event_url, event_description,  sponsor_name, sponsor_url, sponsor_logo, sponsor_name1, sponsor_url1, sponsor_logo1, sponsor_name2, sponsor_url2, sponsor_logo2, org_name, org_logo, event_flier, Address, city, state,  event_starts, event_ends, facebook, twitter, instagram, act_name, act_desc, act_date, act_img, ticket_qty, ticket_price, created_at, sch_name, sch_start, sch_end,  sch_name1, sch_start1, sch_end1,  sch_name2, sch_start2, sch_end2) VALUES ('$creator_id', '$event_title', '$event_url', '$event_description', '$sponsor_name', '$sponsor_url', '$sponsor_logo', '$sponsor_name1', '$sponsor_url1', '$sponsor_logo1', '$sponsor_name2', '$sponsor_url2', '$sponsor_logo2','$org_name', '$org_logo', '$event_flier', '$Address', '$city', '$state', '$event_starts', '$event_ends', '$facebook', '$twitter', '$instagram', '$act_name', '$act_desc', '$act_date', '$act_img', '$ticket_qty', '$ticket_price', '$created_at', '$sch_name', '$sch_start', '$sch_end', '$sch_name1', '$sch_start1', '$sch_end1', '$sch_name2', '$sch_start2', '$sch_end2')";  

        $result = mysqli_query($con,$query) or die(mysqli_error($con));


        //send the query

        if ($result) {
        	//$message = "Your page has been created successfully. Your event page is at '<a href='/eventorhtml/event/page/$event_url'> localhost/eventorhtml/event/page/$event_url</a>"; 
        	$message = "Your page has been created successfully. Your event page is at '<a href='/eventorhtml/newGenerated.php?event_url=$event_url'> localhost/eventorhtml/newGenerated.php?event_url=$event_url</a>";        
        }
        else{
        	$message = 'oops, something went wrong'; 
        }
}
?> 