<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Eventor - Signup.</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
        <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
        <script type='text/javascript' src='script.js'></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <?php 

    require_once('../functions/auth.php');
   signup(); 
     ?> 
    <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');

body {
    background-color: #f3f3f3;
    font-family: 'Montserrat', sans-serif;
}

#header {
	width: 100%;
	height: 70px;
	position: relative;
	top: -40px;
	background-color: #7FC7AF;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
}

p {
    font-family: Verdana, Arial, sans-serif;
    font-size: 1em;
}

.left {
	position: relative;
	top: -40px;
    float: left;
}

.right {
	position: relative;
	top: -40px;
    float: right;
}

#main {
	position: relative;
	top: 170px;
	float: left;
}
    </style>

</head>
<body>

<header>
 <!-- header starts here -->
 <nav class="navbar-sticky navbar navbar-default navbar-static-top" id="myTopnav" style="margin-bottom: 10px; background-color: white;">
  <div class="container">
    <div class="navbar-header" >
      <div class="col-sm-12 col-md-12 col-xm-12" style="width: 90%;">
      <a class="navbar-brand" href="#"><img src="" alt="Organizer logo" srcset="" class="img-responsive" style="margin-left: auto; margin-right: auto;"></a>
      </div>
    </div>
    <!-- <ul class="nav navbar-nav navbar-right" class="topnav" id="myTopnav" style="margin-top: -41px;"> -->
      <?php 
 
?>
<!-- <li style="    margin-top: 13px; margin-right: 17px; font-weight: bold; color: #4f2684; padding-top: 29px;"><a href="/EventorHtml/index.php"><span class="glyphicon glyphicon-home" style="color: #4f2684; font-size: 21px;"></span></a></li>  -->

    <!-- </ul> -->
  </div>
</nav>
<!-- header stops here -->
</header>
		<div class="container" style="width:500px; background-color: white; margin-bottom: 2%; margin-top:2%;padding-top: 20px; padding-bottom: 20px; ">
                
                <form class="form-horizontal" role="form" method="POST" action="">

                    <h2 style="margin-right: auto; marign-left: auto; font-weight: bold; color: #4f2684; margin-bottom: 20px;">REGISTER</h2>

<div>
  <?php 

  if(!empty($_SESSION['message'])){

    echo $_SESSION['message']; 
  }  
?>
</div>
<?php unset($_SESSION['message']); ?>
                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Name<span style="color: red;"> *</span></h4> 
                        <div class="col-sm-6">
                            <input type="text" id="firstName" name="first_name" placeholder="First Name" class="form-control" autofocus>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="last_name" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                        </div>
                    </div>
                                        
                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Email<span style="color: red;"> *</span></h4>
                        <div class="col-sm-12">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Phone Number<span style="color: red;"> *</span></h4>
                        <div class="col-sm-12">
                            <input id="phoneNumber" placeholder="Phone Number" name="phoneNumber" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <h4 style="padding-left: 15px;">Address<span style="color: red;"> *</span></h4>
                            <div class="col-sm-12" style="padding-top: 10px;">
                                    <input type="orgAddress" id="Address" placeholder="Address" name="Address" class="form-control">
                            </div>
                        </div>

                                        <div class="form-group">
                        <div class="col-sm-12" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>
                        </div>
    </form>

</div>
                        </div>
    <!-- footer goes here -->
        <!--Footer-->
        <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn" style="background-color: #4f2684;">

<!--Call to action-->
<div class="pt-4" style="background-color:#8f2dc2; padding-bottom: 1.5rem;">
    <a class="btn btn-outline-white" href="#" role="button">Become a Vendor
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
<!-- footer ends here -->
</body>
</html>