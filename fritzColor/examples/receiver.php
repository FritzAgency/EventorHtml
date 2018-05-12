<!DOCTYPE html>
<html>
<head>
	<title></title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<style>

body{
    background-image: url("../images/djtakeover-background.jpg");
    background-repeat: no-repeat;
}

#color{
    color: white; 
    font-size: 30px; 
}

</style> 


<body>

<div class="container-fluid"> 


<?php


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

	echo '<div class="row" id="content">'; 
	echo '<div class="col-md-offset-2 col-md-4" id="color">'.  $row['color1'] . '</div>'; 

	echo '<div class="col-md-4" id="color">'. $row['color2'] . '</div>'; 

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
</div>

</body>
</html>
