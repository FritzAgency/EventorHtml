<!DOCTYPE html>
<html>
<head>
	<title></title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

.progress {
  height: 100px;
  margin-top: 600px;

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

</style>


    </head> 

<body>

<div class="container"> 

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

	/*echo '<div class="row" id="content">'; 
    echo '<div class="col-md-offset-2 col-md-4" id="color">'.  $row['color1'] . '</div>'; 
    
	echo '<div class="col-md-4" id="color">'. $row['color2'] . '</div>'; 

	echo '</div>';*/ 

echo '<div class="row" id="barChart" style="display: none">'; 

echo '<div class="col-md-4 progress skill-bar">
                     <div class="progress-bar" role="progressbar" aria-valuenow='.$row['color1'].' aria-valuemin="0" aria-valuemax="100" id="content" style="background-color: yellow">
                    <span class="skill" id="content"></span>
                </div>                
  </div>'; 


echo '<div class="col-md-4 progress skill-bar" style="float:right"> 
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow='.$row['color2'].'  aria-valuemin="0" aria-valuemax="100"  style="background-color: #00FFFF">
                    <span class="skill" id="content"></span>
                </div>
                  </div>'; 



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
    setInterval(refresh, 5000); 
    

});


function refresh() {
	/* $( "#demo1" ).load(window.location.href + " #demo1" );

	 $( "#demo2" ).load(window.location.href + " #demo2" );*/ 

	 $("#content").load(window.location.href + "#content").fadeIn();
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

<!--script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script-->
<script src="script/jquery.barChart.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

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
  
$(window).keypress(function (e) {
  if (e.keyCode === 0 || e.keyCode === 32) {
    e.preventDefault()
    //alert('Space pressed')

     $("#barChart").css("display", "block");
  
  }
});

</script>



</div>

</body>
</html>
