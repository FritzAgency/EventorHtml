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
      background-image:url("img/eventor.jpg");
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
    <div class="container" id="about">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

<!--Section: Pricing v.3-->
<section class="text-center pb-3 my-5">

<!--Grid row-->
<div class="row card" style="margin-top: 10px;">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4" style="margin-top: 1.5em;">
        <!--Card-->
        <div class="card flex-center">

            <!--Content-->
            <div class="text-center">
                <div class="card-body">
                <h2 class="font-weight-bold mb-2 flex-center">ACTIVITIES</h2>
                </div>
            </div>

        </div>
        <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">
        <!--Card-->
        <div class="card purple-gradient">

            <!--Content-->
            <div class="text-center white-text">
                <div class="card-body">
                    <h5>Premium plan</h5>
                    <div class="flex-center">
                        <div class="card-circle">
                            <i class="fa fa-group white-text"></i>
                        </div>
                    </div>

                    <!--Price-->
                    <h2 class="font-weight-bold mb-2">79$</h2>
                    <p>Esse corporis saepe laudantium velit adipisci cumque iste ratione facere non distinctio cupiditate
                        sequi atque.
                    </p>
                    <a class="btn btn-outline-white btn-rounded">Buy now</a>
                </div>
            </div>

        </div>
        <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">
        <!--Card-->
        <div class="card">

            <!--Content-->
            <div class="text-center">
                <div class="card-body">
                    <h5>Advanced plan</h5>
                    <div class="flex-center">
                        <div class="card-circle">
                            <i class="fa fa-bar-chart light-blue-text"></i>
                        </div>
                    </div>

                    <!--Price-->
                    <h2 class="font-weight-bold mb-2">99$</h2>
                    <p class="grey-text">At ab ea a molestiae corrupti numquam quo beatae minima ratione magni accusantium repellat eveniet
                        quia vitae.</p>
                    <a class="btn btn-light-blue btn-rounded">Buy now</a>
                </div>
            </div>

        </div>
        <!--Card-->
    </div>
    <!--Grid column-->

</div>
<!--Grid row-->

</section>
<!--Section: Pricing v.3-->
        

       

      </section>
      



        <h3 class="h3 text-center mb-5" id="about">ABOUT</h3>
        <ul class="nav md-pills nav-justified pills-secondary" style="margin-bottom: 20px;">
          <li class="nav-item new">
              <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel11" role="tab">Details</a>
          </li>
          <li class="nav-item new">
            <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel12" role="tab">Price</a>
        </li>
          <li class="nav-item new">
              <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel13" role="tab">Organizer</a>
          </li>
          <li class="nav-item new">
              <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel14" role="tab">Location</a>
          </li>
          <li class="nav-item new">
              <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel15" role="tab">Vendor</a>
          </li>
          <li class="nav-item new">
            <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel16" role="tab">Sponsors</a>
        </li>
      </ul>
      
      <!-- Tab panels -->
      <div class="tab-content">
      
          <!--Panel 1-->
          <div class="tab-pane fade in show" id="panel13" role="tabpanel">
               <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6 mb-4">
  
              <!-- Main heading -->
              <h3 class="h3 mb-3" style="text-align: right;">Organizer Name goes in here</h3>
              
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="" style="max-width: 70%; height: 100%;">
            </div>
            <!--Grid column-->
  
          </div>
          <!--Grid row-->
      
          </div>
          <!--/.Panel 1-->
      
          <!--Panel 2-->
          <div class="tab-pane fade" id="panel14" role="tabpanel">
              <br>
      
              <!--location goes here map.-->

              <?php 

    if(isset($Address)){
     echo $Address; 
    }

    ?>


         <!-- The map displays the location filled by the user -->      
<iframe style=" width: 100%; height: 500px;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDWG8NOZeOKNf9FabkmtqwCpNs04zcT5Yc
    &q='<?php echo $Address;?>'" allowfullscreen>
</iframe>
      
          </div>
          <!--/.Panel 2-->
      
          <!--Panel 3-->
          <div class="tab-pane fade" id="panel15" role="tabpanel">
              <div class="row">
                <div class="col-md-4 mb-2">
                  <!--Card Regular-->
