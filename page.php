<?php
 


require_once('Database/conn.php');


//$url = $_GET['url'];

if(isset($_GET['event_url'])){

$event_url = $_GET['event_url'];

$query = "SELECT * FROM `event` WHERE event_url='$event_url'"; 

$result = mysqli_query($con,$query) or die(mysqli_error());

$row = mysqli_num_rows($result) or die(mysqli_error());


while( $row = mysqli_fetch_array($result) ){

$event_description =  $row['event_description']; 
$Address = $row['Address']; 
$event_title = $row['event_title']; 
$event_flier = $row['event_flier'];  
$event_flier1 = $row['event_flier1'];  
$event_flier2 = $row['event_flier2'];  
$ticket_price = $row['ticket_price']; 
$ticket_qty = $row['ticket_qty'];
$status = $row['status']; 
$sponsor_name = $row['sponsor_name']; 
$sponsor_logo = $row['sponsor_logo'];
$sponsor_url = $row['sponsor_url'];
$sch_name = $row['sch_name'];  
$sch_start = $row['sch_start']; 
$sch_end = $row['sch_end']; 


$org_logo = $row['org_logo']; 

$sch_name1 = $row['sch_name1'];  
$sch_start1 = $row['sch_start1']; 
$sch_end1 = $row['sch_end1']; 

$sch_name2 = $row['sch_name2'];  
$sch_start2 = $row['sch_start2']; 
$sch_end2 = $row['sch_end2']; 


$sponsor_name1 = $row['sponsor_name1']; 
$sponsor_logo1 = $row['sponsor_logo1'];
$sponsor_url1 = $row['sponsor_url1'];

$sponsor_name2 = $row['sponsor_name2']; 
$sponsor_logo2 = $row['sponsor_logo2'];
$sponsor_url2 = $row['sponsor_url2'];

$act_name = $row['act_name']; 
$act_loc = $row['act_loc']; 
$act_desc = $row['act_desc']; 
$act_date = $row['act_date']; 
$act_img = $row['act_img']; 

$org_logo = $row['org_logo']; 

}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> 
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="calender.css">
  <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');

body {
  background-image: url("./img/eventor.jpg");
  font-family: 'Montserrat', sans-serif;
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
border:0;
background-color:#fff;
color:#000000;

}

.nav-pills > li > a {

border-radius: 4px;
border: 2px solid #dddde2;
background-color: #c1c1c9;
color: grey;
}
.nav-tabs > li > a{padding:20px 30px}
.nav-tabs > li.active {
border-bottom: 4px solid #4f2684;
color:#000000;
}

input::-moz-focus-inner { 
border: 0; 
}

 .nav-pills > li.active > a, .nav-pills > li.active > a:focus {
      color: grey;
      background-color: white;
      border: 2px solid grey;
  }

      .nav-pills > li.active > a:hover {
          background-color: lightgrey;
          color:grey;
      }

.nav-pills{
   margin-right: 0px;
}
.nav-pills >

.sizing2{
width:49.5%;
font-size: 18px;
  font-weight: bolder;
  text-align: center;
  color: #000000;

}

.sizing3{
width:20%;
font-size: 18px;
  font-weight: bolder;
  text-align: center;
  color: #000000;

}

#venia{
  background-color: #4f2684; 
  color: #fff;
}

a {
outline: 0;
}

.sizinga{
outline: 0;
color: #000000;
width: 25%;
font-size: 11px;
  font-weight: bolder;
  text-align: center;

}

.jumbotron .h1, .jumbotron h1 {
  font-size: 73px;
  background-color: white;
}

img {

  margin-top: auto;
  margin-bottom: auto;
  margin-right: auto;
  margin-left: auto;
}

.portrait {
  height: 80px;
  width: 30px;
}

.landscape {
  height: 40%;
  width: 90%;
}

.square {
  height: 70%;
  width: 70%;
}

.container .jumbotron, .container-fluid .jumbotron {

padding-right: 0px;
padding-left: 0px;
background-color: white;
padding-top: 15px;
padding-bottom: 10px;
}

