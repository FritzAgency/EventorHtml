<?php

$url = $_GET['url']; 


require_once('Database/conn.php');


  $query = "SELECT * FROM `event` WHERE event_url='$url'"; 

$result = mysqli_query($con,$query) or die(mysqli_error());

$row = mysqli_num_rows($result);


while( $row = mysqli_fetch_array($result) ){

$event_description =  $row['event_description']; 

$Address = $row['Address']; 

$event_title = $row['event_title']; 

$event_flier = $row['event_flier'];  

$ticket_price = $row['ticket_price']; 

$ticket_qty = $row['ticket_qty'];

$status = $row['status']; 

$sponsor_name = $row['sponsor_name'];     

}
?>

<html>
<head>
  <meta charset="utf-8">
  <title>Eventor.com</title>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap.vertical-tabs.css">
  <link rel="stylesheet" href="style.css">
</head>
<style>
  .eon{
    background-color: black;
    font-weight: bold;
    color: white;
  }

  .eon:hover{
    background-color: yellow;
    font-weight: bold;
    color: red;
  }
</style>

<body>

  <div class="container" style="background-color:white; margin:auot;">
    <div class="row">
      <div  class="col-sm-7" style="margin-bottom: -43px;">
        <div class="col-xs-9">
          <!-- Tab panes -->
          <div class="tab-content" style="background-color: white; width: 645px; height: 609px;">
<div class="tab-pane active" id="home-vr">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
    
          <div class="item active">
              <img src="/eventorhtml/public/images/<?php echo 
$event_flier;?>" alt="Los Angeles"class="img-responsive">
            <div class="carousel-caption">
              <h3></h3>
              <!--p>LA is always so much fun!</p-->
            </div>
          </div>
    
          <div class="item">
            <img src="/eventorhtml/public/images/<?php echo 
$event_flier;?>" alt="Los Angeles"class="img-responsive">            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>
        
          <div class="item">
          	<img src="/eventorhtml/public/images/<?php echo 
$event_flier;?>" alt="Los Angeles"class="img-responsive">            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>
      
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
            <div class="tab-pane" id="profile-vr">
              <div style="width: 645px; height: 609px;">
              <div class="tab-pane" id="profile-vr">
              <div style="width: 645px; height: 609px;">
                <div><img src="img/first1.png" class="img-responsive"alt="" style="margin:auto; padding-top: 5px;"></div>
               <div class="row" style="margin: 0px; padding: 5px; background-color: white; width: 100%; padding-top-5px;">
               <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home" style="font-weight: bold; color:#4f2684;">Hicking</a></li>
  <li><a data-toggle="tab" href="#menu1" style="font-weight: bold; color:#4f2684;">5K Run</a></li>
  <li><a data-toggle="tab" href="#menu2" style="font-weight: bold; color:#4f2684;">Dancing</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="row">
      <div class="col-sm-6">
        <p style="font-weight:bold; margin-top: 18px;">TITLE GOES HERE</p>
        <p style="font-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi animi in impedit necessitatibus quam? Dolorem recusandae ex modi odio error.</p>
      </div>
      <div class="col-sm-6">
                 <div style="text-align: center;" >
                     <h3 style="font-size: 19px; font-weight: bold; color:#4f2684; margin-top: 3px; margin-top: 29px;">TIME</h3>
                   </div>

                  <div style="text-align: center;" >
                     <h3 style="font-size: 21px; font-weight: bold; color:#4f2684; margin-top: 3px;">12:00PM</h3>
                   </div>

                   <div style="text-align: center;" >
                     <h3 style="font-size: 21px; font-weight: bold; color:#4f2684; margin-top: 3px;">-</h3>
                   </div>

                   <div style="text-align: center;">
                     <h3 style="font-size: 21px; font-weight: bold; color:#4f2684; margin-top: 3px;">12:00PM</h3>
                   </div>

                   <div class="col-md-3">
            <a href="vendor.html" style="color:#4f2684;"><button style="background-color:#4f2684; color: white; font-weight: bold; border-radius: 10px; margin-top: 15px; font: 10px; font-size: 21px; margin-left: 58px;">SCHEDULE</button></a>
          </div>
      </div>
    </div>
  </div>
  <div id="menu1" class="tab-pane fade">
  <div class="row">
      <div class="col-sm-6">
        <p style="font-weight:bold; margin-top: 18px;">TITLE GOES HERE</p>
        <p style="font-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi animi in impedit necessitatibus quam? Dolorem recusandae ex modi odio error.</p>
      </div>
      <div class="col-sm-6">
                 <div style="text-align: center;" >
                     <h3 style="font-size: 19px; font-weight: bold; color:#4f2684; margin-top: 3px; margin-top: 29px;">TIME</h3>
                   </div>

                  <div style="text-align: center;" >
                     <h3 style="font-size: 21px; font-weight: bold; color:#4f2684; margin-top: 3px;">12:00PM</h3>
                   </div>

                   <div style="text-align: center;" >
                     <h3 style="font-size: 21px; font-weight: bold; color:#4f2684; margin-top: 3px;">-</h3>
                   </div>

                   <div style="text-align: center;">
                     <h3 style="font-size: 21px; font-weight: bold; color:#4f2684; margin-top: 3px;">12:00PM</h3>
                   </div>

                   <div class="col-md-3">
            <a href="vendor.html" style="color:#4f2684;"><button style="background-color:#4f2684; color: white; font-weight: bold; border-radius: 10px; margin-top: 15px; font: 10px; font-size: 21px; margin-left: 58px;">SCHEDULE</button></a>
          </div>
      </div>
    </div>
  </div>
  <div id="menu2" class="tab-pane fade">
  <div class="row">
      <div class="col-sm-6">
        <p style="font-weight:bold; margin-top: 18px;">TITLE GOES HERE</p>
        <p style="font-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi animi in impedit necessitatibus quam? Dolorem recusandae ex modi odio error.</p>
      </div>
      <div class="col-sm-6">
                 <div style="text-align: center;" >
                     <h3 style="font-size: 19px; font-weight: bold; color:#4f2684; margin-top: 3px; margin-top: 29px;">TIME</h3>
                   </div>

                  <div style="text-align: center;" >
                     <h3 style="font-size: 21px; font-weight: bold; color:#4f2684; margin-top: 3px;">12:00PM</h3>
                   </div>

                   <div style="text-align: center;" >
                     <h3 style="font-size: 21px; font-weight: bold; color:#4f2684; margin-top: 3px;">-</h3>
                   </div>

                   <div style="text-align: center;">
                     <h3 style="font-size: 21px; font-weight: bold; color:#4f2684; margin-top: 3px;">12:00PM</h3>
                   </div>

                   <div class="col-md-3">
            <a href="vendor.html" style="color:#4f2684;"><button style="background-color:#4f2684; color: white; font-weight: bold; border-radius: 10px; margin-top: 15px; font: 10px; font-size: 21px; margin-left: 58px;">SCHEDULE</button></a>
          </div>
      </div>
    </div>
  </div>
