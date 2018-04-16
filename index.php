<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eventor.com</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>

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

/*#searchForm {
	position:absolute;
  	top:86%;
}*

/*.form-group{
    margin-left: auto;
    margin-right: auto;
}*/ 

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
    font-size: 13px;
}

.menu1{
    font-size:12px;
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



/*@media (max-width: 500px) {
  #searchForm {
     position:relative;
     /*top:0;
     left:0;*/
     /*width:100%;*/
  /*}
}*/
  


</style>






<style type="text/css">
.searchform {
  /*background:#f4f4f4;
  background:rgba(244,244,244,.79);
  border: 1px solid #d3d3d3;*/ 
  /*background: #4f2684;*/ 
  font-family: 'Montserrat', sans-serif;

  left: 50%;
  padding: 2px 5px;
  position: absolute;
  margin: -22px 0 0 -170px;
  top: 80%;
  width:339px;
  border-color: transparent;
 /* box-shadow:0 4px 9px rgba(0,0,0,.37);
  -moz-box-shadow:0 4px 9px rgba(0,0,0,.37);
  -webkit-box-shadow:0 4px 9px rgba(0,0,0,.37);
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px*/ 
}

.searchform input, .searchform button {
  float: left
}
.searchform input {
  /*background:#fefefe;*/ 
  border: none;
 /* font:12px/12px 'HelveticaNeue', Helvetica, Arial, sans-serif;*/ 
  margin-right: 5px;
  padding: 10px;
  width: 300px;
 }
  .searchform input:focus {
    outline: none;
    box-shadow:0 0 4px #0d76be inset;
    -moz-box-shadow:0 0 4px #0d76be inset;
    -webkit-box-shadow:0 0 4px #0d76be inset;
  }
  .searchform input::-webkit-input-placeholder {
    font-style: italic;
    line-height: 15px
  }

  .searchform input:-moz-placeholder {
    font-style: italic;
    line-height: 15px
  }

.searchform button {
    border: none;
  color:#fff;
  cursor: pointer;
  /*font: 13px/13px 'HelveticaNeue', Helvetica, Arial, sans-serif;*/ 
  padding: 10px;
  width:106px;
  height: 40px;
  box-shadow: 0 0 2px #2692dd inset;
  -moz-box-shadow: 0 0 2px #2692dd inset;
  -webkit-box-shadow: 0 0 2px #2692dd inset;
  border-radius: 9px;
  -moz-border-radius: 9px;
  -webkit-border-radius: 9px;
}
  .searchform button:hover {
    opacity:.9;
  }  

</style>


<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
-webkit-box-shadow: 0px 0px 3px 5px transparent;
-moz-box-shadow: 0px 0px 3px 5px transparent;
box-shadow: 0px 0px 3px 5px transparent; 

  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  font-family: 
 /* background: transparent;*/ 
}
</style>

</head>

<body>


<?php require('nav-index.php'); ?> 

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
                          <a href="event/summary.html">  <img class="d-block w-100" src="img/sliidnew.jpg" alt="First slide"></a>
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/sliid1.jpg" alt="Second slide">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <a href="event/vpage.php">
                            <img class="d-block w-100" src="img/makeup3.jpg" alt="Third slide">
                        </a>
                        </div>
                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    
                    <!--/.Controls-->
                    <div>


<!--form class="search-container">
  

<input type="text" id="search-bar" placeholder="What can I help you with today?">
    <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>



  </form-->



                    <!--form class="searchform cf"-->
    
      <!--div class="input-group input-group-lg center-block" style="background-color: rgba(79, 38, 132, 0.4);">
        <div class="row" style="border: 2px solid white; margin: 7px; width: 100%;">
        <div class="col-sm-11"-->
        <!--input type="text" class="form-control input-size" placeholder="Find an Event here" style="padding-top: 7px; background-color: transparent; color: white; text-align:center; border: 0px;">
        </div>
        <div class="col-sm-1">
        <span class="input-group-addon"><i class="fa fa-search fa-lg" style="color: white; font-size: 1.333333em; vertical-align: -57%;"></i></span>

        <div>
        </div>
      <!--/div>
    </div-->
  <!--/form>
  </div-->
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
                    
                <!--/.Carousel Wrapper-->
                <!-- <div class="container form-group" style="width: 26%; height: 62px; background-color: rgba(79, 38, 132, 0.4);">
	<div class="row" style="height: 55px;">
        <div class="span12" style="height: 55px;" id="nav">
            <form id="custom-search-form" class="form-search form-horizontal pull-right">
                <div class="input-append span12" style="height:43px;">
                    <p style="color: white; font-weight: bold;"><input type="text" class="search-query" placeholder="Find an Event Here" style="width: 169%; height: 41px; background-color: transparent; border: 2px solid #ffffff; margin-left: 17px; margin-top: 5px; color: white; text-align: center;"></p>
                    <button type="submit" style="width: 45px; height: 41px; color: white;"><i class="fa fa-search fa-lg"></i></button>
                </div>
            </form>
        </div>
	</div>