.jumbotron .h1, .jumbotron h1 {
    font-size: 45px;
}

#return-to-top {
    position: fixed;
    bottom: 120px;
    right: 105px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}

.buck{
  background-color: #4f2684;
  color: #ffffff;
border-color: #ffe484;
font-weight: bold;
}

.buck:hover{
  background-color: #ffe484;
  color: #4f2684;
border-color: #ffe484;
font-weight: bold;
}

.carousel .carousel-inner { width:100%; height:570px; }

/* Extra Things */
</style>
</head>
<body>
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

<!-- nav bar starts here -->
<nav class="navbar-sticky navbar navbar-default navbar-static-top" id="myTopnav" style="padding: 0px; margin-bottom: 0px;" class="new">
  <div class="container">
    <div class="navbar-header" >
    <div class="col-sm-2 col-md-3 col-xm-4" style="left: 70px;">
      <a class="navbar-brand" href="index.php"><img src="/public/images/<?php echo 
$org_logo;?>" alt="" srcset="" class="img-responsive" style="margin-top: -7px;"></a>
      </div>    
<!--a class="navbar-brand" href="#"><p><img src="" alt="Creator logo" srcset="" class="img-fluid"></p></a-->
      
    </div>
    <ul class="nav navbar-nav navbar-right" class="topnav" id="myTopnav" style="font-weight: bold; color: #4f2684">
      <li><a href="#activities" class="new">EVENT ACTIVITIES</a></li>
      <li><a href="#details" class="new">ABOUT EVENT</a></li>
      <li><a href="#" class="new" data-toggle="modal" data-target="#myModal">REGISTER</a></li>
    </ul>
  </div>
</nav>
<!-- nav bar ends here -->
<div class="container" style="background-color: white; width: 60%;">
<div id="myCarousel" class="carousel slide" data-ride="carousel" style=" border: 2px solid lightgrey; background-color: lightgrey">
    <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner landscape square" style="margin-top: auto; margin-bottom: auto; margin-left:auto; margin-right: auto; background-color: lightgrey;">
      <div class="item active">
        <!--img src="img/create.png" alt="Los Angeles" style="width:50%; height: 50%; margin: auto;" class="img-responsive"-->
        <!--img src="img/fifth.jpg" class="img-responsive landscape square" style="margin: auto;"-->
<img src="/public/images/<?php echo 
$event_flier;?>" class="img-responsive landscape square" style="margin: auto;">

      </div>
      <!-- style="width:50%; height: 50%; margin: auto;" -->
      <!-- <div class="item"> -->

        <!--img src="img/celine.jpg" alt="Chicago"  class="img-responsive landscape square" style="margin: auto;"-->
        <!-- <img src="/public/images/" class="img-responsive landscape square" style="margin: auto;">

      </div>
    
      <!-- <div class="item"> -->
        <!--img src="img/google_maps_hello_world.jpg" alt="New york" class="img-responsive landscape square" style="margin: auto;"-->
        <!-- <img src="/public/images/" class="img-responsive landscape square" style="margin: auto;"> -->





              </div>
    
      <!-- <div class="item">
       <img src="/public/images/" class="img-fluid" style="width:100%; height: 100%; margin: auto;">

      </div> -->
    
      <!-- <div class="item">
        <!--img src="img/google_maps_hello_world.jpg" alt="New york" class="img-responsive landscape square" style="margin: auto;"-->

      <!-- </div> -->
    <!-- </div> -->

    <!-- Left and right controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>




  <div style="padding-top: 5px; padding-left: 40px; padding-right: 40px;">
  <!-- event title goes in here -->
<div class="jumbotron" style="padding-right: 0px; padding-left: 0px; background-color: white; padding-top: 0px; padding-bottom: 15px;">
  <h1 style="text-align: center; font-family: impact; font-size: 47px; margin-top: 5px;">
  <?php 

    if(isset($event_title)){
     echo $event_title; 
    }
    ?>
</h1></div>
<!-- event title ends here -->