</div>                 <!-- <div class="col-sm-6" style="padding: 10px; margin: auto;">
                   <h3 style="font-weight: bold; padding-top: 0px; margin-top: 0px; color: #4f2684; font-size: 18px;">Name Of Activity goes here</h3>
                   <p style="text-align: justify;margin-top: 10px;">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum deleniti quia quis natus earum aspernatur voluptatum beatae accusamus sed quasi tempora, aut sapiente quaerat, nesciunt ratione fugit molestias. Iure dolorum ipsa adipisci odit minus aspernatur dolores nobis! Asperiores, facilis natus.
                 </p>
                 </div> -->
                 <!-- <div class="col-sm-6">
                 <div style="text-align: center; margin: auto;" >
                     <h3>TIME</h3>
                   </div> -->

                  <!-- <div style="text-align: center; margin: auto;" >
                     <h3>12:00PM</h3>
                   </div> -->

                   <!-- <div style="text-align: center; margin: auto;">
                     <h3>12:00PM</h3>
                   </div> -->

                   <!-- <div class="col-md-3">
            <a href="vendor.html" style="color:#4f2684;"><button style="background-color:#4f2684; color: white; font-weight: bold; border-radius: 10px; padding: 5px; width: 200px; margin-left: 20px;
margin-top: 15px;">SCHEDULE</button></a>
          </div> --> -->
                 <!-- </div> -->
               </div>
              </div>
            </div>
              </div>
            </div>
            <div class="tab-pane" id="messages-vr">
                <h3>waiting feed from the backend....</h3>

                      
            </div>
          </div>
        </div>

        <div class="col-xs-3"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-right sideways" style="right: -130px;">
            <li class="active"><a href="#home-vr" data-toggle="tab" style="color: lightgrey;">Media</a></li>
            <li><a href="#profile-vr" data-toggle="tab" style="color: lightgrey;">Schedule</a></li>
            <li><a href="#messages-vr" data-toggle="tab" style="color: lightgrey;">Activities</a></li>

          </ul>
        </div>
      </div>
  <div class="col-sm-5">
    <div class="row">
    <h2 style="font-weight: bold;"><?php 

    if(isset($event_title)){
     echo $event_title; 
    }

    ?></h2>
    <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" style="margin-left: 4px;">
            <li class="active"><a data-toggle="tab" href="#home" style="font-size: 12px; font-weight: bold; color:#4f2684;">ABOUT</a></li>
            <li><a data-toggle="tab" href="#menu1" style="font-size: 12px; font-weight: bold; color:#4f2684;">SPONSORS</a></li>
            <li><a data-toggle="tab" href="#menu2" style="font-size: 12px; font-weight: bold; color:#4f2684;">LOCATION</a></li>
            <li><a data-toggle="tab" href="#menu3"style="font-size: 12px; font-weight: bold; color:#4f2684;">VENDORS</a></li>
          </ul>
        
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active" style="height: 397px;">
              
             <p style="padding:10px; text-align:justify; font: grey; margin-left: 6px;">This is the 
