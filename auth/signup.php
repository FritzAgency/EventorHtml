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

    <script src="country.js"></script>
	<link rel="stylesheet" href="signup.css">
	<!-- <link rel="stylesheet" href="app.css"> -->
	<link rel="stylesheet" href="style11.css">
    <?php 

    require_once('../functions/auth.php');
   signup(); 
     ?> 
    <style>

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
  <div class="container-fluid">
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




<li style="    margin-top: 13px; margin-right: 17px; font-weight: bold; color: #4f2684; padding-top: 29px;"><a href="EventorHtml/index.php">Back to <span class="glyphicon glyphicon-home"></span></a></li> 

    </ul>
  </div>
</nav>
<!-- header stops here -->
</header>


		<div class="container" style="width:500px; background-color: white;">
                
                <form class="form-horizontal" role="form" method="POST" action="">

                    <h2 style="margin-right: auto; marign-left: auto; font-weight: bold; color: #4f2684;">SIGNUP</h2>

<div>
  <?php 

  if(!empty($_SESSION['message'])){

    echo $_SESSION['message']; 
  }  
?>
</div>
<?php unset($_SESSION['message']); ?>



                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Name<span class="fa fa-asterisk text-danger"> *</span></h4> 
                        <div class="col-sm-6">
                            <input type="text" id="firstName" name="first_name" placeholder="First Name" class="form-control" autofocus>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="last_name" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                        </div>
                    </div>
                                        
                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Email<span class="fa fa-asterisk text-danger"> *</span></h4>
                        <div class="col-sm-12">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <h4 style="padding-left: 15px;">Password<span class="fa fa-asterisk text-danger"> *</span></h4>
                        <div class="col-sm-12">
                            <input type="password" id="password" placeholder="Password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <h4 style="padding-left: 15px;">Comfirm Password<span class="fa fa-asterisk text-danger"> *</span></h4>
                        <div class="col-sm-12">
                            <input type="password" id="password" placeholder="Password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <h4 style="padding-left: 15px;">Date Of Birth <span class="fa fa-asterisk text-danger"> *</span></h4>
                        <div class="col-sm-12">
                            <input type="text" id="departing" name="dob" class="form-control" placeholder="Enter Date of Birth here" style="padding:2px">
                            <script>
                                $(document).ready(function() {
                                $("#departing").datepicker();
                                $("#returning").datepicker();
                                $("button").click(function() {
                                    var selected = $("#dropdown option:selected").text();
                                    var departing = $("#departing").val();
                                    var returning = $("#returning").val();
                                    // if (departing === "" || returning === "") {
                                    //     alert("Please select Date of Birth");
                                    // } else {
                                    //     confirm("Date selected");
                                    // }
                                });
                            });
                            </script>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Gender<span class="fa fa-asterisk text-danger"> *</span></h4>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" id="femaleRadio" name="gender" value="Female">Female
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" id="maleRadio" value="Male" name="gender">Male
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.form-group -->

                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Phone Number<span class="fa fa-asterisk text-danger"> *</span></h4>
                        <div class="col-sm-12">
                            <input id="phoneNumber" placeholder="Phone Number" name="phoneNumber" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <h4 style="padding-left: 15px;">Address<span class="fa fa-asterisk text-danger"> *</span></h4>
                            <!--div class="col-sm-6">
                                <input type="orgAddress" id="phoneNumber" placeholder="Phone Number" name="phoneNumber" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <input type="orgAddress" id="phoneNumber" placeholder="Phone Number" name="phoneNumber" class="form-control">
                            </div-->
                            <div class="col-sm-12" style="padding-top: 10px;">
                                    <input type="orgAddress" id="Address" placeholder="Address" name="Address" class="form-control">
                            </div>
                        </div>

                        
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" id="address 2" name="address 2" placeholder="Address 2" class="form-control">
                        </div>
                    </div>

                    <div class="input-group" style="margin-bottom: 15px;">
   <span class="input-group-addon">@</span>

   <input  type="text" class="form-control" name="twitter" placeholder="Twitter handle">
 </div>

 <div class="input-group" style="margin-bottom: 15px;">
   <span class="input-group-addon">@</span>
   <input  type="text" class="form-control" name="instagram" placeholder="Instagram handle">

 </div>

 <div class="input-group" style="margin-bottom: 15px;">
   <span class="input-group-addon">Facebook.com/</span>
   <input type="text" class="form-control" name="facebook" placeholder="Facebook username">
 </div>
                                        <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                        </div>
    </form>

</div>
                        </div>
    <!-- footer goes here -->
<footer style="background-color: #4f2684; border: 3px solid #e7e7e7; padding: 10px; height: 50px; margin-top: 10px;">
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