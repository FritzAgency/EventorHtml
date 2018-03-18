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
	<link rel="stylesheet" href="signup.css">
	<link rel="stylesheet" href="app.css">
	<link rel="stylesheet" href="style11.css">
</head>
<?php 
    require_once('../auth/loginclass.php');
 ?>

<body>
        <form class="form-horizontal" role="form" action="" method="POST">

             <h2>Login</h2>

             <div><?php if((isset($success))) {
                echo $success; 
             } ?></div>

            <div class="form-group">
                <h4 style="padding-left: 15px;">Email</h4>
                <div class="col-sm-12">
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email">
                </div>
            </div>

            <div class="form-group">
                    <h4 style="padding-left: 15px;">Password</h4>
                <div class="col-sm-12">
                    <input type="password" id="password" placeholder="Password" class="form-control" name="password">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
                </div>
</form>
</body>
</html>