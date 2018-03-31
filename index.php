<!DOCTYPE html>
<html>
<head>
  
  <?php session_start(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700,900');

body {
  background-image:url("img/eventor.jpg");
  font-family: 'Montserrat', sans-serif;
}

li a .new{
  background-color: #ffffff;
  font-size: 10px;
  font-weight: normal;
  color: #4f2684;
}

li a .new:hover {
  background-color: #f8f8f8;
  color: #000000;
  font-weight: normal;
  font-size: 10px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

/* shadow effects */
.shadow {
  -moz-box-shadow:    3px 3px 2px 2px #ccc;
  -webkit-box-shadow: 3px 3px 2px 2px #ccc;
  box-shadow:         3px 3px 2px 2px #ccc;
}

/* grow animation */
.grow:hover
{
        -webkit-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
}

/* shake animation define rule */


@-webkit-keyframes swing
{
    15%
    {
        -webkit-transform: translateX(10px);
        transform: translateX(10px);
    }
    30%
    {
        -webkit-transform: translateX(-5px);
       transform: translateX(-5px);
    } 
    50%
    {
        -webkit-transform: translateX(3px);
        transform: translateX(3px);
    }
    65%
    {
        -webkit-transform: translateX(-3px);
        transform: translateX(-3px);
    }
    80%
    {
        -webkit-transform: translateX(2px);
        transform: translateX(2px);
    }
    100%
    {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}
@keyframes swing
{
    15%
    {
        -webkit-transform: translateX(5px);
        transform: translateX(5px);
    }
    30%
    {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
    }
    50%
    {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
    }
    65%
    {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
    }
    80%
    {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
    }
    100%
    {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

/* swing hover integrated */
.swing:hover
{
        -webkit-animation: swing 1s ease;
        animation: swing 1s ease;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
}

.contain {
  position: relative;

}

.image {
  display: block;

  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 13px;
  right: 0;
  background-color: rgba(79, 38, 132, 0.4);
  overflow: hidden;

  height: 0;
  transition: .5s ease;
}

.contain:hover .overlay {
  height: 100%;
}

.text {
  color: white;
  font-size: 13px;
  position: absolute;
  top: 8%;
  left: 14%;
  transform: translate(-10%, -8%);
  -ms-transform: translate(-10%, -8%);
  text-align: left;
}
/* .logo{
    position:absolute;
    border:2px solid #eee;
    left:162px;
    top:386px;
} */

div#carousel-example-generic {
    position:relative;
}

div.form-group {
    position:absolute;
    z-index:9999999;
    top:361px; /* change to whatever you want */
    left:-781; /* change to whatever you want */
    right:auto; /* change to whatever you want */
    bottom:auto; /* change to whatever you want */
}

 #custom-search-form {
        margin:0;
        margin-top: 5px;
        padding: 0;
    }
 
    #custom-search-form .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    #custom-search-form button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }

</style>
</head>
<body>
  <!-- header starts here -->
<nav class="navbar-sticky navbar navbar-default navbar-static-top" id="myTopnav" style="margin-bottom: 10px; background-color: #fff;" class="new">
  <div class="container">
    <div class="navbar-header">
      <div class="col-sm-2 col-md-3 col-xm-4" style="left: -180px; width: 20%;">
      <a class="navbar-brand" href="index.php"><img src="img/logo2.png" alt="" srcset="" class="img-responsive" style="margin-top: 4px;"></a>
      </div>
    </div>
    <ul class="nav navbar-nav navbar-right" class="topnav" id="myTopnav" style="margin-top: -35px; padding-bottom: 10px; margin-right: 189px;">
    <li><a href="#" class="new">HOW IT WORKS </a></li>
      <li><a href="#" class="new">EVENTS</a></li>
      <li><a href="#" class="new">SPECIAL DEALS</a></li>
      <li><a href="#" class="new">ABOUT US</a></li>
      <li><a href="#" class="new">CONTACT</a></li>
      <!-- <li><a href="auth/signup.php" class="new">SIGNUP</a></li> -->
      <!--li><a class="new"> | </a></li-->
      <!-- <li><a href="auth/login.php" class="new">LOGIN</a></li> -->
      <?php if ((isset($_SESSION['email']))){

echo 
''; 
}else{

echo'<li><a href="auth/signup.php" style="color:#4f2684;"> Sign up</a></li>'; 


}
?>

<?php if ((!isset($_SESSION['first_name']))){

echo 
'
<li><a href="auth/login.php" style="color:#4f2684;"><span class=""></span> Login</a></li>
';      

}
?>



<li style="margin-top: 15px; margin-right: 17px; font-weight: bold; color: #4f2684; right: -345px;">
<div class="dropdown">
  <div class="row">
    <div class="col-sm-6">
    <?php 
if((isset($_SESSION['first_name']))){
echo $_SESSION['first_name'];
}
?>
    </div>


<?php
if (isset($_SESSION['first_name'])){
echo'<div class="col-sm-6"><span class="caret dropdown-toggle" type="button" data-toggle="dropdown"></span>
    <ul class="dropdown-menu">
      <li><a href="event/dashboard.php">Dashboard</a></li>
      <li><a href="auth/logout.php">Logout</a></li>    
    </ul>
    </div>';
}  
?>
  </div>
  </div>
    </ul>
  </div>
</nav>
<!-- header stops here -->
<body>
  <!-- body starts here -->
<div class="container" style="margin-left: 128px;">
  <div class="row">
    <div class="col-sm-4">
      <!-- creator and vendor buttons goes in here -->
      <div class="row" style="width:75%; height: 20%; position:absolute; left: 115px;">
        <!-- create event button -->
        <div style="margin-bottom: 18px;" class="shadow swing">
          <a href="event/newRegForm.php">
          <img src="img/create.jpg" alt="create event design" srcset="" class="img-responsive">
        </a>
        </div>
        <!-- start selling vendor retisgration form -->
        <div class="shadow swing">
          <a href="http://localhost/wordpress">
          <img src="img/start.jpg" style="margin-bottom: 18px;" alt="create event design" srcset="" class="img-responsive">
        </a>
        </div>

        <!-- Adds goes here-->
        <div class="shadow swing">
          <img src="img/adds.png" alt="create event design" srcset="" class="img-responsive">
        </div>
      </div>
    </div>
    <div class="col-sm-8 shadow" style="padding-right: 0px;">
      <!-- carousel goes in here -->
      <div id="myCarousel carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- search bar starts here -->
  <div>
  <div class="container form-group" style="width: 83%;">
	<div class="row">
        <div class="span12">
            <form id="custom-search-form" class="form-search form-horizontal pull-right">
                <div class="input-append span12">
                    <p style="color: white; font-weight: bold;"><input type="text" class="search-query" placeholder="Enter Search here" style="width: 464px; height: 39px; border-radius: 25px; background-color: transparent; border: 2px solid #ffffff;"></p>
                    <button type="submit" class="btn"><span class="glyphicon glyphicon-search fa-2x" style="left: 450px; top: -49px; border: 1px solid #fff; padding: 8px; background-color: #ffff; border-radius: 46px;"></span></i></button>
                </div>
            </form>
        </div>
	</div>
</div>
        <!-- <div class="col-sm-3" style="margin-right: -26px;">
          <div class="form-group">
          <div class="selectDiv">
   <span class="selectDefault"></span>
   <select name="txtCountry" class="selectBox">
      <option class="defualt-text">Search by Location</option>
      <option value="1">Ikeja</option>
      <option value="2">Victoria</option>
   </select>
</div>
          </div>
        </div> -->
        <!-- <div class="col-sm-3" style="margin-right: -52px;">
          <div class="form-group">
          <div class="selectDiv">
   <span class="selectDefault"></span>
   <select name="txtCountry" class="selectBox">
      <option class="defualt-text">Search by Time</option>
      <option value="1">Morning</option>
      <option value="2">Afternoon</option>
   </select>
</div>
          </div>
        </div> -->
        <!-- <div class="col-sm-3">
          <div class="form-group">
            <button type="submit"><span class="glyphicon glyphicon-search"></span></i></button>
          </div>
        </div>
      </div>
    </form> -->
  </div>
  <!-- search bar ends here -->
  
  <!-- Indicators -->
  <ol class="carousel-indicators" style="bottom: 40px;">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/carousel.jpg" alt="Chania" class="img-responsive">
      <div class="carousel-caption">
        <!-- <h3>Los Angeles</h3>
        <p>LA is always so much fun!</p> -->
      </div>
    </div>

    <div class="item">
      <img src="img/carousel.jpg" alt="Chicago" class="img-responsive">
      <div class="carousel-caption">
        <!-- <h3>Chicago</h3>
        <p>Thank you, Chicago!</p> -->
      </div>
    </div>

    <div class="item">
      <img src="img/carousel.jpg" alt="New York" class="img-responsive">
      <div class="carousel-caption">
        <!-- <h3>New York</h3>
        <p>We love the Big Apple!</p> -->
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

<!-- other  body content starts here -->
<!-- first row for images starts here -->
  <div class="row">
    <div class="col-sm-4 shadow swing contain" style="padding-right: 0px; margin-top: 10px;margin-right: -9px;">
      <img src="img/fifth.jpg" alt="" class="img-responsive image">
      <!-- this section for over layer hover -->
      <div class="overlay">
      <div class="text">
          <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px;">Title of Event Here</p>
          <p><span class="glyphicon glyphicon-calendar" style="padding:5px; margin: 2px;"></span>Feb 11, 2018</p>
          <p><span class="glyphicon glyphicon-tasks" style="padding:5px; margin: 2px;"></span>200</p>
          <p><span class="glyphicon glyphicon-film" style="padding:5px; margin: 2px;"></span>Music Entertainment</p>
          <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
        </div>
      </div>
      <!-- over layer section ends here -->
    </div>
    <div class="col-sm-4 shadow swing contain" style="padding-right: 0px; margin-top: 10px; margin-right: -9px;">
      <img src="img/fifth.jpg" alt="" class="img-responsive image">
       <!-- this section for over layer hover -->
       <div class="overlay">
       <div class="text">
          <p style="font-weight: bold; color: #ffffff; padding:5px; margin: 2px;">Title of Event Here</p>
          <p><span class="glyphicon glyphicon-calendar" style="padding:5px; margin: 2px;"></span>Feb 11, 2018</p>
          <p><span class="glyphicon glyphicon-tasks" style="padding:5px; margin: 2px;"></span>200</p>
          <p><span class="glyphicon glyphicon-film" style="padding:5px; margin: 2px;"></span>Music Entertainment</p>
          <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
        </div>
        </div>
       <!-- over layer section ends here -->
    </div>
    <div class="col-sm-4 shadow swing contain" style="padding-right: 0px; margin-top: 10px; margin-right: -9px;">
      <img src="img/fifth.jpg" alt="" class="img-responsive image">
       <!-- this section for over layer hover -->
       <div class="overlay">
       <div class="text">
          <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 5px;">Title of Event Here</p>
          <p><span class="glyphicon glyphicon-calendar" style="padding:5px; margin: 2px;"></span>Feb 11, 2018</p>
          <p><span class="glyphicon glyphicon-tasks" style="padding:5px; margin: 2px;"></span>200</p>
          <p><span class="glyphicon glyphicon-film" style="padding:5px; margin: 2px;"></span>Music Entertainment</p>
          <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
        </div>
      </div>
       <!-- over layer section ends here -->
    </div>
  </div>
  <!-- first row of images ends here -->
  <!-- second row of images starts here -->
  <div class="row">
    <div class="col-sm-4 shadow swing contain" style="padding-right: 0px; margin-top: 10px; margin-right: -9px">
      <img src="img/fifth.jpg" alt="" class="img-responsive image">
       <!-- this section for over layer hover -->
       <div class="overlay">
       <div class="text">
          <p style="font-weight: bold; color: #ffffff; padding:5px; margin: 2px;">Title of Event Here</p>
          <p><span class="glyphicon glyphicon-calendar" style="padding:5px; margin: 2px;"></span>Feb 11, 2018</p>
          <p><span class="glyphicon glyphicon-tasks" style="padding:5px; margin: 2px;"></span>200</p>
          <p><span class="glyphicon glyphicon-film" style="padding:5px; margin: 2px;"></span>Music Entertainment</p>
          <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
        </div>
      </div>
       <!-- over layer section ends here -->
    </div>
    <div class="col-sm-4 shadow swing contain" style="padding-right: 0px; margin-top: 10px; margin-right: -9px">
      <img src="img/fifth.jpg" alt="" class="img-responsive image">
       <!-- this section for over layer hover -->
       <div class="overlay">
       <div class="text">
          <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px;">Title of Event Here</p>
          <p><span class="glyphicon glyphicon-calendar" style="padding:2px; margin: 2px;"></span>Feb 11, 2018</p>
          <p><span class="glyphicon glyphicon-tasks" style="padding:2px; margin: 2px;"></span>200</p>
          <p><span class="glyphicon glyphicon-film" style="padding:2px; margin: 2px;"></span>Music Entertainment</p>
          <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
        </div>
        </div>
       <!-- over layer section ends here -->
    </div>
    <div class="col-sm-4 shadow swing contain" style="padding-right: 0px; margin-top: 10px; margin-right: -9px">
      <img src="img/fifth.jpg" alt="" class="img-responsive image">
       <!-- this section for over layer hover -->
       <div class="overlay">
        <div class="text">
          <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px;">Title of Event Here</p>
          <p><span class="glyphicon glyphicon-calendar" style="padding:2px; margin: 2px;"></span>Feb 11, 2018</p>
          <p><span class="glyphicon glyphicon-tasks" style="padding:2px; margin: 2px;"></span>200</p>
          <p><span class="glyphicon glyphicon-film" style="padding:2px; margin: 2px;"></span>Music Entertainment</p>
          <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
        </div>
      </div>
       <!-- over layer section ends here -->
    </div>
  </div>
  <!-- second row of images ends here -->
  <!-- <div class="contain">
  <img src="img/first1.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">this is good</div>
  </div>
</div> -->
<!-- other  body content ends here -->
    </div>
  </div>
</div>

<!-- footer goes here -->
<footer style="background-color: #4f2684; padding: 7px; height: 54px; margin-top: 14px;">
  <div class="row">
    <div class="col-sm-2" style="width: 12.667%; left: 23px;">
      <img src="img/footer.png" alt="" class="img-responsive" style="margin-top: 2px;">
    </div>
    <div class="col-sm-8" style="left: 51px;">
      <div class="row" style="width: 40%; margin-left: auto; margin-right: auto; font-size: 12px; margin-top: -4px;">
        <div class="col-sm-5">
        <a href="#"><p style="text-align: center; font-weight: normal; padding-top: 15px; color: #ffffff;">HOW IT WORKS</p></a>
        </div>
        <div class="col-sm-4">
        <a href="#"><p style="text-align: center; font-weight: normal; padding-top: 15px; color: #ffffff;">ABOUT US</p></a>
        </div>
        <div class="col-sm-3">
        <a href="#"><p style="text-align: center; font-weight: normal; padding-top: 15px; color: #ffffff;">CONTACT</p></a>
        </div>
      </div>
    </div>
    <div class="col-sm-2" style="right: -124px;"> 
      <div class="row">
        <div class="col-sm-4" style="width: 22.333%;">
          <a href=""><img src="img/index.png" alt="" style="width: 13px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4" style="width: 22.333%;">
            <a href=""><img src="img/index1.png" alt="" style="width: 13px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4" style="width: 22.333%;">
            <a href=""><img src="img/index11.png" alt="" style="width: 13px; height-max: 100%; margin-top: 10px;"></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script> -->

</body>
</html>
