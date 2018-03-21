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
    require_once('../auth/loginclass.php');
 ?>

<body>
<div class="container" style="margin-top: 100px;">

        <form class="form-horizontal" role="form" action="" method="POST">

             <h2 style="margin-right: auto; marign-left: auto; font-weight: bold; color: #4f2684; margin-left: 6em;">Login</h2>

             <div><?php if((isset($success))) {
                echo $success; 
             } ?></div>

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
</body>
</html>