<div class="card card-cascade">

    <!--Card image-->
    <div class="view overlay">
        <img src="https://mdbootstrap.com/img/Photos/Others/men.jpg" class="img-fluid" alt="">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
    </div>
    <!--/.Card image-->

    <!--Card content-->
    <div class="card-body text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Name of Vendor here</strong></h4>
            <h5>Products or services</h5>
        <p class="card-text">information
        </p>

        <!--Facebook-->
        <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
        <!--Twitter-->
        <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
        <!--Google +-->
        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fa fa-dribbble"></i></a>

    </div>
    <!--/.Card content-->

</div>
<!--/.Card Regular-->
                </div>
                <div class="col-md-4 mb-2">
                  <!--Card Regular-->
<div class="card card-cascade">

    <!--Card image-->
    <div class="view overlay">
        <img src="https://mdbootstrap.com/img/Photos/Others/men.jpg" class="img-fluid" alt="">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
    </div>
    <!--/.Card image-->

    <!--Card content-->
    <div class="card-body text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Name of vendor</strong></h4>
        <h5>Products or services</h5>

        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae. Facere modi sunt, quod quibusdam.
        </p>

        <!--Facebook-->
        <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
        <!--Twitter-->
        <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
        <!--Google +-->
        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fa fa-dribbble"></i></a>

    </div>
    <!--/.Card content-->

</div>
<!--/.Card Regular-->
                </div>
                <div class="col-md-4 mb-2">
                  <!--Card Regular-->
<div class="card card-cascade">

    <!--Card image-->
    <div class="view overlay">
        <img src="https://mdbootstrap.com/img/Photos/Others/men.jpg" class="img-fluid" alt="">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
    </div>
    <!--/.Card image-->

    <!--Card content-->
    <div class="card-body text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Billy Cullen</strong></h4>
        <h5>Web developer</h5>

        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae. Facere modi sunt, quod quibusdam.
        </p>

        <!--Facebook-->
        <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
        <!--Twitter-->
        <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
        <!--Google +-->
        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fa fa-dribbble"></i></a>

    </div>
    <!--/.Card content-->

</div>
<!--/.Card Regular-->
                </div>
              </div>
      
          </div>
          <!--/.Panel 3-->
      
          <!--Panel 4-->
          <div class="tab-pane fade" id="panel11" role="tabpanel">
              <br>
      
              details of event here
      
          </div>
          <!--/.Panel 4-->

          <!--Panel 5-->
          <div class="tab-pane fade" id="panel16" role="tabpanel">
              <div class="row">
                  <div class="col-md-4">
  <!-- Display the first sponsors logo--> 
<?php


//$query = "SELECT * FROM `event` WHERE sponsor_logo='$sponsor_logo'"; 


$select = mysqli_query($con,"SELECT `sponsor_logo` FROM `event` WHERE `sponsor_logo` = '$sponsor_logo'");

//$result = mysqli_query($con,$query) or die(mysqli_error());


//$row = mysqli_num_rows($result) or die(mysqli_error());



if (mysqli_num_rows($select) === 1){
 
 echo "<center><img src='../public/images/$sponsor_logo' alt='Any' class='img-fluid'><p style='margin-right:-20px '>$sponsor_name</p></center>";  


}else{
 

 echo '';


}


?>
</div>
              

               <div class="col-md-4">
                 
<!-- display the 2nd sponsors logo--> 

<?php


//$query = "SELECT * FROM `event` WHERE sponsor_logo='$sponsor_logo'"; 


$select = mysqli_query($con,"SELECT `sponsor_logo1` FROM `event` WHERE `sponsor_logo1` = '$sponsor_logo1'");

//$result = mysqli_query($con,$query) or die(mysqli_error());


//$row = mysqli_num_rows($result) or die(mysqli_error());



if (mysqli_num_rows($select) === 1){
 
 echo "<center><img src='../public/images/$sponsor_logo1' alt='Any' class='img-fluid'><p style='margin-right:-20px '>$sponsor_name1</p></center>";  


}else{
  
 echo '';

}


?>


               </div>


                  <div class="col-md-4">
<!-- Display the 3rd logo-->  
<?php


//$query = "SELECT * FROM `event` WHERE sponsor_logo='$sponsor_logo'"; 


