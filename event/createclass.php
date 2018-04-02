<?php


 require_once('../Database/conn.php');


$target_dir = "../public/images/"; //the storage directory to store the image. 

//when the submit button is clicked
if(isset($_POST['event_title'])){

//$event_title = $_POST['event_title']; //grabs the event title from the form


$event_title = mysqli_real_escape_string($con, $_POST['event_title']);


$creator_id = $_SESSION['id']; //the creator session id to differentiate creators from each other. 
//$event_description = $_POST['event_description'];  //grabs the event description from the form

$event_description = mysqli_real_escape_string($con, $_POST['event_description']);

//$status = $_POST['status'];  //grabs the event status from the form  

$sponsor_name = mysqli_real_escape_string($con, $_POST['sponsor_name']);
$sponsor_url = mysqli_real_escape_string($con, $_POST['sponsor_url']);


$created_at = date("Y-m-d");
$sponsor_logo = $_FILES["sponsor_logo"]["name"]; 

$sponsor_name1 = mysqli_real_escape_string($con, $_POST['sponsor_name1']);

$sponsor_url1 = mysqli_real_escape_string($con, $_POST['sponsor_url1']);
 

$sponsor_logo1 = $_FILES["sponsor_logo1"]["name"]; 

$sponsor_name2 = mysqli_real_escape_string($con, $_POST['sponsor_name2']);
 
$sponsor_url2 = mysqli_real_escape_string($con, $_POST['sponsor_url2']);

$sponsor_logo2 = $_FILES["sponsor_logo2"]["name"]; 
$org_name = $_POST['org_name']; 
$org_logo = $_FILES["org_logo"]["name"]; 
$event_flier = $_FILES["event_flier"]["name"]; 
//$event_flier1 = $_FILES["event_flier1"]["name"]; 
//$event_flier2 = $_FILES["event_flier2"]["name"]; 


$Address = mysqli_real_escape_string($con, $_POST['Address']);

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





$act_name = $_POST['act_name']; 
$act_loc = $_POST['act_loc']; 
$act_desc = $_POST['act_desc']; 
$act_date = $_POST['act_date']; 
$act_img = $_FILES["act_img"]["name"];



$act_name1 = $_POST['act_name1']; 
$act_loc1 = $_POST['act_loc1']; 
$act_desc1 = $_POST['act_desc1']; 
$act_date1 = $_POST['act_date1']; 
$act_img1 = $_FILES["act_img1"]["name"];


$act_name2 = $_POST['act_name2']; 
$act_loc2 = $_POST['act_loc2']; 
$act_desc2 = $_POST['act_desc2']; 
$act_date2 = $_POST['act_date2']; 
$act_img2 = $_FILES["act_img2"]["name"];



$event_url = preg_replace('/\s+/', '-', $event_title); 


$target_file = $target_dir . basename($_FILES["sponsor_logo"]["name"]);	

$target_file = $target_dir . basename($_FILES["sponsor_logo1"]["name"]);	


$target_file = $target_dir . basename($_FILES["sponsor_logo2"]["name"]);	

$target_file = $target_dir . basename($_FILES["event_flier"]["name"]);	

$target_file = $target_dir . basename($_FILES["org_logo"]["name"]);	


$target_file = $target_dir . basename($_FILES["act_img"]["name"]); 


$target_file = $target_dir . basename($_FILES["act_img1"]["name"]); 


$target_file = $target_dir . basename($_FILES["act_img2"]["name"]); 

//$target_file = $target_dir . basename($_FILES["event_flier1"]["name"]);	
//$target_file = $target_dir . basename($_FILES["event_flier2"]["name"]);	
$target_file = $target_dir . basename($_FILES["act_img"]["name"]);	


move_uploaded_file($_FILES["sponsor_logo"]["tmp_name"], "../public/images/".$_FILES['sponsor_logo']['name']); 


move_uploaded_file($_FILES["sponsor_logo1"]["tmp_name"], "../public/images/".$_FILES['sponsor_logo1']['name']); 

move_uploaded_file($_FILES["sponsor_logo2"]["tmp_name"], "../public/images/".$_FILES['sponsor_logo2']['name']); 

move_uploaded_file($_FILES["org_logo"]["tmp_name"], "../public/images/".$_FILES['org_logo']['name']); 


move_uploaded_file($_FILES["event_flier"]["tmp_name"], "../public/images/".$_FILES['event_flier']['name']);


move_uploaded_file($_FILES["act_img"]["tmp_name"], "../public/images/".$_FILES['act_img']['name']); 


move_uploaded_file($_FILES["act_img1"]["tmp_name"], "../public/images/".$_FILES['act_img1']['name']); 


move_uploaded_file($_FILES["act_img2"]["tmp_name"], "../public/images/".$_FILES['act_img2']['name']); 




//move_uploaded_file($_FILES["event_flier1"]["tmp_name"], "../public/images/".$_FILES['event_flier1']['name']); 


//move_uploaded_file($_FILES["event_flier2"]["tmp_name"], "../public/images/".$_FILES['event_flier2']['name']); 


//move_uploaded_file($_FILES["act_img"]["tmp_name"], "../public/images/".$_FILES['act_img']['name']); 


//move_uploaded_file($_FILES['userfile']['tmp_name'], 'c:/wamp/www/uploads/images/'.$file['name']);

/*$act_name = $_POST['act_name']; 
$act_loc = $_POST['act_loc']; 
$act_desc = $_POST['act_desc']; 
$act_date = $_POST['act_date']; 
$act_img = $_FILES["act_img"]["name"];*/ 

	$query = "INSERT into `event` (creator_id, event_title, event_url, event_description,  sponsor_name, sponsor_url, sponsor_logo, sponsor_name1, sponsor_url1, sponsor_logo1, sponsor_name2, sponsor_url2, sponsor_logo2, org_name, org_logo, event_flier, Address, city, state,  event_starts, event_ends, facebook, twitter, instagram, act_name, act_desc, act_loc, act_date, act_img, act_name1, act_desc1, act_loc1, act_date1, act_img1, act_name2, act_desc2, act_loc2, act_date2, act_img2, ticket_qty, ticket_price, created_at) VALUES ('$creator_id', '$event_title', '$event_url', '$event_description', '$sponsor_name', '$sponsor_url', '$sponsor_logo', '$sponsor_name1', '$sponsor_url1', '$sponsor_logo1', '$sponsor_name2', '$sponsor_url2', '$sponsor_logo2','$org_name', '$org_logo', '$event_flier', '$Address', '$city', '$state', '$event_starts', '$event_ends', '$facebook', '$twitter', '$instagram', '$act_name', '$act_desc', '$act_loc', '$act_date', '$act_img', '$act_name1', '$act_desc1', '$act_loc1', '$act_date1', '$act_img1','$act_name2', '$act_desc2', '$act_loc2', '$act_date2', '$act_img2', '$ticket_qty', '$ticket_price', '$created_at')";  

        $result = mysqli_query($con,$query) or die(mysqli_error($con));


        //send the query

        if ($result) {
        	//$message = "Your page has been created successfully. Your event page is at '<a href='/eventorhtml/event/page/$event_url'> localhost/eventorhtml/event/page/$event_url</a>"; 
        	$message = "Your page has been created successfully. Your event page is at '<a href='../event/page.php?event_url=$event_url'> dev-eventor.herokuapp.com/event/page.php?event_url=$event_url</a>";        
        }
        else{
        	$message = 'oops, something went wrong'; 
        }
}
?> 