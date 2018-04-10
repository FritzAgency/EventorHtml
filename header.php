<!DOCTYPE html>
<html>
<head>
	<title></title>


<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700,900');

.text {
  color: white;
  font-size: 14px;
  position: absolute;
  top: 8%;
  left: 14%;
  transform: translate(-10%, -8%);
  -ms-transform: translate(-10%, -8%);
  text-align: left;
}


.menu{
    font-size: 13px;
}

.menu1{
    font-size:12px;
}

.doe{
    height: 40px; 
    width: 104%; 
    margin-top: 6px; 
    background-color: rgba(79, 38, 132, 0.2);
    padding: 6px; 
    margin-left: auto; 
    margin-right: auto; 
    border: 2px solid #ffffff;
}

  
#xx a:link{
	color: yellow;
}
  


</style>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>
<body>


<!--Main Navigation-->
<header>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container shift">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="../">
            <div style="width: 150px;"><img src="img/logo2.png" alt="" class="img-fluid"></div>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-top: 14px;">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                    <a class="nav-link waves-effect menu1" href="#">How It Works
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect menu1" id="xx" href="#" >Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect menu1" href="../event/vendor.php">Vendors</a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link waves-effect menu1" href="../dash/index.html" >Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link waves-effect menu1" href="#">About us</a>
                </li>
               
            </ul>


            

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
            
                <li class="nav-item">
                    <a href="event/create.php" class="nav-link waves-effect menu" style="color:#4f2684;">
                        <i class="fa fa-login"></i>Create Event
                    </a>
                </li>
                <li class="nav-item" style="margin-right: 60px;" >
                    <a href="#" class="nav-link waves-effect menu" style="color:#4f2684;">
                        <i class="fa fa-login"></i>Sell Products
                    </a>
                </li>
                
                <li class="nav-item menu">
<?php if ((!isset($_COOKIE['first_name']))){
echo 
'<a href="auth/login.php" class="nav-link waves-effect" style="color: #4f2684;">
<i class="fa fa-login"></i>Login</a>';      
}
?>

                </li>


                <li class="nav-item menu">
                   
<?php if ((!isset($_COOKIE['email']))){
echo'<a href="auth/signup.php" class="nav-link  rounded waves-effect" style="color: #4f2684;"><i class="fa fa-login"></i>Signup</a>
'; 
}
?>

</li>
<!-- drop down for dashboard and logout -->
<!-- drop down for dashboard and logout ends here -->
</ul>


<?php 
if((isset($_COOKIE['first_name']))){
//link to the dashboard and logout dashboard
echo  $_COOKIE['first_name'].'<li class="nav-item dropdown" style="
list-style-type: none;">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="event/dashboard.php">Dashboard</a>
<a class="dropdown-item" href="auth/logout.php">Logout</a>
</div>
</li>'; 
}
?>





        </div>

    </div>
</nav>
<!-- Navbar -->

</header>
<!--Main Navigation-->




</body>
</html>