$select1 = mysqli_query($con,"SELECT `sponsor_logo2` FROM `event` WHERE `sponsor_logo2` = '$sponsor_logo2'");

$row = mysqli_fetch_array($select1);
 

//$result = mysqli_query($con,$query) or die(mysqli_error());


//$row = mysqli_num_rows($result) or die(mysqli_error());



if ($row['sponsor_logo2'] == 1){
 
 echo "<center><img src='../public/images/$sponsor_logo2' alt='Any' class='img-fluid'><p style='margin-right:-20px '>$sponsor_name2</p></center>";  



}else{
  
 echo '';


  }


?>

                  </div>
              </div>
    
        </div>
        <!--/.Panel 5-->

        <!--Panel 6-->
        <div class="tab-pane fade" id="panel12" role="tabpanel">
          <div class="row">  
          <div class="col-md-4 mb-2">
              <!--Card Wider-->
<div class="card card-cascade wider">

 <!--Card content-->
  <div class="card-body text-center">
      <!--Title-->
      <h4 class="card-title"><strong>Regular</strong></h4>
    <hr>
      <p class="card-text">#5,000</p>
  </div>
  <!--/.Card content-->

</div>
<!--/.Card Wider-->
           </div>
           <div class="col-md-4 mb-2">
             <!--Card Wider-->
<div class="card card-cascade wider">

  <!--Card content-->
   <div class="card-body text-center">
       <!--Title-->
       <h4 class="card-title"><strong>VIP</strong></h4>
     <hr>
       <p class="card-text">#25,000</p>
   </div>
   <!--/.Card content-->
 
 </div>
 <!--/.Card Wider-->
           </div>
           <div class="col-md-4 mb-2">
             <!--Card Wider-->
<div class="card card-cascade wider">

  <!--Card content-->
   <div class="card-body text-center">
       <!--Title-->
       <h4 class="card-title"><strong>Premium</strong></h4>
     <hr>
       <p class="card-text">#100,000</p>
   </div>
   <!--/.Card content-->
 
 </div>
 <!--/.Card Wider-->
           </div>
         </div>

    </div>
    <!--/.Panel 6-->
      
      </div>

        
      <hr class="my-5">

      <!--Section: ACTIVITIES-->
      <section>
        <h2 class="my-5 h3 text-center" id="activities">ACTIVITIES</h2>


        <ul class="nav md-pills nav-justified pills-secondary" style="margin-bottom: 20px;">
            <li class="nav-item new">
                <!--a class="nav-link" style="color:black;" data-toggle="tab" href="#panel31" role="tab">Hicking</a-->
            </li>
            <li class="nav-item new">
              <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel32" role="tab"><!--Jogging-->
                <?php if(isset($act_name)){echo $act_name;}?>
              </a>
          </li>
            <li class="nav-item new">
                <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel33" role="tab"><!--Organizer-->
                  <?php if(isset($act_name1)){echo $act_name1;}?>

                </a>
            </li>
            <li class="nav-item new">
                <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel34" role="tab"><!--Location-->
                  
                  <?php if(isset($act_name2)){echo $act_name2;}?>


                </a>
            </li>
            <li class="nav-item new">
                <!--a class="nav-link" style="color:black;" data-toggle="tab" href="#panel35" role="tab">Vendor</a-->
            </li>
            <li class="nav-item new">
              <!--a class="nav-link" style="color:black;" data-toggle="tab" href="#panel36" role="tab">Sponsors</a-->
          </li>
        </ul>
        
        <!-- Tab panels -->
        <div class="tab-content">
        
            <!--Panel 1-->
            <div class="tab-pane fade in show" id="panel31" role="tabpanel">
                <div class="row">
  
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <h4 class="card-title"><strong>Name of Activity</strong></h4>
                        <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nulla natus id accusamus consectetur, quos sapiente molestiae eum dignissimos fuga fugit atque doloremque itaque numquam animi labore odio nam? Assumenda illum voluptatum eum quos ducimus dolore exercitationem similique ex tenetur. </p>
                        <div class="row">
                          <div class="col-md-6 mb4">
                              <h2 style="font-weight:bold; margin: 40px; margin: 20px; font-size: 20px; text-align: center">TIME</h2>
                              <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                              <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">10:00</h2>
                              </div>
                              <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
                              <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                              <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">7:00</h2>
                          </div>
                          </div>
                          <div class="col-md-6 mb-4" style="margin: auto;">
                              <button type="button" class="btn btn-outline-secondary waves-effect">Schedule</button>
                          </div>
                    </div>
                    </div>
                    <!--Grid column-->
          
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="" style="max-width: 70%; height: 100%;">
                    </div>
                    <!--Grid column-->
          
                  </div>
                  <!--Grid row-->
        
            </div>
            <!--/.Panel 1-->
        
            <!--Panel 2-->
            <div class="tab-pane fade in show" id="panel32" role="tabpanel">
                <div class="row">
  
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <h4 class="card-title"><!--strong>Name of Activity</strong-->
                          <strong><?php if(isset($act_name)){echo $act_name;}?></strong>

                        </h4>
                        <!--p class="card-text"> Lorem ipsum! dolor sit amet consectetur adipisicing elit. Minima nulla natus id accusamus consectetur, quos sapiente molestiae eum dignissimos fuga fugit atque doloremque itaque numquam animi labore odio nam? Assumenda illum voluptatum eum quos ducimus dolore exercitationem similique ex tenetur. </p-->

                        <p class="card-text">
                          <?php if(isset($act_desc)){echo $act_desc;}?>

                        </p>


                        <div class="row">
                          <div class="col-md-6 mb4">
                              <h2 style="font-weight:bold; margin: 40px; margin: 20px; font-size: 20px; text-align: center">TIME</h2>
                              <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                              <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">10:00</h2>
                              </div>
                              <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
                              <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                              <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">7:00</h2>
                          </div>
                          </div>
                          <div class="col-md-6 mb-4" style="margin: auto;">
                              <button type="button" class="btn btn-outline-secondary waves-effect">Schedule</button>
                          </div>
                    </div>
                    </div>
                    <!--Grid column-->
          
                    <!--Grid column-->
                    <div class="col-md-6 mb-4" style="background-image: url('../public/images/<?php echo 
