<?php session_start();?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eventor.com</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css1/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="css1/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css1/style.css" type="text/css" rel="stylesheet" media="all">  
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css'>
<link href="css1/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style.scss">
    
    <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700,900');
*{
    font-family: 'Montserrat', sans-serif;
}
body {
  background-image:url("img/eventor.jpg");
  font-family: 'Montserrat', sans-serif;
}

.text {
  color: white;
  font-size: 14px;
  position: absolute;
  top: 8%;
  left: 14%;
  transform: translate(-10%, -8%);
  -ms-transform: translate(-10%, -8%);
  text-align: left;
}

div#carousel-example-generic {
    position:relative;
}


/* #container {
  width: 100px;
  height: 100px;
  position: relative;
}
body {
  padding-bottom: 40px;
  color: #5a5a5a;
} */


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* .carousel {
  margin-bottom: 60px;
} */

.carousel-control {
  top: 50%;
}

/* .carousel-caption {
  z-index: 10;
} */

/* .carousel .item {
  height: 500px;
  background-color:#bbb;
  overflow:hidden;
} */
/* .carousel img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;
} */

#searchForm {
	position:absolute;
  	top:86%;
}

/* .form-group{
    margin-left: auto;
    margin-right: auto;
} */

/* RESPONSIVE CSS
-------------------------------------------------- */
/* @media (max-width: 768px) {

  .carousel-inner>.item>img, .carousel-inner>.item>a>img {
  	max-width:inherit;
  }

  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }
} */


/* div.form-group {
    display: inline block;
    position: relative;
    z-index: 10;
    left: auto;
    right: auto;
    bottom: auto;
} */

 /* #custom-search-form {
        margin:0;
        margin-top: 5px;
        padding: 0;
    } */
 
    /* #custom-search-form .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9; */
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        /* margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
  */
    /* #custom-search-form button {
        border: 0;
    background: transparent;
    padding: 2px 5px;
    position: relative;
    left: 158%;
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    top: -53px; */
/* }
    }
 
    .search-query:focus + button {
        z-index: 1;   
    } */

.menu{
    font-size: 14px;
}

.menu1{
    font-size:14px;
}

.doe{
    height: 40px; 
    width: 104%; 
    margin-top: 6px; 
    background-color: rgba(79, 38, 132, 0.2);
    padding: 6px; 
    margin-left: auto; 
    margin-right: auto; 
    border: 2px solid #ffffff;
}

    /* .search-query:focus + button {
        z-index: 3;   
    } */

.carousel-control.left {
    z-index:7
}  
.carousel-control.right {
    z-index:7
}

.mdb-color.darken-2 {

background-color: #4f2684 !important;
}

.dropdown-toggle::after {
    margin-bottom: -2px;
}

</style>


</head>

<body>

    <!--Main Navigation-->
    
    <header>

    <!--Navbar-->
<nav class="navbar navbar-expand-lg" style="background-color: white;">

<!-- Navbar brand -->
<a class="navbar-brand waves-effect" href="#" style="margin-right: 21% !important;margin-left: 7%; padding-top: 0px;">
                    <div style="width: 150px;"><img src="img/logo2.png" alt="" class="img-fluid"></div>
                </a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav" style="padding-top: 5px;">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
    <!-- Dropdown -->
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle menu" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink" style="background-color: rgba(79, 38, 132, 0.2);">
                <a class="dropdown-item waves-effect menu1" style="font-size: 14px;" href="#">How It Works</a>
                <a class="dropdown-item waves-effect menu1" style="font-size: 14px;" href="#">Events</a>
                <a class="dropdown-item waves-effect menu1" style="font-size: 14px;" href="#">Special Deals</a>
                <a class="dropdown-item waves-effect menu1" style="font-size: 14px;" href="#">About us</a>
                <a class="dropdown-item waves-effect menu1" style="font-size: 14px;" href="#" >Contact</a>
            </div>
        </li>
    </ul>

    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons" style="margin-right: 26% !important;">
                    
                        <li class="nav-item">
                            <a href="event/create.php" class="nav-link waves-effect menu" style="color:#4f2684;">
                                <i class="fa fa-login"></i>Create Event
                            </a>
                        </li>
                        <li class="nav-item" style="margin-right: 60px;" >
                            <a href="#" class="nav-link waves-effect menu" style="color:#4f2684;">
                                <i class="fa fa-login"></i>Sell Products
                            </a>
                        </li>
</ul>

<ul class="navbar-nav nav-flex-icons">
                    
                    <li class="nav-item">
                        <a href="event/create.php" class="nav-link waves-effect menu" style="color:#4f2684;">
                            <i class="fa fa-login"></i>Signup
                        </a>
                    </li>
                    <li class="nav-item" style="margin-right: 60px;" >
                        <a href="#" class="nav-link waves-effect menu" style="color:#4f2684;">
                            <i class="fa fa-login"></i>Login
                        </a>
                    </li>
</ul>
    <!-- Links -->
</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
    </header>
    <!--Main Navigation-->
    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Carousel-->
            <section class="mb-4">

                <!--Carousel Wrapper-->
                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <!-- <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                    </ol> -->
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/carousel.jpg" alt="First slide">
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/carousel.jpg" alt="Second slide">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/carousel.jpg" alt="Third slide">
                        </div>
                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    <div class="sample two">
  <input type="text" name="search" placeholder="search">
  <button type="submit" class="btn btn-search fa fa-search"></button>
  <button type="reset" class="btn btn-reset fa fa-times"></button>
