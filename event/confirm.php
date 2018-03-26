<?php session_start(); ?>
<html>
<head> 

<title> Confirm Ticket Order </title> 
<style type="text/css">
body {
   background-image: url("img/eventor.jpg");

}	

</style>

</head> 

<body> 

<div class="container" style="margin-top: 100px">
<center>
<p style="font-size: 50px"> <?php 
$event = $_SESSION['event']; 
echo "You are going to  $event" ; ?> </h1></p>

 

<p style="font-size: 20px"> Ticket Details has been sent to your email. </p>
</center>
</div>
</body> 

</html> 