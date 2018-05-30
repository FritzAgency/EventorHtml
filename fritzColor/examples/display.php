<!DOCTYPE html>
<html>
<head>
	<title></title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!--link rel='stylesheet' href='css/style.css'-->


<style>

body{
    background-image: url("../images/djtakeover-full5.jpg"); 
    background-repeat: no-repeat; 
   /* height: 100%;*/ 
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

.progress {
  height: 100px;
  margin-top: 400px;

}
.progress .skill {
  font: normal 12px "Open Sans Web";
  line-height: 35px;
  padding: 0;
  margin: 0 0 0 20px;
  text-transform: uppercase;
}
.progress .skill .val {
  float: right;
  font-style: normal;
  margin: 0 20px 0 0;
}

.progress-bar {
  text-align: left;
  transition-duration: 3s;
}



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



/*flip the bar chart */

.dir{
  -moz-transform: scale(-1, 1);
-webkit-transform: scale(-1, 1);
-o-transform: scale(-1, 1);
-ms-transform: scale(-1, 1);
transform: scale(-1, 1);
} 


</style>


    </head> 

<body>




<!--h1 id="count" style="color: green;"></h1-->

<!--h1 id="count" style="color: brown;"></h1--> 

<div class="container">

<div class="row" style="margin-top: 50px;"> 

  
 <center>  <button class="button button5" id="count"></button></center> 
 
</div>

</div>

<?php


$server = "us-cdbr-iron-east-05.cleardb.net";
$username = "bacf3fbec39377";
$password = "87d078f2";
$db = "heroku_adcba3479704be4";

$con = new mysqli($server, $username, $password, $db);

if ($con == false){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();//returns error if connection failed. 
  } /*else{
  	echo 'connection succeed'; 
  }*/


$query = "SELECT * FROM `color`"; 

$result = mysqli_query($con,$query); 

while ($row = mysqli_fetch_assoc($result)){


echo '<div class="container">';  

echo '<div class="row">'; 

echo '<div class="col-md-4 progress skill-bar">
                     <div class="progress-bar" role="progressbar" aria-valuenow='.$row['color1'].' aria-valuemin="0" aria-valuemax="100"  style="background-color: yellow" id="content">
                    <span class="skill" id="content"></span>
                </div>                
  </div>'; 


echo '<div class="col-md-4 progress skill-bar dir" style="float: right;"> 
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow='.$row['color2'].'  aria-valuemin="0" aria-valuemax="100" style="background-color: #00FFFF">
                    <span class="skill" id="content"></span>
                </div>
                  </div>'; 



echo '</div>'; 
	 
}


?> 


</div>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="script/jquery.barChart.js"></script>
<!--script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script-->

<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
  $(document).ready(function() {
      $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
        )
    });
</script>




<script type="text/javascript">





$(document).ready(function (event) {
    // refreshes every 5 seconds
    setInterval(refresh, 5000);
      //event.preventDefault()
   // setInterval(refreshButton, 20000);  
   

});



function refresh() {
/* fade in the element with content id*/ 
   $("#content").load(window.location.href + " #content").fadeIn();
    
}


$(window).keypress(function (e) {
 // setInterval(refresh, 5000); 
 if (e.keyCode === 0 || e.keyCode === 32) {

 var counter = 20;

  setInterval(function() {
    counter--;
    if (counter >= 0) {
      span = document.getElementById("count");
      span.innerHTML = counter;
    }
    // Display 'counter' wherever you want to display it.
    if (counter === 0) {
       // alert('this is where it happens');
        clearInterval(counter);
    }
    
  }, 1000);
  
  
}
//alert('Hi Hi'); 
}); 

</script>



</body>
</html>
