<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eventor.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <?php 
session_start();
?>
</head>
<body>

<nav class="navbar navbar-default" data-spy="affix" data-offset-top="197" style="margin:auto;">
  <div class="container-fluid" style=:"padding-right: 8px;">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Eventor.com" style="margin-top: -11px; margin-left: 95px;"></a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="active" style="color:#4f2684;">HOME</a></li>
        <li><a href="#" style="color:#4f2684;">HOW IT WORKS</a></li>
        <li><a href="#" style="color:#4f2684;">EVENTS</a></li>
        <li><a href="#" style="color:#4f2684;">SPECIAL DEALS</a></li>
        <li><a href="#" style="color:#4f2684;">ABOUT US</a></li>
        <li><a href="#" style="color:#4f2684;">CONTACT</a></li>
        <?php if ((isset($_SESSION['email']))){

        echo 
      ''; 
      }else{
      echo'<li><a href="auth/signup.php" style="color:#4f2684;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>'; 
    }
?>

        <?php if ((isset($_SESSION['email']))){

        echo 
      '
      <li><a href="auth/logout.php" style="color:#4f2684;"><span class=""></span> Logout</a></li>
';      }else{
      echo'
      <li><a href="auth/login.php" style="color:#4f2684;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
'; 
    }
?>

<li>  <?php 
if((isset($_SESSION['first_name']))){
  echo 'Welcome,'. $_SESSION['first_name'];
}
   ?></li>

    </ul>
  </div>
</nav>
  <!-- body content content starts here -->
<div class="container">
  <!-- section to divide the page into two -->
  <div class="row">
    <!-- left side bar for vendor and create event attributes -->
    <div class="col-sm-4" styling="padding-right: 0px; padding-left: 10px;">
      <!-- section for create event button -->
      <div>
        <a href="event/create.php"><div style=" margin-top: 3px; height: 377px; width: 100%; background-image:url('img/create.png')"></div></a>
      </div>
      <!-- section for sell products -->
      <div>
          <a href="vendor.html"><div style="margin-top: 3px; margin-bottom: 3px; height: 377px; width: 100%; background-image:url('img/start.png')"></div></a>
      </div>
    </div>
    <!-- side bar ends here -->
    <!-- right section of the page where main content exist -->
    <div class="col-sm-8" style="padding: 0px; border: 0px; margin-top: 3px; padding-left: 3px;">
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/carosel.png">
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="item">
        <img src="img/carosel.png">
        <div class="container">
          <div class="carousel-caption">
            
          </div>
        </div>
      </div>
      <div class="item">
        <img src="img/carosel.png">
        <div class="container">
          <div class="carousel-caption">
            
          </div>
        </div>
      </div>
    </div>
    
    <!-- search form 3
<form id="search-form_3">
    <input type="text" class="search_3"/>
    <input type="submit" class="submit_3" value="Search" />
    </form> -->
    
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <i class="glyphicon glyphicon-chevron-left"></i>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <i class="glyphicon glyphicon-chevron-right"></i>
    </a>  
  </div>
  <!-- /.carousel -->
  
  <div class="container">
  
    <!-- FOOTER -->
    <footer>

    </footer>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <img src="img/first1.png" alt="" style="width-max:100%">
    </div>
    <div class="col-sm-3">
      <img src="img/second.png" alt="" style="width-max:100%">
    </div>
    <div class="col-sm-3">
      <img src="img/third.png" alt="" style="width-max:100%">
    </div>
  </div>
  <div class="row">
      <div class="col-sm-3">
        <img src="img/fourth.png" alt="" style="width-max:100%">
      </div>
      <div class="col-sm-3">
        <img src="img/fifth.png" alt="" style="width-max:100%">
      </div>
      <div class="col-sm-3">
        <img src="img/sixth.png" alt="" style="width-max:100%">
      </div>
    </div>
  </div><!-- /.container -->
    </div>
    <!-- main content section ends here -->
    <!-- carousel goes in here -->
  <!-- carousel ends here -->
  <!-- body content ends here -->
</div>
<!-- footer section -->
  <footer style="background-color: white; padding: 10px;">
      <div class="row">
        <div class="col-sm-2">
          <img src="img/logo.png" alt="" style="width-max:100%; height-max: 100%">
        </div>
        <div class="col-sm-8">
          <p style="text-align: center; font-weight: bold; padding-top: 15px;">Copyright &copy; 2018 Eventor.com, all Rights Reserved. All Photos &copy; their respective owners</p>
        </div>
        <div class="col-sm-2"> 
          <div class="row">
            <div class="col-sm-4">
              <a href=""><img src="img/index.png" alt="" style="width: 25px; height-max: 100%; padding-top: 15px;"></a>
            </div>
            <div class="col-sm-4">
                <a href=""><img src="img/index1.png" alt="" style="width: 25px; height-max: 100%; padding-top: 15px;"></a>
            </div>
            <div class="col-sm-4">
                <a href=""><img src="img/index11.png" alt="" style="width: 25px; height-max: 100%; padding-top: 15px;"></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>