$act_img;?>'); background-repeat: no-repeat;">
                        <!--img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="" style="max-width: 70%; height: 100%;"-->


                    </div>
                    <!--Grid column-->
          
                  </div>
                  <!--Grid row-->
        
            </div>
            <!--/.Panel 2-->
        
            <!--Panel 3-->
            <div class="tab-pane fade in show" id="panel33" role="tabpanel">
                <div class="row">
  
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <h4 class="card-title"><strong>
                          <!--Name of Activity-->
                             <?php if(isset($act_name1)){echo $act_name1;}?>


                          </strong></h4>
                        <!--p class="card-text"> Lorem ipsum!! dolor sit amet consectetur adipisicing elit. Minima nulla natus id accusamus consectetur, quos sapiente molestiae eum dignissimos fuga fugit atque doloremque itaque numquam animi labore odio nam? Assumenda illum voluptatum eum quos ducimus dolore exercitationem similique ex tenetur. </p-->
                        <p class="card-text">
                         
                          <?php if(isset($act_desc1)){echo $act_desc1;}?>

                        </p>


                        <div class="row">
                          <div class="col-md-6 mb4">
                              <h2 style="font-weight:bold; margin: 40px; margin: 20px; font-size: 20px; text-align: center">TIME</h2>
                              <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                              <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">10:00</h2>
                              </div>
                              <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
                              <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                              <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">7:00</h2>
                          </div>
                          </div>
                          <div class="col-md-6 mb-4" style="margin: auto;">
                              <button type="button" class="btn btn-outline-secondary waves-effect">Schedule</button>
                          </div>
                    </div>
                    </div>
                    <!--Grid column-->
          
                    <!--Grid column-->
                    
