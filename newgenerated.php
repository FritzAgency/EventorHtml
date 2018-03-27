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



}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Generated page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
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
.nav-pills >
/*
.nav-pills > li.item1.active > a, .nav-pills > li.item1.active > a:focus, .nav-tabs > li.item1.active > a:hover {
border:0;
background-color:#fff;
color:#000000;
}

.nav-pills > li > a{padding:10px 30px}
.nav-pills > li.active {
color:#000000;
}

.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
  color: #fff;
  background-color: white;
} */

/* ul li a {
background-color: #00ff00;
color: green;
}

ul li a:hover {
background-color: #ff0000;
color: yellow;
} */

/* .sizing{
width: 275px;
font-size: 18px;
  font-weight: bolder;
  text-align: center;
  color: #000000;
} */

.sizing2{
width:231px;
font-size: 18px;
  font-weight: bolder;
  text-align: center;
  color: #000000;

}

.sizing3{
width:138px;
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
width: 199px;
font-size: 11px;
  font-weight: bolder;
  text-align: center;

}

.jumbotron .h1, .jumbotron h1 {
  font-size: 73px;
  background-color: white;
}

img {
  max-width: 100%;
  max-height: 100%;
}

.portrait {
  height: 80px;
  width: 30px;
}

.landscape {
  height: 30px;
  width: 80px;
}