<?php 

if(isset($event_description)){

echo $event_description; 

}
?> 
                  </p>
            </div>
            <div id="menu1" class="tab-pane fade" style="height: 397px;">
              <h3 style="margin-left: 8px;">SPONSORS</h3>
              <p style="margin-left: 8px;"><?php 

              if (isset($sponsor_name)){
              	echo $sponsor_name; 
              }

              ?></p>
            </div>
            <div id="menu2" class="tab-pane fade" style="height: 397px;">
              <h3 margin-left: 8px;>LOCATION</h3>
              <p style="margin-left: 8px;"><?php 

              if (isset($Address)){
              	echo $Address; 
              }

              ?></p>
            </div>
            <div id="menu3" class="tab-pane fade" style="height: 397px;">
              <h3 style="margin-left: 8px;">VENDORS</h3>
              <p style="margin-left: 8px;">Set boxes for vendors that displays vendors in a carousel</p>
            </div>
          </div>
    </div>
    <div class="row container" style="width: 100%; margin: auto;">
      <div class="col-sm-4" style="width:29%;">
        <p style="font-size: 13px; color:#4f2684;">TICKET PRICE <br> 
        <?php if(isset($ticket_price)){
            	echo '&#8358;'. $ticket_price; 
            }  ?></p>
      </div>
      <div class="col-sm-4" style="width:35%;">
          <p style="font-size: 13px; color:#4f2684;">TICKET QUANTITY <br> <?php if(isset($ticket_qty)){
            	echo $ticket_qty; 
            }  ?> </p>
      </div>
      <div class="col-sm-4" style="width:36%;">
          <p style="margin-left:20px; color:#4f2684;">EVENT TYPE <br>  <?php if(isset($status)){
            	echo $status; 
            }  ?>   </p>
      </div>
      <div class="row container" style="width: 70%;">
          <div class="col-sm-4">
            <p style="margin-left:20px; font-weight: bold; color:#4f2684;">   </p>
          </div>
          <div class="col-sm-4">
              <p style="margin-left:50px; font-weight: bold; color:#4f2684;">      </p>
          </div>
          <div class="col-sm-4">
              <p style="margin-left:77px; font-weight:bold; color:#4f2684;">    </p>
          </div>
         </div> <!-- bottom button for register and vendor -->
        <div class="row container" style="margin-left: -15px; margin-top: 22px;">
          <div class="col-md-3" style="width: 21%;">
            <a href="vendor.html" style="color:#4f2684;"><button class="eon">BECOME A VENDOR</button></a>
          </div>
          <div class="col-md-3">
            <a href="signup.html" style="color:#4f2684;"><button style="background-color:#4f2684; color: white; font-weight: bold; border-radius: 10px; padding: 5px; width: 152px;">REGISTER</button></a>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<footer style="background-color: white; padding: 10px;">
  <div class="row">
    <div class="col-sm-2">
      <img src="img/logo.png" alt="" class="img-responsive" style="margin-top: -41px; margin-bottom: -30px;">
    </div>
    <div class="col-sm-8">
      <p style="text-align: center; font-weight: bold; padding-top: 15px;">Copyright &copy; 2018 Eventor.com, all Rights Reserved. All Photos &copy; their respective owners</p>
    </div>
    <div class="col-sm-2"> 
      <div class="row">
        <div class="col-sm-4">
          <a href=""><img src="img/index.png" alt="" style="width: 25px; height-max: 100%; padding-top: 15px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index1.png" alt="" style="width: 25px; height-max: 100%; padding-top: 15px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index11.png" alt="" style="width: 25px; height-max: 100%; padding-top: 15px;"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
  
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</html>