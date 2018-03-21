<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Eventor - Forgotpassword.</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="signup.css">
</head>

<?php require_once('../auth/fpclass.php'); ?> 
<body>
<div class="container" style="margin-top: 100px;">

<div> 
    <?php if(isset($message)){

        echo $message; 

} 
?>
</div>
        <form class="form-horizontal" role="form" action="" method="POST">

             <h2 style="margin-right: auto; marign-left: auto; font-weight: bold; color: #4f2684; margin-left: 6em;"></h2>

             <div></div>

            <div class="form-group">
                <h4 style="padding-left: 15px; color: #4f2684;">Email</h4>
                <div class="col-sm-12" style="border-color: #4f2684;">
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email">
                </div>
            </div>



            <div class="form-group">
                <div class="col-sm-12" style="background-color: #4f2684">
                    <button type="submit" class="btn btn-primary btn-block" class="new" name="submit" style="font-weight: bold; background-color: #4f2684; border: #4f2684;">Recover password</button>
                </div>
</form>
</div>
</body>
</html>