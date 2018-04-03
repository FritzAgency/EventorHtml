<?php
 
?>


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

  <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700,900');
    
    body {
      /* background-image:url("img/eventor.jpg"); */
      font-family: 'Montserrat', sans-serif;
    }

    .new{
      color: black;
    }

  .new:hover{
    border-bottom: 2px solid rgb(63, 10, 50);
    color:black;

  }

</style>

</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/">
        <div style="width: 40px; border-radius: 50%">


          <!--img src="img/logo2.png" alt="" class="img-fluid"-->
          <!-- The site logo goes in here --> 
          
<img src="../public/images/<?php echo 
$org_logo;?>" alt="Anything" class="img-fluid" style="border-radius: 50px ">

        </div>
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
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/getting-started/" target="_blank"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"></a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="#about" class="nav-link">
              About
            </a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">
                Activities
            </a>
          </li>
          <li class="nav-item" style="margin-left: 27px;">
            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect waves-light"
              target="_blank">Register
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
  <!-- data-ride="carousel" -->
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view">

          <!--Video source-->
          <!--video class="" autoplay loop>
            <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
          </video-->

          <div class="view" style="background-image: url('../public/images/<?php echo 
$event_flier;?>'); background-repeat: no-repeat; background-size: cover;"> </div>


          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <!--strong>A Trip To Olumo Rock</strong-->
                <strong><?php  if(isset($event_title)){echo $event_title;}?></strong>
              </h1>

              <p>
                <!--strong>A forever green trip with lots of experience and tour in with knowledge of the great olumo rock.</strong-->
              </p>

              <p class="mb-4 d-none d-md-block">
                <!--event description goes here-->  
                <strong><?php if(isset($event_description)){
     echo $event_description; 
    }?></strong>
              </p>
              <a  href="" class="btn btn-outline-white btn-lg">Register
              </a> 

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->

      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view">

          <!--Video source-->
          <!--video class="video-full" autoplay loop>
              <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
          </video-->


          <div class="view" style="background-image: url('../public/images/<?php echo 
$event_flier;?>'); background-repeat: no-repeat; background-size: cover;">
</div>

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <!--strong>A Trip To Olumo Rock</strong-->
                <strong><?php  if(isset($event_title)){echo $event_title;}?></strong>
              </h1>

              <p>
                <!--strong>A forever green trip with lots of experience and tour in with knowledge of the great olumo rock.</strong-->
              </p>

              <p class="mb-4 d-none d-md-block">
                <!--strong>The trip to have with friends and family to enjoy at moments that will strick a mark in your history</strong-->
                  <strong><?php if(isset($event_description)){
     echo $event_description; 
    }?></strong>

              </p>
              <a href="#" class="btn btn-outline-white btn-lg">Register
              </a> 

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
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

  <!--Main layout-->
  <main>
    <div class="container-fluid wow fadeIn" id="about">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn card">

<!--Section: Pricing v.3-->
<section class="text-center pb-3 my-5">

  <div class="row">
    <div class="col-3 col-sm-3 col-lg-3">
      <!--Card-->
      <div class="flex-center">

<!--Content-->
<div class="text-center">
    <div class="card-body">
    <h2 class="font-weight-bold mb-2 flex-center wow fadeInUp" style="margin-top: 10px;">ABOUT</h2>
    </div>
</div>

</div>
<!--Card-->
</div>

    
    <div class="col-8 col-sm-4 col-lg-9">
      <!--Card-->
        <div>

            <!--Content-->
            <div class="text-center">
                <div class="card-body">
                <h1 class="display-4 font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInUp">A Trip to Olumo Rock</h1>
            <h5 class="pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 wow fadeInUp" data-wow-delay="0.2s">It comes with a lot of new features, easy to follow videos and images. Check it out now!</h5>
            <h4 class="py-4 font-weight-bold wow fadeInUp">TICKETS</h4>
            <div class="row">  
          <div class="col-md-4 mb-2 wow fadeInUp">
              <!--Card Wider-->
<div class="card card-cascade wider wow fadeInUp">

 <!--Card content-->
  <div class="card-body text-center">
      <!--Title-->
      <h4 class="card-title"><strong>Regular</strong></h4>
    <hr>
    <p class="card-text list-inline-item">QTY</p> 
      <p class="card-text list-inline-item" style="font-weight: bold;">100</p>
      <p class="card-text list-inline-item">Price</p> 
      <p class="card-text list-inline-item" style="font-weight: bold;">25000</p>
  </div>
  <!--/.Card content-->

</div>
<!--/.Card Wider-->
           </div>
           <div class="col-md-4 mb-2 wow fadeInUp">
             <!--Card Wider-->