<div class="col-md-6 mb-4" style="background-image: url('../public/images/<?php echo 
$act_img1;?>'); background-repeat: no-repeat;">

                        <!--img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="" style="max-width: 70%; height: 100%;"-->
                    </div>
                    <!--Grid column-->
          
                  </div>
                  <!--Grid row-->
        
            </div>
            <!--/.Panel 3-->
        
            <!--Panel   4-->
            <div class="tab-pane fade in show" id="panel34" role="tabpanel">
                <div class="row">
  
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <h4 class="card-title"><strong>

                      <!--  Name of Activity-->

                          <?php if(isset($act_name2)){echo $act_name2;}?>

                      
                      </strong></h4>
                        <!--p class="card-text"> Lorem ipsum!!! dolor sit amet consectetur adipisicing elit. Minima nulla natus id accusamus consectetur, quos sapiente molestiae eum dignissimos fuga fugit atque doloremque itaque numquam animi labore odio nam? Assumenda illum voluptatum eum quos ducimus dolore exercitationem similique ex tenetur. </p-->
                       <p class="card-text">

                          <?php if(isset($act_desc2)){echo $act_desc2;}?>

                         
                       </p>


                        <div class="row">
                          <div class="col-md-6 mb4">
                              <h2 style="font-weight:bold; margin: 40px; margin: 20px; font-size: 20px; text-align: center">TIME</h2>
                              <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                              <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">10:00</h2>
                              </div>
                              <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
                              <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                              <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">7:00</h2>
                          </div>
                          </div>
                          <div class="col-md-6 mb-4" style="margin: auto;">
                              <button type="button" class="btn btn-outline-secondary waves-effect">Schedule</button>
                          </div>
                    </div>
                    </div>
                    <!--Grid column-->
          
                    <!--Grid column-->
                    <div class="col-md-6 mb-4" style="background-image: url('../public/images/<?php echo 
$act_img2;?>'); background-repeat: no-repeat;">                        <!--img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="" style="max-width: 70%; height: 100%;"-->
                    </div>
                    <!--Grid column-->
          
                  </div>
                  <!--Grid row-->
        
            </div>
            <!--/.Panel 4-->
  
            <!--Panel 5-->
            <div class="tab-pane fade in show" id="panel35" role="tabpanel">
                <div class="row">
  
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <h4 class="card-title"><strong>Name of Activity</strong></h4>
                        <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nulla natus id accusamus consectetur, quos sapiente molestiae eum dignissimos fuga fugit atque doloremque itaque numquam animi labore odio nam? Assumenda illum voluptatum eum quos ducimus dolore exercitationem similique ex tenetur. </p>
                        <div class="row">
                          <div class="col-md-6 mb4">
                              <h2 style="font-weight:bold; margin: 40px; margin: 20px; font-size: 20px; text-align: center">TIME</h2>
                              <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                              <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">10:00</h2>
                              </div>
                              <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
                              <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                              <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">7:00</h2>
                          </div>
                          </div>
                          <div class="col-md-6 mb-4" style="margin: auto;">
                              <button type="button" class="btn btn-outline-secondary waves-effect">Schedule</button>
                          </div>
                    </div>
                    </div>
                    <!--Grid column-->
          
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="" style="max-width: 70%; height: 100%;">
                    </div>
                    <!--Grid column-->
          
                  </div>
                  <!--Grid row-->
        
            </div>
          <!--/.Panel 5-->
  
          <div class="tab-pane fade in show" id="panel36" role="tabpanel">
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6 mb-4">
                      <h4 class="card-title"><strong>Name of Activity</strong></h4>
                      <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nulla natus id accusamus consectetur, quos sapiente molestiae eum dignissimos fuga fugit atque doloremque itaque numquam animi labore odio nam? Assumenda illum voluptatum eum quos ducimus dolore exercitationem similique ex tenetur. </p>
                      <div class="row">
                        <div class="col-md-6 mb4">
                            <h2 style="font-weight:bold; margin: 40px; margin: 20px; font-size: 20px; text-align: center">TIME</h2>
                            <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                            <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">10:00</h2>
                            </div>
                            <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">-</h2>  
                            <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
                            <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">7:00</h2>
                        </div>
                        </div>
                        <div class="col-md-6 mb-4" style="margin: auto;">
                            <button type="button" class="btn btn-outline-secondary waves-effect">Schedule</button>
                        </div>
                  </div>
                  </div>
                  <!--Grid column-->
        
                  <!--Grid column-->
                  <div class="col-md-6 mb-4">
                      <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="" style="max-width: 70%; height: 100%;">
                  </div>
                  <!--Grid column-->
        
                </div>
                <!--Grid row-->
      
          </div>
      <!--/.Panel 6-->
      </div>
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