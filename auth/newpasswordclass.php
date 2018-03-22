 <?php 


require_once('../Database/conn.php');



function forgotpassword(){


if(isset($_POST['submit'])){



$newpassword = $_POST['newpassword']; 

$repassword = $_POST['repassword']; 

$email = $_GET['email']; 

$token = $_GET['token']; 


if (isset($email) && isset($token) ){

    if ($newpassword == $repassword){

     $password=md5($newpassword);

     $query = "UPDATE users SET reset_token='', password='$password' WHERE email='$email'"; 


$result = mysqli_query($con,$query);

if ($result){
    $message = 'Your password has been changed successfully'; 

}

else{
   $message ='Something went wrong. Try again';  
}

}

else{

    $message = 'Password do not match'; 
}

}
}

forgotpassword(); 

}


?> 
