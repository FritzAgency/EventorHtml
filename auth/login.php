<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Eventor - Login.</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="signup.css">
</head>
<?php 
    require_once('../auth/auth.php');

    login(); 
 ?>

<body>

<header>
 <!-- header starts here -->
 <nav class="navbar-sticky navbar navbar-default navbar-static-top" id="myTopnav" style="margin-bottom: 10px; background-color: white;">
  <div class="container">
    <div class="navbar-header" >
      <div class="col-sm-2 col-md-3 col-xm-4" style="width: 90%;">
      <a class="navbar-brand" href="../index.php"><img src="img/logo.png" alt="" srcset="" class="img-responsive" style="margin-top: -7px;"></a>
      </div>
    </div>
    <ul class="nav navbar-nav navbar-right" class="topnav" id="myTopnav" style="margin-top: -41px;">
    <!--li><a href="#" class="new">HOW IT WORKS </a></li>
      <li><a href="#" class="new">EVENTS</a></li>
      <li><a href="#" class="new">SPECIAL DEALS</a></li>
      <li><a href="#" class="new">ABOUT US</a></li>
      <li><a href="#" class="new">CONTACT</a></li-->
      <!-- <li><a href="auth/signup.php" class="new">SIGNUP</a></li> -->
      <!--li><a class="new"> | </a></li-->
      <!-- <li><a href="auth/login.php" class="new">LOGIN</a></li> -->
      <?php 

      /*if ((!isset($_SESSION['email']))){


  header("Location: ../auth/signup.php");

} */ 

 
?>




<li style="    margin-top: 13px; margin-right: 17px; font-weight: bold; color: #4f2684; padding-top: 29px;"><a href="EventorHtml/index.php"><span class="glyphicon glyphicon-home" style="color: #4f2684; font-size: 21px;"></span></a></li> 

    </ul>
  </div>
</nav>
<!-- header stops here -->
</header>

<div class="container" style="margin-top: 87px; width: 29%; background-color: white; margin-top: 7%; margin-bottom: 6%">

        <form class="form-horizontal" role="form" action="" method="POST">

             <h2 style="margin-right: auto; marign-left: auto; font-weight: bold; color: #4f2684; margin-left: 6em;">Login</h2>

             <div><?php if(!empty($_SESSION['message'])) {
                echo $_SESSION['message']; 
             } ?></div>
             <?php unset($_SESSION['message']); ?>

            <div class="form-group">
                <h4 style="padding-left: 15px; color: #4f2684;">Email</h4>
                <div class="col-sm-12" style="border-color: #4f2684;">
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email">
                </div>
            </div>

            <div class="form-group">
                    <h4 style="padding-left: 15px; color: #4f2684;">Password</h4>
                <div class="col-sm-12">
                    <input type="password" id="password" placeholder="Password" class="form-control" name="password">
                </div>
            </div>

            <div class="form-group">
                <div class="row" style="margin-left: 0px;">
                <div class="col-sm-1" style="margin-top: 10px;">
                    <input type="checkbox"/>
                </div>
                <div class="col-sm-6" style="padding-left: 15px; color: #4f2684; margin-top: 10px;">
                    <p>Remember me</p>
                </div>
                </div>
                <div class="row" style="margin-left: 0px; margin-top: 10px;">
                <div class="col-sm-6" style="padding-left: 15px;">
                <label for="forgot"><a href="../auth/forgotpassword.php" style="text-align: center; color: #4f2684;">Forgot Password</a></label>
                </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12" style="background-color: #4f2684">
                    <button type="submit" class="btn btn-primary btn-block" class="new" name="submit" style="font-weight: bold; background-color: #4f2684; border: #4f2684;">Login</button>
                </div>
</form>
</div>
            </div>

    <!-- footer goes here -->
    <footer style="background-color: #4f2684; border: 3px solid #e7e7e7; padding: 10px; height: 50px;">
  <div class="row">
    <div class="col-sm-2"  style="width: 12.666667%; margin-left: 36px">
      <img src="img/footer.png" alt="" class="img-responsive" style="margin-top: 2px;">
    </div>
    <div class="col-sm-8" style="margin-top: -8px;">
      <div class="row" style="width: 40%; margin-left: auto; margin-right: auto; margin-top: -4;">
        <div class="col-sm-5">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff; font-size: 10px;">How it works</p></a>
        </div>
        <div class="col-sm-4">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff; font-size: 10px;">About us</p></a>
        </div>
        <div class="col-sm-3">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff; font-size: 10px;">Contact</p></a>
        </div>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="row">
        <div class="col-sm-4">
          <a href=""><img src="img/index.png" alt="" style="width: 15px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index1.png" alt="" style="width: 15px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index11.png" alt="" style="width: 15px; height-max: 100%; margin-top: 10px;"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer ends here -->

</body>
</html>