<div id="details">
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" style=" margin-left: -53px; margin-right: -53px;">
  <li class="active sizinga"><a href="#hometab" role="tab" data-toggle="tab">ABOUT</a></li>
  <li class="sizinga"><a href="#javatab" role="tab" data-toggle="tab" >SPONSORS</a></li>
  <li class="sizinga"><a href="#csharptab" role="tab" data-toggle="tab">LOCATION</a></li>
  <li class="sizinga"><a href="#mysqltab" role="tab" data-toggle="tab">VENDORS</a></li> 
</ul>
</li>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="hometab" style="font-size: 17px; color: #626263;">
  <p style="text-align: justify;"><?php 

    if(isset($event_description)){
     echo $event_description; 
    }

    ?>
</p>
    <!--p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, magni libero dicta corrupti mollitia odit temporibus! Doloribus hic rem explicabo illo quos alias minus molestiae. Atque modi ab sed illo quo repellat consequatur dicta, harum alias consequuntur ullam facilis officiis, tenetur officia dolorum cumque incidunt repellendus debitis accusamus molestiae cum adipisci explicabo neque pariatur. Culpa similique, voluptatum rerum a laborum soluta pariatur facilis, enim quo dicta, quisquam maxime ad. Adipisci officia maiores accusamus ea? Officiis sed rem accusantium, est, velit accusamus libero mollitia facere fuga aperiam nostrum earum? Vel asperiores quaerat necessitatibus iure, vitae repudiandae illo harum quisquam provident similique!</p--></div>

  
  <div class="tab-pane" id="javatab">
     <!-- sponsors logo will come here -->
    <div style="margnin-left: auto; margin-right: auto; text-align: center; width: 100%; margin-top: 15px;">
    <div class="row" style="margin-left: auto; margin-right:auto">
      <div class="col-sm-4" style="height: auto; background-color: white; margin-left: auto; margin-right: auto;" class="img-responsive">
        
      <a href="<?php if (isset($sponsor_url)){echo $sponsor_url;}?>">  <img src="/public/images/<?php echo 
$sponsor_logo;?>" class="img-responsive" style="height: auto; background-color: white; margin-left: auto; margin-right: auto;"> </a>
<p> <?php if(isset($sponsor_name)){echo $sponsor_name;}?> </p>




      </div>
      <div class="col-sm-4" style="height: auto; background-color: white; margin-left: auto; margin-right: auto;" class="img-responsive">
        <a href="<?php if (isset($sponsor_url1)){echo $sponsor_url1;}?>">  <img src="/public/images/<?php echo 
$sponsor_logo1;?>" class="img-responsive" style="height: auto; background-color: white; margin-left: auto; margin-right: auto;"> </a>
<p> <?php if(isset($sponsor_name1)){echo $sponsor_name1;}?> </p>

      </div>
      <div class="col-sm-4" style="height: auto; background-color: white; margin-left: auto; margin-right: auto;" class="img-responsive">
        <a href="<?php if (isset($sponsor_url2)){echo $sponsor_url2;}?>">  <img src="/public/images/<?php echo 
$sponsor_logo2;?>" class="img-responsive" style="height: auto; background-color: white; margin-left: auto; margin-right: auto;"> </a>
<p> <?php if(isset($sponsor_name2)){echo $sponsor_name2;}?> </p>

      </div>
    </div>
    </div>
    <!-- sponsors contents ends here -->
  </div>
  <div class="tab-pane" id="csharptab">
    <!-- google map goes in here -->
    <h2><?php 

    if(isset($Address)){
     echo $Address; 
    }

    ?></h2>

    <!--img src="img/google_maps_hello_world.jpg" alt="" class="img-fluid" style="margin-left: auto; margin-right: auto; margin-top: 15px; width: 1139px;"-->

<iframe style=" width: 100%; height: 500px;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDWG8NOZeOKNf9FabkmtqwCpNs04zcT5Yc
    &q='<?php echo $Address;?>'" allowfullscreen>