.square {
  height: 75px;
  width: 75px;
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
</style>

</head>
<body>

<div class="container" style="background-color: white; width: 60%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" border: 2px solid lightgrey;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="width:80%; height: 526px; margin: auto;">
      <div class="item active">
        <!--img src="img/create.png" alt="Los Angeles" style="width:50%; height: 50%; margin: auto;" class="img-responsive"-->
        <img src="/eventorhtml/public/images/<?php echo 
$event_flier;?>" class="img-responsive" style="width:100%; height: 526px; margin: auto;">
      </div>
      <!-- style="width:50%; height: 50%; margin: auto;" -->
      <div class="item">
        <img src="img/fourth.png" alt="Chicago"  class="img-responsive" style="width:100%; height: 526px; margin: auto;">
      </div>
    
      <div class="item">
        <img src="img/fifth.jpg" alt="New york" class="img-responsive" style="width:100%; height: 526px; margin: auto;">
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




  <div style="padding:40px; margin-top: 10pxpx;padding-top: 5px; padding-left: 40px; padding-right: 40px;">
  <!-- event title goes in here -->
<div class="jumbotron; font-size: 50px;"><h1 style="text-align: center; margin-top: 20px; font-weight:bold;">
  <?php 

    if(isset($event_title)){
     echo $event_title; 
    }

    ?>

</h1></div>
<!-- event title ends here -->

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" style=" margin-left: -53px; margin-right: -53px;">
  <li class="active sizing"><a class="sizinga" href="#hometab" role="tab" data-toggle="tab">ABOUT</a></li>
  <li class="sizing"><a class="sizinga" href="#javatab" role="tab" data-toggle="tab" >SPONSORS</a></li>
  <li class="sizing"><a class="sizinga" href="#csharptab" role="tab" data-toggle="tab">LOCATION</a></li>
  <li class="sizing"><a class="sizinga" href="#mysqltab" role="tab" data-toggle="tab">VENDORS</a></li> 
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
    <div style="margin-left: 74px; margin-right: auto; text-align: center; width: 100%; margin-top: 15px;">
    <div class="row" style="margin-left: auto; margin-right:auto">
      <div class="col-sm-2" style="height: 100px; background-color: grey; margin: 5px;">
        
      <a href="<?php if (isset($sponsor_url)){echo $sponsor_url;}?>">  <img src="/eventorhtml/public/images/<?php echo 
$sponsor_logo;?>" class="img-responsive"> </a>
<p> <?php if(isset($sponsor_name)){echo $sponsor_name;}?> </p>




      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
        <a href="<?php if (isset($sponsor_url1)){echo $sponsor_url1;}?>">  <img src="/eventorhtml/public/images/<?php echo 
$sponsor_logo1;?>" class="img-responsive"> </a>
<p> <?php if(isset($sponsor_name1)){echo $sponsor_name1;}?> </p>

      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
        <a href="<?php if (isset($sponsor_url2)){echo $sponsor_url2;}?>">  <img src="/eventorhtml/public/images/<?php echo 
$sponsor_logo2;?>" class="img-responsive"> </a>
<p> <?php if(isset($sponsor_name2)){echo $sponsor_name2;}?> </p>

      </div>
      <!--div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
        sponsor 4
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
        sponsor 
      </div>
    </div>
    <div class="row" style="margin-left: auto; margin-right:auto">
      <div class="col-sm-2" style="height: 100px; background-color: grey; margin: 5px;">
        sponsor 1
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
        sponsor 2
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
        sponsor 3
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
        sponsor 4
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
        sponsor 
      </div-->
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

<iframe
  width="1139px"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDWG8NOZeOKNf9FabkmtqwCpNs04zcT5Yc
    &q='<?php echo $Address;?>'" allowfullscreen>
</iframe>
    <!-- google map stops here -->
  </div>
  <div class="tab-pane" id="mysqltab">
    <!-- sponsors logo will come here -->
    <div style="margin-left: 74px; margin-right: auto; text-align: center; width: 100%; margin-top: 15px;">
    <div class="row" style="margin-left: auto; margin-right:auto">
      <div class="col-sm-2" style="height: 100px; background-color: grey; margin: 5px;">
      vendor 1
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
      vendor 2
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
      vendor 3
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
      vendor 4
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
      vendor 
      </div>
    </div>
    <div class="row" style="margin-left: auto; margin-right:auto">
      <div class="col-sm-2" style="height: 100px; background-color: grey; margin: 5px;">
      vendor 1
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
      vendor 2
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
      vendor 3
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
      vendor 4
      </div>
      <div class="col-md-2" style="height: 100px; background-color: grey; margin: 5px;">
        vendor 5
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
    <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;"><?php if(isset($ticket_price)){
              echo '&#8358;'. $ticket_price; 
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
  <div class="col-sm-4" style="margin-left: 47px;">
  <a href="#" style="color: #ffffff; text-decoration: none;"><div style="border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 13px;">BECOME A VENDOR</h2>
    </div></a>
  </div>
  <div class="col-sm-3">
    <div style="text-align: center; border-radius: 17px;">
     </div>
</div>
<div class="col-sm-4">
      <a href="#" style="color: #ffffff; text-decoration: none;" data-toggle="modal" data-target="#myModal"><div style="border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 13px;">REGISTER</h2>
    </div></a>
</div>
</div>
<!-- become a vendor and register button ends here -->


  <!-- event discription and media, schedule starts here -->
  <!-- Nav tabs -->
<div style="margin-top: 60px;">
<ul class="nav nav-pills" role="tablist" style="background-color: #f3f1f1;" >
  <li class="active sizing2"><a class="sizing2" href="#hometab2" role="tab" data-toggle="tab" style="margin-left: 5px; padding-top: 20px; padding-bottom: 20px;">ACTIVITIES</a></li>
  <li class="sizing2"><a class="sizing2" href="#javatab2" role="tab" data-toggle="tab" style="padding-top: 20px; padding-bottom: 20px;">SCHEDULE</a></li>
  <li class="sizing2"><a class="sizing2" href="#csharptab2" role="tab" data-toggle="tab" style="padding-top: 20px; padding-bottom: 20px;">MEDIA</a></li>
  
</ul>
</li>

<!-- Tab panes -->
<div class="tab-content" style="margin-top: 20px;">
  <div class="tab-pane active" id="hometab2" style="font-size: 17px; color: #626263;">
    <!-- activity content goes in here -->
  <div style="width: 100%; margin: auto;">
        <img src="img/celine.jpg" alt="" class="img-responsive" style="height: 100%; width: 100%; object-fit: contain">
  </div>
  <!-- tabs for activity information starts here -->
  <div style="margin-top: 10px;">
<ul class="nav nav-pills" role="tablist" style="background-color: #f3f1f1;" >
  <li class="active sizing3"><a class="sizinga" href="#hometab4" role="tab" data-toggle="tab" style="margin-left: 5px; padding-top: 20px; width: auto; padding-bottom: 20px;">Hiking</a></li>
  <li class="sizing3"><a class="sizinga" href="#javatab4" role="tab" data-toggle="tab" style="padding-top: 20px; padding-bottom: 20px; width: auto;">Jogging</a></li>
  <li class="sizing3"><a class="sizinga" href="#csharptab4" role="tab" data-toggle="tab" style="padding-top: 20px; padding-bottom: 20px; width: auto;">Dance</a></li>
  <li class="sizing3"><a class="sizinga" href="#notok4" role="tab" data-toggle="tab" style="padding-top: 20px; padding-bottom: 20px; width: auto;">Tour</a></li>
  <li class="sizing3"><a class="sizinga" href="#activity4" role="tab" data-toggle="tab" style="padding-top: 20px; padding-bottom: 20px; width: auto;">Tasks</a></li>
</ul>
</li>

<!-- Tab panes -->
<div class="tab-content" style="margin-top: 20px">
  <div class="tab-pane active" id="hometab4">
    <div class="col-sm-6">
      <p style="text-align:justify;">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto ipsam enim aspernatur eaque commodi, tempora vitae, dolores accusantium vel neque quas voluptatum illo eum voluptatem laborum sequi saepe maiores magni architecto quae inventore officia nihil ullam. Magni magnam laudantium voluptatibus beatae, veritatis culpa architecto, dolorem eum maxime excepturi debitis minus, nostrum maiores consectetur saepe pariatur ad earum ab doloribus atque ea. Impedit vitae distinctio ullam provident eum deleniti reprehenderit beatae, iure et ex molestiae! Quidem suscipit eos cumque nulla, debitis in, quam optio totam sunt est dolorem vitae? Natus dolore beatae aspernatur quod. Atque nam, doloremque explicabo dolorum ex unde.
      </p>
    </div>
    <div class="col-sm-6" style="margin-top: 10px;">
    <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">12:00</h2>
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
  <div class="tab-pane" id="javatab4">
  <div class="col-sm-6">
      <p style="text-align:justify;">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto ipsam enim aspernatur eaque commodi, tempora vitae, dolores accusantium vel neque quas voluptatum illo eum voluptatem laborum sequi saepe maiores magni architecto quae inventore officia nihil ullam. Magni magnam laudantium voluptatibus beatae, veritatis culpa architecto, dolorem eum maxime excepturi debitis minus, nostrum maiores consectetur saepe pariatur ad earum ab doloribus atque ea. Impedit vitae distinctio ullam provident eum deleniti reprehenderit beatae, iure et ex molestiae! Quidem suscipit eos cumque nulla, debitis in, quam optio totam sunt est dolorem vitae? Natus dolore beatae aspernatur quod. Atque nam, doloremque explicabo dolorum ex unde.
      </p>
    </div>
    <div class="col-sm-6" style="margin-top: 10px;">
    <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">11:00</h2>
      </div>
      <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
      <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">19:00</h2>
      </div>

  <a href="#" style="color: #ffffff; text-decoration: none;"><div style=" width: 56%; margin-left: auto; margin-right: auto; border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
    </div>
  

  </div>
  <div class="tab-pane" id="csharptab4">
    
  <div class="col-sm-6">
      <p style="text-align:justify;">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto ipsam enim aspernatur eaque commodi, tempora vitae, dolores accusantium vel neque quas voluptatum illo eum voluptatem laborum sequi saepe maiores magni architecto quae inventore officia nihil ullam. Magni magnam laudantium voluptatibus beatae, veritatis culpa architecto, dolorem eum maxime excepturi debitis minus, nostrum maiores consectetur saepe pariatur ad earum ab doloribus atque ea. Impedit vitae distinctio ullam provident eum deleniti reprehenderit beatae, iure et ex molestiae! Quidem suscipit eos cumque nulla, debitis in, quam optio totam sunt est dolorem vitae? Natus dolore beatae aspernatur quod. Atque nam, doloremque explicabo dolorum ex unde.
      </p>
    </div>
    <div class="col-sm-6" style="margin-top: 10px;">
    <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">9:00</h2>
      </div>
      <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
      <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">4:00</h2>
      </div>

  <a href="#" style="color: #ffffff; text-decoration: none;"><div style=" width: 56%; margin-left: auto; margin-right: auto; border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
    </div>

  </div>
  <div class="tab-pane" id="notok4">
  <div class="col-sm-6">
      <p style="text-align:justify;">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto ipsam enim aspernatur eaque commodi, tempora vitae, dolores accusantium vel neque quas voluptatum illo eum voluptatem laborum sequi saepe maiores magni architecto quae inventore officia nihil ullam. Magni magnam laudantium voluptatibus beatae, veritatis culpa architecto, dolorem eum maxime excepturi debitis minus, nostrum maiores consectetur saepe pariatur ad earum ab doloribus atque ea. Impedit vitae distinctio ullam provident eum deleniti reprehenderit beatae, iure et ex molestiae! Quidem suscipit eos cumque nulla, debitis in, quam optio totam sunt est dolorem vitae? Natus dolore beatae aspernatur quod. Atque nam, doloremque explicabo dolorum ex unde.
      </p>
    </div>
    <div class="col-sm-6" style="margin-top: 10px;">
    <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">13:00</h2>
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
  <div class="tab-pane" id="activity4">
  <div class="col-sm-6">
      <p style="text-align:justify;">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto ipsam enim aspernatur eaque commodi, tempora vitae, dolores accusantium vel neque quas voluptatum illo eum voluptatem laborum sequi saepe maiores magni architecto quae inventore officia nihil ullam. Magni magnam laudantium voluptatibus beatae, veritatis culpa architecto, dolorem eum maxime excepturi debitis minus, nostrum maiores consectetur saepe pariatur ad earum ab doloribus atque ea. Impedit vitae distinctio ullam provident eum deleniti reprehenderit beatae, iure et ex molestiae! Quidem suscipit eos cumque nulla, debitis in, quam optio totam sunt est dolorem vitae? Natus dolore beatae aspernatur quod. Atque nam, doloremque explicabo dolorum ex unde.
      </p>
    </div>
    <div class="col-sm-6" style="margin-top: 10px;">
    <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">5:00</h2>
      </div>
      <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
      <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">10:00</h2>
      </div>

  <a href="#" style="color: #ffffff; text-decoration: none;"><div style=" width: 56%; margin-left: auto; margin-right: auto; border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
    </div>
</div>
 <div class="tab-pane" id="javatab2">
   <?php 

    if(isset($sch_name)){
     echo '<h2><p>'.$sch_name.'<h2><p>'; 
    }

    ?>

<?php 

    if(isset($sch_start)){
     echo '<h4><p> Begins: &nbsp;'.$sch_start.'<h4><p>'; 
    }

    ?>



<?php 

    if(isset($sch_end)){
     echo '<h4><p> Ends: &nbsp;'.$sch_end.'<h4><p>'; 
    }

    ?>

    <hr>
 </div>
  <div class="tab-pane" id="csharptab2">C# is also a programming language</div>

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

 </body>
 </html>