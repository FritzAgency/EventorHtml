<?php


 require_once('../Database/conn.php');


$target_dir = "../public/images/"; //the storage directory to store the image. 

//when the submit button is clicked
if(isset($_POST['save'])){

$Biz_name = $_POST['Biz_name']; //grabs the event title from the form
$creator_id = $_SESSION['id']; //the creator session id to differentiate creators from each other. 
$Address = $_POST['Address']; 
$state = $_POST['state']; //grabs the sponsor's name from the form 
$city = $_POST['city'];
$zip_code = $_POST['zip_code'];
$mobile_number1 = $_POST['mobile_number1'];
$mobile_number2 = $_POST['mobile_number2'];
$category = $_POST['category']; 
$vendor_logo = $_FILES["vendor_logo"]["name"]; 
 


$target_file = $target_dir . basename($_FILES["vendor_logo"]["name"]);	
	
move_uploaded_file($_FILES["vendor_logo"]["tmp_name"], "../public/images/".$_FILES['vendor_logo']['name']); 



$query = "INSERT `vendor` (creator_id, Biz_name, Address, state, city, zip_code, mobile_number1, mobile_number2, category, vendor_logo) VALUES ('$creator_id', '$Biz_name', '$Address', '$state', '$city', '$zip_code', '$mobile_number1', '$mobile_number2', '$category', '$vendor_logo')";  


	
        $result = mysqli_query($con,$query) or die(mysqli_error($con));


        //send the query

        if ($result) {
        	//$message = "Your page has been created successfully. Your event page is at '<a href='/eventorhtml/event/page/$event_url'> localhost/eventorhtml/event/page/$event_url</a>"; 
        	$message = "You are now a registered vendor on Eventor. You can now Add your first Product on Eventor. <a href='../vendor/addproduct.php'>Start here</a>"; 
        }
        else{
        	$message = 'oops, something went wrong'; 
        }
}
?> 