</iframe>
    <!-- google map stops here -->
  </div>
  <div class="tab-pane" id="mysqltab">
    <!-- sponsors logo will come here -->
    <div style="margin-left: 74px; margin-right: auto; text-align: center; width: 100%; margin-top: 15px;">
    <div class="row" style="margin-left: auto; margin-right:auto">
      <div class="col-sm-2" style="height: 100px; background-color: white; margin: 5px;">
      <!-- vendor 1 -->
      </div>
      <div class="col-md-2" style="height: 100px; background-color: white; margin: 5px;">
      <!-- vendor 2 -->
      </div>
      <div class="col-md-2" style="height: 100px; background-color: white; margin: 5px;">
      <!-- vendor 3 -->
      </div>
      <div class="col-md-2" style="height: 100px; background-color: white; margin: 5px;">
      <!-- vendor 4 -->
      </div>
      <div class="col-md-2" style="height: 100px; background-color: white; margin: 5px;">
      <!-- vendor  -->
      </div>
    </div>
    <div class="row" style="margin-left: auto; margin-right:auto">
      <div class="col-sm-2" style="height: 100px; background-color: white; margin: 5px;">
      <!-- vendor 1 -->
      </div>
      <div class="col-md-2" style="height: 100px; background-color: white; margin: 5px;">
      <!-- vendor 2 -->
      </div>
      <div class="col-md-2" style="height: 100px; background-color: white; margin: 5px;">
      <!-- vendor 3 -->
      </div>
      <div class="col-md-2" style="height: 100px; background-color: white; margin: 5px;">
      <!-- vendor 4 -->
      </div>
      <div class="col-md-2" style="height: 100px; background-color: white; margin: 5px;">
        <!-- vendor 5 -->
      </div>
    </div>
    </div>
    <!-- vendors contents stops in here -->
  </div>
  <!-- event information ends here -->

<!-- price tag goes in here -->
<div class="row" style="width: 40%; margin: auto; margin-top: 70px;">
  <div class="col-sm-3">
    
  </div>
  <div class="col-sm-3" style="margin-top: px;">
    <h3 style="color: #4f2684; font-weight: bold; font-size: 15px; text-align: center">PRICE</h3>
  </div>
  <div class="col-sm-4">
    <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; width: 130px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;"><?php if(isset($ticket_price)){
              echo  $ticket_price; 
            } elseif($row['ticket_price'] <=0 ){
              echo 'FREE'; 
            } ?></h2>
            
    </div>
    <div class="col-sm-3">
    <div style="border: 2px solid lightgrey; text-align: center; padding: 0px; margin: auto; border-radius: 43px;">

    </div>
  </div>
</div>
</div>
<!-- price tag ends here -->
<!-- become a vendor and register button starts here -->
<div class="row" style="margin-top: 50px; margin-left: auto; margin-right: auto;">
  <div class="col-sm-4 buck" style="margin-left: 35px; border: 4px solid #ffe484; border-radius: 17px;">
  <a href="#" style="text-decoration: none; color: #ffffff;"><div style="text-align: center; padding: 10px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 13px;">BECOME A VENDOR</h2>
    </div></a>
  </div>
  <div class="col-sm-3">
    <div style="text-align: center; border-radius: 17px;">
     </div>
</div>
<div class="col-sm-4 buck" style="border: 4px solid #ffe484; border-radius: 17px;">
      <a href="#" style="text-decoration: none; color: #ffffff;" data-toggle="modal" data-target="#myModal"><div style="text-align: center;padding: 10px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 13px;" id="register">REGISTER</h2>
    </div></a>
</div>
</div>
<!-- become a vendor and register button ends here -->


  <!-- event discription and media, schedule starts here -->
  <div id="activities">
  <!-- Nav tabs -->
<div style="margin-top: 60px;">
<ul class="nav nav-pills" role="tablist" style="background-color: #f3f1f1; margin-left: -54px; margin-right: -53px;" >
  <li class="active sizing2"><a href="#hometab2" role="tab" data-toggle="tab" style="padding-top: 20px; margin-left: 0px; margin-right: 0px; padding-bottom: 20px; width: auto; border-left-width: 0px; border-right-width: 0px;">ACTIVITIES</a></li>
  <li class="sizing2"><a href="#javatab2" role="tab" data-toggle="tab" style="padding-top: 20px; margin-left: 0px; margin-right: 0px; padding-bottom: 20px; width: auto; border-left-width: 0px; border-right-width: 0px;">SCHEDULE</a></li>
