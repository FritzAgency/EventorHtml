<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eventor.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <?php 
session_start();
?>

<style>
  .search-background img {
    width: 100%;
    background: rgba(0, 0, 0, 0);
}
.well-searchbox {
  min-height: 15px;
  min-width: 350px;
  padding: 5px;
  position: absolute;
  z-index: 80;
  top: 311px;
  right: 136px;
  background: rgba(0, 0, 0, 0.6);
  margin-bottom: 5px;
  border: 1px solid #e3e3e3;
  border-radius: 20px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}

.well-searchbox label {
    color: #fff;
    background-color: rgba(0, 0, 0, 0);
}
</style>

</head>
<body>

<nav class="navbar navbar-default" data-spy="affix" data-offset-top="197" style="margin:auto;">
  <div class="container-fluid" style=:"padding-right: 8px;">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Eventor.com" style="margin-top: -11px; margin-left: 95px;" class="img-git commitresponsive"></a>
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

<li style="margin-top: 15px; margin-right: 17px; font-weight: bold; color: #4f2684;">  <?php 
if((isset($_SESSION['first_name']))){
  echo 'Welcome, '. $_SESSION['first_name'];
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
    <div class="col-sm-4" style="margin-top: 10px;">
      <!-- section for create event button -->
      <div>
        <a href="event/create.php"><img src="img/create.png" alt="" class="img-responsive"></a>
      </div>
      <!-- section for sell products -->
      <div style="margin-top: 10px;">
          <a href="vendor.html"><img src="img/start.png" alt="" class="img-responsive"></a>
      </div>
    </div>
    <!-- side bar ends here -->
    <!-- right section of the page where main content exist -->
    <div class="col-sm-8" style="padding: 0px; border: 0px; margin-top: 12px; padding-left: 3px; margin-left: -16px;">
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" style="margin-left: 11px;">
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
    
    <!-- search form 3 -->
<div class="well-searchbox">
                <form class="form-horizontal" role="form" style="background: rgba(0, 0, 0, 0);">
                <div class="row">
                <div class="col-sm-3" style="padding-right: 33px;">
                    <div class="form-group">
                            <select class="form-control" placeholder="Category" style="background: rgba(0, 0, 0, 0);">
                                <option value="">Category</option>
                                <option value="">Party</option>
                                <option value="">Sport</option>
                                <option value="">Entertainment</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3" style="padding-right: 33px;">
                    <div class="form-group">
                            <select class="form-control" placeholder="Location" style="background: rgba(0, 0, 0, 0);">
                                <option value="">Location</option>
                                <option value="">V.I</option>
                                <option value="">Ikeja</option>
                                <option value="">Ikorodun</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3">
                    <div class="form-group">
                            <select class="form-control" placeholder="Time" style="background: rgba(0, 0, 0, 0);">
                                <option value="">Time</option>
                                                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3">
                    <button type="submit" class="btn btn-default" style="background: rgba(0, 0, 0, 0); padding: 6px 14px; border-radius: 50px; font-size: 15px;">
      <span class="glyphicon glyphicon-search"></span>
    </button>
                    </div>
                    </div>
                </form>
            </div>
     <!-- search form ends here -->
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

  <div class="row" style="width: 142%; padding-top: 5px; margin-top: 6px;">
    <div class="col-sm-3 view overlay" style="margin-left: 12px;">
      <img src="img/first1.png" alt="" class="img-responsive">
    </div>

    <div class="col-sm-3 view overlay" style="margin-left: -16px;">
      <img src="img/second.png" alt="" class="img-responsive">
    </div>

    <div class="col-sm-3 view overlay" style="margin-left: -16px;">
      <img src="img/third.png" alt="" class="img-responsive">
    </div>
  </div>

  <div class="row" style="width: 142%; padding-top: 5px; margin-top: 6px;">
      <div class="col-sm-3 view overlay" style="margin-left: 12px;">
        <img src="img/fourth.png" alt="" class="img-responsive">
      </div>

      <div class="col-sm-3 view overlay" style="margin-left: -16px;">
        <img src="img/fifth.png" alt="" class="img-responsive">
      </div>

      <div class="col-sm-3 z-depth-5" style="margin-left: -16px;">
        <div class="view overlay z-depth-5">
        <img src="img/sixth.png" alt="" class="img-responsive">
        <div class="mask flex-center rgba-green-slight">
        <p class="white-text">Super light overlay</p>
    </div>
      </div>
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
