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
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700,900');

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

div.form-group {
    display: inline block;
    position: relative;
    z-index: 9999908;
    top: 70%;
    left: auto;
    right: auto;
    bottom: auto;
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
    background: transparent;
    padding: 2px 5px;
    position: relative;
    left: 158%;
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    top: -53px;
}
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }

.menu{
    font-size: 14px;
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

    .search-query:focus + button {
        z-index: 3;   
    }

.carousel-control.left {
    z-index:7
}  
.carousel-control.right {
    z-index:7
}

.mdb-color.darken-2 {

background-color: #4f2684 !important;

}
</style>


</head>

<body>

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="#">
                    <div style="width: 150px;"><img src="img/logo2.png" alt="" class="img-fluid"></div>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link waves-effect menu" href="#">How It Works
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect menu" href="#">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect menu" href="#">Special Deals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect menu" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect menu" href="#" >Contact</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                    
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
                        <li class="nav-item menu">
<?php if ((!isset($_SESSION['first_name']))){

echo 
'<a href="auth/login.php" class="nav-link waves-effect" style="color: #4f2684;">
<i class="fa fa-login"></i>Login</a>';      
}
else {
    echo '<a href="event/dashboard.php" class="nav-link waves-effect">
<i class="fa fa-login"></i>Dashboard</a>';  
}
?>

                        </li>
                        <li class="nav-item menu">
                           
    <?php if ((isset($_SESSION['email']))){

echo 
''; 
}else{

echo'<a href="auth/signup.php" class="nav-link border border-light rounded waves-effect" style="color: #4f2684;"><i class="fa fa-login"></i>Signup</a>
'; 


}
?>
    
</li>
</ul>

    
    <?php 
if((isset($_SESSION['first_name']))){
echo 'Welcome, ' . $_SESSION['first_name'];
} 
?>





                </div>

            </div>
        </nav>
        <!-- Navbar -->

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
                </div>
                <!--/.Carousel Wrapper-->
                <div class="container form-group" style="width: 26%; height: 62px; background-color: rgba(79, 38, 132, 0.4);">
	<div class="row" style="height: 55px;">
        <div class="span12" style="height: 55px;">
            <form id="custom-search-form" class="form-search form-horizontal pull-right">
                <div class="input-append span12" style="height:43px;">
                    <p style="color: white; font-weight: bold;"><input type="text" class="search-query" placeholder="Find an Event Here" style="width: 169%; height: 41px; background-color: transparent; border: 2px solid #ffffff; margin-left: 17px; margin-top: 5px; color: white; text-align: center;"></p>
                    <button type="submit" style="width: 45px; height: 41px; color: white;"><i class="fa fa-search fa-lg"></i></button>
                </div>
            </form>
        </div>
	</div>
</div>


            </section>
            <!--Section: Carousel-->

            <!--Section: Images-->
            <section class="text-center">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-3">

                        <div class="view overlay z-depth-1-half zoom tada animated">
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
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half zoom tada animated">
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
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half zoom tada animated">
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
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
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

                        <div class="view overlay z-depth-1-half zoom tada animated">
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
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half zoom tada animated">
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
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half zoom tada animated">
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
                                        <p>Come and party with flyest men and women in nigeria, free drinks and meals for the first 200 attendees. Order for your ticket now</p>
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
            <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background2.jpg);">

                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        <strong>Find Your Perfect Event at Eventor.com</strong>
                    </h1>
                    <p>
                        <strong>Create Event and Share with your Friends on your social media platform</strong>
                    </p>
                    <p class="mb-4">
                        <strong>The most comprehensive Event creator and also a platform that allows you to sell your products and services.                            versions available. Create your own, stunning website.</strong>
                    </p>
                    <a target="_blank" href="#" class="btn btn-outline-white btn-lg">Start Your event creation
                    </a>

                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn" style="background-color: #4f2684;">

        <!--Call to action-->
        <div class="pt-4" style="background-color:#4f2684;">
            <a class="btn btn-outline-white" href="#" role="button">Become a Vendor
            </a>
            <a class="btn btn-outline-white" href="#" target="_blank" role="button">Create Event
            </a>
        </div>
        <!--/.Call to action-->

        <hr class="my-4" style="background-color: #4f2684; color: #4f2684;">

        <!-- Social icons -->
        <div class="pb-4" style="background-color:#4f2684;">
            <a href="#">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="#">
                <i class="fa fa-twitter mr-3"></i>
            </a>

            <a href="#">
                <i class="fa fa-youtube mr-3"></i>
            </a>

            <a href="#">
                <i class="fa fa-google-plus mr-3"></i>
            </a>
            <a href="#">
                <i class="fa fa-pinterest mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3" style="background-color:#4f2684;">
            © 2018 Copyright:
            <a href="#"> Eventor.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->

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