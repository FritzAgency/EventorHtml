<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="signup.css">
	<link rel="stylesheet" href="app.css">
	<link rel="stylesheet" href="style11.css">
    <?php 

    require_once('../auth/signuplogin.php');

     ?> 

</head>
<body>
		<div class="container" style="width:500px;">
                <form class="form-horizontal" role="form" method="POST" action="">


                    <!--h2>Signup Form</h2-->
                  <div>   <?php if(isset($check_mail)){echo $check_mail;}?> </div>

                   <div>   <?php if(isset($check_fn)){echo $check_fn;}?> </div>

                    <div>   <?php if(isset($check_pass)){echo $check_pass;}?> </div>

                    <div>   <?php if(isset($success)){echo $success;}?> </div>



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
                            <h4 style="padding-left: 15px;">Date Of Birth <span class="fa fa-asterisk text-danger"> *</span></h4>
                        <div class="col-sm-12">
                            <input type="date" id="birthDate" name="dob" class="form-control" style="padding:2px">
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
                            <input type="Number" id="phoneNumber" placeholder="Phone Number" name="phoneNumber" class="form-control">
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
</body>
</html>