</div>
                    
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->

                    <!-- search bar starts here -->

                    <!-- <div><form class="col-sm-12" id="searchForm">
    <div class="form-group col-sm-6 col-sm-offset-2">
      <div class="input-group input-group-lg center-block" style="background-color: rgba(79, 38, 132, 0.4);">
        <div class="row" style="border: 2px solid white; margin: 7px; width: 100%;">
        <div class="col-sm-11">
        <input type="text" class="form-control" placeholder="Find an Event here" style="padding-top: 7px; background-color: transparent; color: white; text-align:center; border: 0px;">
        </div>
        <div class="col-sm-1">
        <span class="input-group-addon"><i class="fa fa-search fa-lg" style="color: white; font-size: 1.333333em; vertical-align: -57%;"></i></span>

        <div>
        </div>
      </div>
    </div>
  </form>
  </div> -->
  <!-- search bar form ends here -->

                </div>

            </section>
            <!--Section: Carousel-->

            <!--Section: Images-->
            <section class="text-center">

                <!-- Grid row -->
                <div class="row" style="clear: left;">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-3">

                        <div class="view overlay z-depth-1-half zoom animated">
                            <img src="img/1.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask back" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                    <div class="doe">
                                    <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">Title of Event Here</p>
                                </div>
                                        <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>Feb 11, 2018</p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>200</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Music Entertainment</p>
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees.
                                    </p>
                                    <!-- Secondary button -->
                                        <a href="event/create.php"><button type="button" class="btn btn-secondary">View</button></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half zoom animated">
                            <img src="img/2.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-blue-light" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                        <div class="doe">
                                        <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">Title of Event Here</p>
                                        </div>
                                        <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>Feb 11, 2018</p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>200</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Music Entertainment</p>
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees.</p>
                                            <!-- Secondary button -->
                                        <a href="event/create.php"><button type="button" class="btn btn-secondary">View</button></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half zoom animated">
                            <img src="img/3.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-blue-light" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                    <div class="doe">
                                    <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">Title of Event Here</p>
                                    </div>
                                    <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>Feb 11, 2018</p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>200</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Music Entertainment</p>
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees.
                                        </p>
                                        <!-- Secondary button -->
                                        <a href="event/create.php"><button type="button" class="btn btn-secondary">View</button></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-3">

                        <div class="view overlay z-depth-1-half zoom animated">
                            <img src="img/4.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask back" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                    <div class="doe">
                                    <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">Title of Event Here</p>
                                </div>
                                        <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>Feb 11, 2018</p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>200</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Music Entertainment</p>
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees.</p>
                                        <!-- Secondary button -->
                                        <a href="event/create.php"><button type="button" class="btn btn-secondary">View</button></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half zoom animated">
                            <img src="img/5.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-blue-light" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                        <div class="doe">
                                        <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">Title of Event Here</p>
                                        </div>
                                        <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>Feb 11, 2018</p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>200</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Music Entertainment</p>
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees.</p>
                                        <!-- Secondary button -->
                                        <a href="event/create.php"><button type="button" class="btn btn-secondary">View</button></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half zoom animated">
                            <img src="img/6.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-blue-light" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                    <div class="doe">
                                    <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">Title of Event Here</p>
                                    </div>
                                    <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>Feb 11, 2018</p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>200</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Music Entertainment</p>
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees.</p>
                                        <!-- Secondary button -->
                                        <a href="event/create.php"><button type="button" class="btn btn-secondary">View</button></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">
            </section>



            <!--Section: Jumbotron-->
            <section class="card wow fadeIn" style="background-image: url('img/midle.jpg');">

                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5" style="font-family: 'Montserrat'"> 

                    <h1 class="mb-4">
                        <strong>Find Your Perfect Event at Eventor.com</strong>
                    </h1>
                    <p>
                        <strong>Create Event and Share with your Friends on your social media platform</strong>
                    </p>
                    <p class="mb-4">
                        <strong>The most comprehensive Event creator and also a platform that allows you to sell your products and services.                            versions available. Create your own, stunning website.</strong>
                    </p>
                    <a href="event/create.php" class="btn btn-outline-white btn-lg">Start Your event creation
                    </a>

                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

        </div>
    </main>
    <!--Main layout-->

<!-- footer-top -->	
<div class="footer-top">
		<div class="container">
			<div class="col-md-3 foot-left">
				<h3>About Us</h3>
			
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
			</div>
			<div class="col-md-3 foot-left">
					<h3>Get In Touch</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
				
						<div class="contact-btm">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<p>90 Street, City, State 34789.</p>
						</div>
						<div class="contact-btm">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<p>+456 123 7890</p>
						<div class="contact-btm">
						</div>
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
							<p><a href="mailto:example@email.com">info@example.com</a></p>
						</div>
						<div class="clearfix"></div>

			</div>
			<div class="col-md-3 foot-left">
				<h3>Latest Events</h3>
				<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g1.jpg" alt="" class="img-responsive"></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g2.jpg" alt="" class="img-responsive"></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g3.jpg" alt="" class="img-responsive"></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g4.jpg" alt="" class="img-responsive"></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3 foot-left">
			<h3>Subscribe</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has </p>
			<form action="#" method="post">	
					<input type="email" Name="Enter Your Email" placeholder="Enter Your Email" required="">
				<input type="submit" value="Subscribe">
			</form>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
<!-- /footer-top -->							

<!-- footer -->
			<div class="copy-right">
				<div class="container">
				<div class="col-md-6 col-sm-6 col-xs-6 copy-right-grids">
						<div class="copy-left">
						<p>&copy; 2017 Events. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
						</div>
					</div>
				<div class="col-md-6 col-sm-6 col-xs-6 top-middle">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					</div>
			</div>
			
<!-- //footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
<script src="index1.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</body>

</html>