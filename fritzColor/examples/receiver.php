<!DOCTYPE html>
<html>
<head>
  <title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <!--link rel='stylesheet' href='css/style.css'-->


<style>
body{
    background-image: url("../images/djtakeover-full5.jpg");  
    background-repeat: no-repeat;
}
#color{
   /* color:white; 
    font-size: 30px; */ 
}
.bar{
    width: 50px; 
}
</style> 

<style type="text/css">
/* styling for the counter*/ 
.button {
    background-color: green; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button5 {

border-radius: 50%;

}

</style>


    </head> 

<body>



<div class="container">

<!--div class="row" style="margin-top: 50px;"> 

  
 <center>  <button class="button button5" id="count"></button></center> 
 
</div-->

</div>




<div class="container"> 

<?php

/*
Database connection credentials.  
*/ 

$server = "us-cdbr-iron-east-05.cleardb.net";
$username = "bacf3fbec39377";
$password = "87d078f2";
$db = "heroku_adcba3479704be4";
$con = new mysqli($server, $username, $password, $db);
if ($con == false){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();//returns error if connection failed. 
} 


$query = "SELECT * FROM `color`"; 
$result = mysqli_query($con,$query); 

while ($row = mysqli_fetch_assoc( $result )){
  

  echo '<div class="row" id="content" style="margin-top: 500px">'; 
    
    echo '<div class="col-md-offset-2 col-md-2" id="color" style="color: white; font-size: 30px">'.  $row['color1'] . '</div>';
    
/*echo '<div class="col-md-offset-1 col-md-2" style="height:5px; width: 2px">
    <div class="progress-bar" style="width:'.$row['color1'].'%'.';
  height:30px; background-color: yellow" id="content"></div>
  </div>';*/  



  echo '<div class="col-md-2" id="color" style="float: right; color: white; font-size: 30px">'. $row['color2'] . '</div>'; 
 
  echo '</div>';
 
}
?> 
</div>

<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>




<script type="text/javascript">
$(document).ready(function () {
    //refresh the div with id: content every five miliseconds. 
    setInterval(refresh, 5000); 
    
});

function refresh() {
   /* get the content inside the id: content*/   
   $("#content").load(window.location.href + " #content").fadeIn();
 
}

</script>


</div>

</body>
</html>