</ul>
</li>

<!-- Tab panes -->
<div class="tab-content" style="margin-top: 20px;">
  <div class="tab-pane active" id="hometab2" style="font-size: 17px; color: #626263;">
    <ul class="nav nav-tabs" role="tablist" style=" margin-left: -53px; margin-right: -53px;">
  <li class="active sizing3"><a href="#hometab5" role="tab" data-toggle="tab"><?php if(isset($act_name)){echo $act_name;}?> </a></li>

  <!--li class="sizing3"><a href="#javatab5" role="tab" data-toggle="tab" >Jogging</a></li>
  <li class="sizing3"><a href="#csharptab5" role="tab" data-toggle="tab">Dance</a></li>
  <li class="sizing3"><a href="#mysqltab5" role="tab" data-toggle="tab">Running</a></li> 
  <li class="sizing3"><a href="#fight" role="tab" data-toggle="tab">Fighting</a></li--> 
</ul>
</li>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="hometab5" style="font-size: 17px; color: #626263;">

            <div style="width: 100%; margin: auto;">
        <!--img src="" alt="activity image goes in here 1" class="img-responsive" style="height: 100%; width: 100%; object-fit: contain"-->
  </div>
            <!-- activity schedule and time goes in here -->
            <div class="row">
    <div class="col-sm-6">
        <p style="text-align:justify;">
      <?php if(isset($act_desc)){echo $act_desc;}?>
        </p>
    </div>
   <div class="col-sm-6">
        <h2 style="font-weight:bold; margin: 40px; margin: 20px; font-size: 20px; text-align: center">TIME</h2>
        <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
        <h2 style="font-weight:bold; margin: 10px; font-size: 20px;"><?php if(isset($act_date)){echo $act_date;}?></h2>
        </div>
        <!--h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2-->  
        <!--div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
        <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">4:00</h2>
        </div-->
        <a href="#" style="color: #ffffff; text-decoration: none;">
        <div class="col-sm-4 buck" style="border: 4px solid #ffe484; border-radius: 17px; text-align: center; padding: 10px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 13px;">SCHEDULE</h2>
  </div>
        </a>
   </div>
   </div>  
            <!-- activity and schedule time ends here -->

      </div>
  <div class="tab-pane" id="javatab5">


          <div style="width: 100%; margin: auto;">
        <img src="" alt="activity image goes in here2" class="img-responsive" style="height: 100%; width: 100%; object-fit: contain">
  </div>
  <div class="row">
    <div class="col-sm-6">
        <p style="text-align:justify;">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto ipsam enim aspernatur eaque commodi, tempora vitae, dolores accusantium vel neque quas voluptatum illo eum voluptatem laborum sequi saepe maiores magni architecto quae inventore officia nihil ullam. Magni magnam laudantium voluptatibus beatae, veritatis culpa architecto, dolorem eum maxime excepturi debitis minus, nostrum maiores consectetur saepe pariatur ad earum ab doloribus atque ea. Impedit vitae distinctio ullam provident eum deleniti reprehenderit beatae, iure et ex molestiae! Quidem suscipit eos cumque nulla, debitis in, quam optio totam sunt est dolorem vitae? Natus dolore beatae aspernatur quod. Atque nam, doloremque explicabo dolorum ex unde.
        </p>
    </div>
   <div class="col-sm-6">
        <h2 style="font-weight:bold; margin: 40px; margin: 20px; font-size: 20px; text-align: center">TIME</h2>
        <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
        <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">15:00</h2>
        </div>
        <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
        <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
        <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">22:00</h2>
        </div>
        <a href="#" style="color: #ffffff; text-decoration: none;"><div style=" width: 56%; margin-left: auto; margin-right: auto; border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
   </div>
   </div>  



  </div>
  <div class="tab-pane" id="csharptab5">


