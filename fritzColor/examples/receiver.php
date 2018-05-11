<!DOCTYPE html>
<html>
<head>
	<title></title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div id="demo1"></div>

<div id="demo2"></div>


<div id="target-div"></div>



<?php
/*
Author: Abiodun Adetona. 
email: adetonaabiodun12@gmail.com. 
*/

/*$db_host='localhost'; //defining the database host. 
$db_user='root'; //defining the database user. 
$db_name='eventor';//defining the database name.   
$db_pass=''; //defining the password

$con = mysqli_connect($db_host, $db_user, "", $db_name);//establishing the connecting. 

// Check if its connected. 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();//returns error if connection failed. 
  }/*else{
  	echo 'Success'; 
  }*/ 



$server = "us-cdbr-iron-east-05.cleardb.net";
$username = "bacf3fbec39377";
$password = "87d078f2";
$db = "heroku_adcba3479704be4";

$con = new mysqli($server, $username, $password, $db);

if ($con == false)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();//returns error if connection failed. 
  } /*else{
  	echo 'connection succeed'; 
  }*/


$query = "SELECT * FROM `color`"; 

$result = mysqli_query($con,$query); 

while ($row = mysqli_fetch_assoc( $result )){

	echo '<div id="content">'; 
	echo '<div id="demo1">'.  $row['color1'] . '</div>'; 

	echo '<div id="demo2">'. $row['color2'] . '</div>'; 

	echo '</div>'; 
}


?> 

<script>
    /*$(document).ready(function(){  
        setInterval(function(){   
            $("#demo1").load("receiver.php");
            $("#demo2").load("receiver.php"); 
        }, 1000);
    });*/ 
    </script>


<script type="text/javascript">


$(document).ready(function () {
    // will call refreshPartial every 5 seconds
    setInterval(refresh, 1000); 
    

});


function refresh() {
	/* $( "#demo1" ).load(window.location.href + " #demo1" );

	 $( "#demo2" ).load(window.location.href + " #demo2" );*/ 

	 $("#content").load(window.location.href + " #content").fadeIn();
	 //$("#content").load(window.location.href + " #content").fadeOut(); 
}


/*function fade(){

	$("#content").fadeIn(); 
	$("#content").fadeOut(); 
}*/ 

/*	$(document).ready(function () {
    // will call refreshPartial every 5 seconds
    setInterval(update, 5000)

});

function reload(){

}


	function update(){
	$.get("server.php", {}, function(results){
   

  var color1 = $(results).find("#color_type_div").html();

  var color2 = $(results).find('#color_type_divv').html();  

$('#demo1').html(color1);  

$('#demo2').html(color2);
});

}*/ 

</script>


</body>
</html>
