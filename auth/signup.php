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
    <script src="country.js"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">

	<link rel="stylesheet" href="signup.css">
	<!-- <link rel="stylesheet" href="app.css"> -->
	<link rel="stylesheet" href="style11.css">
    <?php 

    require_once('../functions/auth.php');
   signup(); 
     ?> 
    

</head>
<body>
		<div class="container" style="width:500px;">
                
                <form class="form-horizontal" role="form" method="POST" action="">

                    <h2 style="margin-right: auto; marign-left: auto; font-weight: bold; color: #4f2684; margin-left: 6em;">Signup</h2>

<div>
  <?php 

  if(!empty($_SESSION['message'])){

    echo $_SESSION['message']; 
  }  
?>
</div>
<?php unset($_SESSION['message']); ?>



                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Name<span style="color:red;"> *</span></h4> 
                        <div class="col-sm-6">
                            <input type="text" id="firstName" name="first_name" placeholder="First Name" class="form-control" autofocus>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="last_name" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                        </div>
                    </div>
                                        
                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Email<span style="color:red;"> *</span></h4>
                        <div class="col-sm-12">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <h4 style="padding-left: 15px;">Password<span style="color:red;"> *</span></h4>
                        <div class="col-sm-12">
                            <input type="password" id="password" placeholder="Password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <h4 style="padding-left: 15px;">Comfirm Password<span style="color:red;"> *</span></h4>
                        <div class="col-sm-12">
                            <input type="password" id="password" placeholder="Password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="date-picker-example" style="padding-left: 15px;">Date Of Birth <span style="color:red;"> *</span></label>

                        <div class="col-sm-12">
                            <input type="text" id="birthDate" name="dob" class="form-control" style="padding:2px" id="date-picker-example" class="form-control datepicker">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Gender<span style="color:red;"> *</span></h4>
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
                        <h4 style="padding-left: 15px;">Phone Number<span style="color:red;"> *</span></h4>
                        <div class="col-sm-12">
                            <input id="phoneNumber" placeholder="Phone Number" name="phoneNumber" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <h4 style="padding-left: 15px;">Address<span style="color:red;"> *</span></h4>
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

                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Twitter Account</h4>
                        <div class="col-sm-12">
                            <input type="twitter" id="twitterr" name="twitter" placeholder="Twitter Handle" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <h4 style="padding-left: 15px;">Instagram Account</h4>
                            <div class="col-sm-12">
                                <input type="instagram" id="intagram" name="instagram" placeholder="Instagram Page" class="form-control">
                            </div>
                        </div>

                    <div class="form-group">
                        <h4 style="padding-left: 15px;">Facebook Account</h4>
                        <div class="col-sm-12">
                            <input type="facebook" id="facebook" name="facebook" placeholder="facebook Page" class="form-control">
                        </div>
                    </div>
                                        <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                        </div>
    </form>

// Data Picker Initialization
$('.datepicker').pickadate();
    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
</body>
</html>