<div style="width: 100%; margin: auto;">
        <img src="" alt="activity image goes in here3" class="img-responsive" style="height: 100%; width: 100%; object-fit: contain">
  </div>
  <div class="row">
    <div class="col-sm-6">
        <p style="text-align:justify;">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto ipsam enim aspernatur eaque commodi, tempora vitae, dolores accusantium vel neque quas voluptatum illo eum voluptatem laborum sequi saepe maiores magni architecto quae inventore officia nihil ullam. Magni magnam laudantium voluptatibus beatae, veritatis culpa architecto, dolorem eum maxime excepturi debitis minus, nostrum maiores consectetur saepe pariatur ad earum ab doloribus atque ea. Impedit vitae distinctio ullam provident eum deleniti reprehenderit beatae, iure et ex molestiae! Quidem suscipit eos cumque nulla, debitis in, quam optio totam sunt est dolorem vitae? Natus dolore beatae aspernatur quod. Atque nam, doloremque explicabo dolorum ex unde.
        </p>
    </div>
   <div class="col-sm-6">
        <h2 style="font-weight:bold; margin: 40px; margin: 20px; font-size: 20px; text-align: center">TIME</h2>
        <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
        <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">18:00</h2>
        </div>
        <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
        <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
        <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">12:00</h2>
        </div>
        <a href="#" style="color: #ffffff; text-decoration: none;"><div style=" width: 56%; margin-left: auto; margin-right: auto; border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
   </div>
   </div>  



  </div>
  <div class="tab-pane" id="mysqltab5">


  <div style="width: 100%; margin: auto;">
        <img src="" alt="activity image goes in here4" class="img-responsive" style="height: 100%; width: 100%; object-fit: contain">
  </div>

    <div class="row">
    <div class="col-sm-6">
        <p style="text-align:justify;">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto ipsam enim aspernatur eaque commodi, tempora vitae, dolores accusantium vel neque quas voluptatum illo eum voluptatem laborum sequi saepe maiores magni architecto quae inventore officia nihil ullam. Magni magnam laudantium voluptatibus beatae, veritatis culpa architecto, dolorem eum maxime excepturi debitis minus, nostrum maiores consectetur saepe pariatur ad earum ab doloribus atque ea. Impedit vitae distinctio ullam provident eum deleniti reprehenderit beatae, iure et ex molestiae! Quidem suscipit eos cumque nulla, debitis in, quam optio totam sunt est dolorem vitae? Natus dolore beatae aspernatur quod. Atque nam, doloremque explicabo dolorum ex unde.
        </p>
    </div>
   <div class="col-sm-6">
        <h2 style="font-weight:bold; margin: 40px; margin: 20px; font-size: 20px; text-align: center">TIME</h2>
        <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
        <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">10:00</h2>
        </div>
        <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
        <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
        <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">7:00</h2>
        </div>
        <a href="#" style="color: #ffffff; text-decoration: none;"><div style=" width: 56%; margin-left: auto; margin-right: auto; border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
   </div>
   </div>  
</div>
<div class="tab-pane" id="fight">

<div style="width: 100%; margin: auto;">
        <img src="" alt="activity image goes in here5" class="img-responsive" style="height: 100%; width: 100%; object-fit: contain">
  </div>
  <div class="row">
    <div class="col-sm-6">
        <p style="text-align:justify;">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto ipsam enim aspernatur eaque commodi, tempora vitae, dolores accusantium vel neque quas voluptatum illo eum voluptatem laborum sequi saepe maiores magni architecto quae inventore officia nihil ullam. Magni magnam laudantium voluptatibus beatae, veritatis culpa architecto, dolorem eum maxime excepturi debitis minus, nostrum maiores consectetur saepe pariatur ad earum ab doloribus atque ea. Impedit vitae distinctio ullam provident eum deleniti reprehenderit beatae, iure et ex molestiae! Quidem suscipit eos cumque nulla, debitis in, quam optio totam sunt est dolorem vitae? Natus dolore beatae aspernatur quod. Atque nam, doloremque explicabo dolorum ex unde.
        </p>
    </div>
   <div class="col-sm-6">
        <h2 style="font-weight:bold; margin: 40px; margin: 20px; font-size: 20px; text-align: center">TIME</h2>
        <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
        <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">6:00</h2>
        </div>
        <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
        <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
        <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">12:00</h2>
        </div>
        <a href="#" style="color: #ffffff; text-decoration: none;"><div style=" width: 56%; margin-left: auto; margin-right: auto; border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
   </div>
   </div>  