</div> -->


            </section>
        



<!--input type="text" id="myInput" onkeyup="myFunction()" placeholder="Find Your Event" title="Type in a name" style="border-radius: 50px"-->
       



            <!--Section: Carousel-->

            <!--Section: Images-->
            <section class="text-center event-section">


                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-3">

                        <div class="view overlay z-depth-1-half zoom animated">
                            <img src="img/kingmaker.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask back" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                    <div class="doe">
                                    <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">KING MAKER CONCERT</p>
                                </div>
                                        <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>APRIL 29, 2018</p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>200</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Music, Concert, Entertainment</p>

                                        <p>
                                            Witness the first live performance of Harrysong and some of the best songwriters and performers in Nigeria.
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
                            <img src="img/Concert2.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-blue-light" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                        <div class="doe">
                                        <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">Mente de Moda</p>
                                        </div>
                                        <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>APRIL 8, 2018</p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>200</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Shopping, Exhibition</p>

                                        <p>The biggest shopping experience in Nigeria is back again.</p>

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
                            <img src="img/Concert3.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-blue-light" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                    <div class="doe">
                                    <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">Safety Summit Lagos 2018</p>
                                    </div>
                                    <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>APRIL 4, 2018  </p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>200</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Business,  Education, Lecture</p>
                                        <p>
                                        Come share seats with prestigious individuals from various industries for an insightful lecture on security around us.  

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
                            <img src="img/Concert4.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask back" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                    <div class="doe">
                                    <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">Gidi Fest 5</p>
                                </div>
                                        <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>March 30, 2018</p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>100</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Concert, Music, Entertainment </p>
                                        <p>
                                            A gathering of the greatest artistes in Nigeria and the diaspora. The 5th edition promises to be bigger and better. 
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
                            <img src="img/Concert5.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-blue-light" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                        <div class="doe">
                                        <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">Flawless Makeup/Gele Training </p>
                                        </div>
                                        <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>May 11, 2018</p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>400</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Beauty, Training, Business</p>
                                        <p>Empower yourself as a makeup artist and a business person in the hands of the biggest beauty brand in the country for one month.</p>
                                        <!-- Secondary button -->
                                        <a href="event/vpage.php"><button type="button" class="btn btn-secondary">View</button></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half zoom animated">
                            <img src="img/Concert6.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-blue-light" style="background-color: rgba(79, 38, 132, 0.6);">
                                    <div class="text">
                                    <div class="doe">
                                    <p style="font-weight: bold; color: #ffffff; padding:2px; margin: 2px; margin-left: auto; margin-right: auto; text-align: center;">Anna & Mark's Wedding Ceremony</p>
                                    </div>
                                    <p><i class="fa fa-calendar" style="padding:5px; margin: 2px;"></i>AUGUST 21, 2018</p>
                                        <p><i class="fa fa-tasks" style="padding:5px; margin: 2px;"></i>200</p>
                                        <p><i class="fa fa-film" style="padding:5px; margin: 2px;"></i>Wedding</p>
                                        <p>Come  celebrate with us on the happiest day of our lives.<p>
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
            <!--section class="card wow fadeIn" style="background-image: url('img/midle.jpg');"-->

       

     

    </main>
    <!--Main layout-->



<section class="mb-4" id="How" style="width: 88%; margin: auto;">

                <!--Carousel Wrapper-->
                <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                          <a href="">  <img class="d-block w-100" src="img/caroven1.jpg" alt="First slide"></a>
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/caroven2.jpg" alt="Second slide">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/caroven3.jpg" alt="Third slide">
                        </div>
                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    
                    <!--/.Controls-->
                    <div>
                </div>

                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
               

            </section>
        



    <!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn" style="background-color: #4f2684;">

        <!--Call to action-->
        <div class="pt-4" style="background-color:#8f2dc2; padding-bottom: 1.5rem;">
            <a class="btn btn-outline-white" href="vendor/vendorform.php" role="button">Become a Vendor
            </a>
            <a class="btn btn-outline-white" href="event/create.php" role="button">Create Event
            </a>
        </div>
        <!--/.Call to action-->

        <!-- Social icons -->
        <div class="pb-4" style="background-color:#4f2684; padding-top: 1.5rem;">
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
        <div class="footer-copyright py-3" style="background-color:#4f2684; padding-top: 0px;">
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