<div class="card card-cascade wider wow fadeInUp">

  <!--Card content-->
   <div class="card-body text-center">
       <!--Title-->
       <h4 class="card-title"><strong>VIP</strong></h4>
     <hr>
     <p class="card-text list-inline-item">QTY</p> 
      <p class="card-text list-inline-item" style="font-weight: bold;">100</p>
      <p class="card-text list-inline-item">Price</p> 
      <p class="card-text list-inline-item" style="font-weight: bold;">25000</p>
   </div>
   <!--/.Card content-->
 
 </div>
 <!--/.Card Wider-->
           </div>
           <div class="col-md-4 mb-2 wow fadeInUp">
             <!--Card Wider-->
<div class="card card-cascade wider wow fadeInUp">

  <!--Card content-->
   <div class="card-body text-center">
       <!--Title-->
       <h4 class="card-title"><strong>Premium</strong></h4>
     <hr>
     <p class="card-text list-inline-item">QTY</p> 
      <p class="card-text list-inline-item" style="font-weight: bold;">100</p>
      <p class="card-text list-inline-item">Price</p> 
      <p class="card-text list-inline-item" style="font-weight: bold;">100000</p>
   </div>
   <!--/.Card content-->
 
 </div>
 <!--/.Card Wider-->
           </div>
         </div>
                </div>
            </div>

        </div>
        <!--Card-->
    </div>
</div>
<!--Grid row-->
<hr>
<!-- location goes here -->
<div class="row wow fadeInUp">
  <div class="col-8 col-sm-4 col-lg-9">
    <h4>address goes here</h4>
    <iframe style=" width: 100%; height: 500px;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDWG8NOZeOKNf9FabkmtqwCpNs04zcT5Yc
    &q='<?php echo $Address;?>'" allowfullscreen>
</iframe>
  </div>
  <div class="col-3 col-sm-3 col-lg-3">
         <!--Card-->
         <div class="flex-center">

<!--Content-->
<div class="text-center">
    <div class="card-body">
    <h2 class="font-weight-bold mb-2 flex-center wow fadeInUp" style="margin-top: 10px;">LOCATION</h2>
    </div>
</div>
</div>
<!--Card-->
</div>
</div>
<!-- location ends here -->

<hr class="my-4">
<!-- Activities goes here -->
<div class="row wow fadeInUp">
<div class="col-3 col-sm-3 col-lg-3">
  <!--Card-->
  <div class="flex-center">

<!--Content-->
<div class="text-center">
    <div class="card-body">
    <h2 class="font-weight-bold mb-2 flex-center wow fadeInUp" style="margin-top: 10px;">ACTIVITIES</h2>
    </div>
</div>
</div>
<!--Card-->
  </div>
  <div class="col-8 col-sm-4 col-lg-9">
  <div class="row">
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
                </div>
    </div>
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
      </div>
    </div>
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(22).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
      </div>
    </div>
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(25).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
      </div>
    </div>
</div>
</div>
</div>
<!-- Activities ends here -->
<hr>
<!-- sponsors starts -->
<!-- location goes here -->
<div class="row wow fadeInUp">
  <div class="col-8 col-sm-4 col-lg-9">
  <div class="row">
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
                </div>
    </div>
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
      </div>
    </div>
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(22).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
      </div>
    </div>
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(25).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
      </div>
    </div>
</div>
  </div>
  <div class="col-3 col-sm-3 col-lg-3">
         <!--Card-->
         <div class="flex-center">

<!--Content-->
<div class="text-center">
    <div class="card-body">
    <h2 class="font-weight-bold mb-2 flex-center wow fadeInUp" style="margin-top: 10px;">SPONSORS</h2>
    </div>
</div>
</div>
<!--Card-->
</div>
</div>
<!-- sponsors ends here -->

<hr>

<!-- vendors starts here -->
<!-- Activities goes here -->
<div class="row wow fadeInUp">
<div class="col-3 col-sm-3 col-lg-3">
  <!--Card-->
  <div class="flex-center">

<!--Content-->
<div class="text-center">
    <div class="card-body">
    <h2 class="font-weight-bold mb-2 flex-center wow fadeInUp" style="margin-top: 10px;">SPONSORS</h2>
    </div>
</div>
</div>
<!--Card-->
  </div>
  <div class="col-8 col-sm-4 col-lg-9">
  <div class="row">
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
                </div>
    </div>
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
      </div>
    </div>
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(22).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
      </div>
    </div>
    <div class="col-6 col-sm-3">
    <div class="avatar mx-auto white white wow fadeInUp"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(25).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
      </div>
    </div>
</div>
</div>
</div>
<!-- Activities ends here -->
<hr>
<!-- vendors ends here -->

</section>

    </div>
      </section>
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/getting-started/" target="_blank" role="button">Sell Products
      </a>
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank" role="button">Register
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap">
        <i class="fa fa-facebook mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap">
        <i class="fa fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4">
        <i class="fa fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484">
        <i class="fa fa-google-plus mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap">
        <i class="fa fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap">
        <i class="fa fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design">
        <i class="fa fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/">
        <i class="fa fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="index1.php"> Eventor.com </a>
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