</div>
  <!-- event information ends here -->
    </div>
</div>    
    <div class="tab-pane" id="javatab2">
    <div class="container" style="width: 100%;">
    <div class="agenda">
        <div class="table-responsive">
            <table class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <!--th>Date</th-->
                        <th>Time</th>
                        <th>Schedule Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Single event in a single day -->
                    <tr>
                        <!--td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">26</div>
                            <div class="dayofweek">Saturday</div>
                            <div class="shortdate text-muted">July, 2014</div-->
                        </td>
                        <td class="agenda-time">
                            <?php if(isset($sch_start)){
              echo '<p> Starts:'. $sch_start .'</p>'; 
            }?>

<hr>
             <?php if(isset($sch_end)){
              echo '<p>Ends:'. $sch_end .'</p>'; 
            }?>

                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                
                                <?php if(isset($sch_name)){
              echo  $sch_name; 
            }?>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Multiple events in a single day (note the rowspan) -->
                    <tr>
                        <!--td class="agenda-date" class="active" rowspan="3">
                            <div class="dayofmonth">24</div>
                            <div class="dayofweek">Thursday</div>
                            <div class="shortdate text-muted">July, 2014</div-->
                        </td>
                        <td class="agenda-time">
                          


 <?php if(isset($sch_start1)){
              echo '<p> Starts:'. $sch_start1 .'</p>'; 
            }?>

<hr>
             <?php if(isset($sch_end1)){
              echo '<p>Ends:'. $sch_end1 .'</p>'; 
            }?>



                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                              
                                <?php if(isset($sch_name1)){
              echo  $sch_name1; 
            }?>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                                                      <?php if(isset($sch_start2)){
              echo '<p> Starts:'. $sch_start2 .'</p>'; 
            }?>

<hr>
             <?php if(isset($sch_end2)){
              echo '<p>Ends:'. $sch_end2 .'</p>'; 
            }?>   
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                
                <?php if(isset($sch_name2)){
                  echo $sch_name2;
                }
?>

                            </div>
                        </td>
                    </tr>
                    <!--tr>
                        <td class="agenda-time">
                            7:00 - 9:00 PM
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Aria's dance recital
                            </div>
                        </td>
                    </tr-->
                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>

</div>
<div class="container">
<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-md-4"> Number of Ticket </div> <div class="col-md-offset-4"> 1 </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
         <a href="event/order.php?ticket=1&event=<?php echo $event_title; ?>"> <button type="button" class="btn btn-lg btn-success">CHECKOUT</button></a>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</div>
</div>

</div>
</div>
</div>
          </div>
          </div>
  </div>
  </div>
<!-- footer goes here -->
<!-- footer goes here -->
<footer style="background-color: #4f2684; border: 3px solid #e7e7e7; padding: 10px; height: 70px; margin-top: 10px;">
  <div class="row">
    <div class="col-sm-2">
      <img src="img/footer.png" alt="" class="img-responsive" style="margin-top: 2px;">
    </div>
    <div class="col-sm-8">
      <div class="row" style="width: 40%; margin-left: auto; margin-right: auto;">
        <div class="col-sm-5">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff;">How it works</p></a>
        </div>
        <div class="col-sm-4">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff;">About us</p></a>
        </div>
        <div class="col-sm-3">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff;">Contact</p></a>
        </div>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="row">
        <div class="col-sm-4">
          <a href=""><img src="img/index.png" alt="" style="width: 30px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index1.png" alt="" style="width: 30px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index11.png" alt="" style="width: 30px; height-max: 100%; margin-top: 10px;"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script>
// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>

 </body>
 </html>