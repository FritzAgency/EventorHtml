
<?php
session_start(); 
?>


<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Eventor: Dashboard</title>

	<!-- BOOTSTRAP STYLES-->
    <link href="bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: white;">
            <div class="navbar-header" style="background-color: white;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="assets/img/EventorLogo.png" alt="" class="img-responsive"></a> 
            </div>

  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="../auth/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>

  <!--div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"><a href="#" class="btn btn-danger square-btn-adjust" style="border: 2px solid gray; color: white; background-color: #4f2684; padding: 8px 20px; border-radius: 40px; font-size: 14px; font-weight: bold;">logout</a> </div-->

        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="top: 60px;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu" style="margin-top: 15px;">
				
                    <li>
                        <a class="active-menu"  href="#"><i class="fa fa-home fa-1x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="#"><i class="fa fa-calendar fa-1x"></i> Events</a>
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-ticket fa-1x"></i> Tickets</a>
                    </li>
						   <li  >
                        <a   href="#"><i class="fa fa-cart fa-1x"></i> Vendors</a>
                    </li>	
                      <li  >
                        <a  href="#"><i class="fa fa-gear fa-1x"></i> Settings</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                     <!--h2>Dashboard</h2-->

                     <h2>
                        <?php 

                        if(!isset($_SESSION['first_name'])) {
                      header("Location: ../index.php");
                      //redirect to the homepage
                        } 
                        echo 'Welcome,'. $_SESSION['first_name'];//display user's first name.  
                        ?>

                     </h2>

                     <!--h2 style="color: #4f2684; margin-top: -97px; margin-bottom: 61px;">Dashboard</h2-->

                     <!--h2 style="font-weight: bold; color: #4f2684; margin-bottom: 33px;"></h2-->
                     <!--h2 style="color: grey; margin-top: -80px; margin-bottom: 61px; margin-left: 10px;">Dashboard</h2-->

                     <!--h2 style="font-weight: bold; color: #4f2684; margin-bottom: 20px; margin-left: 10px;">
                     <h2 style="font-weight: bold; color: #4f2684; margin-bottom: 20px; margin-left: 10px;"><strong>Creator's Name</strong></h2-->


                     <!-- div for contain tickets, events and sales volume content starts here -->
                    <div class="row">
                        <div class="col-sm-4">
                        <div class="panel panel-back noti-box">
                  <div class="text-box" style="text-align: center; font-weight: bold;">
                    <p class="main-text"><?php

require_once('../Database/conn.php');

$id = $_SESSION['id']; 

$query =  "SELECT * FROM `event` JOIN users ON users.id = event.creator_id WHERE `creator_id` = $id"; 

$result = mysqli_query($con,$query); 


$row = mysqli_num_rows($result); 
//or die(mysqli_error());

echo $row; 

?>
</p>
                    <p class="text-muted">Events</p>
                </div>
             </div>


             <div class="panel panel-back noti-box">
                  <div class="text-box" style="text-align: center; font-weight: bold;">
                    <a href="#"><p class="main-text" style="margin-top: 21px">Add Service</p></a>
                </div>
             </div>

                <div class="panel panel-back noti-box">
                  <div class="text-box" style="text-align: center; font-weight: bold;">
                    <a href="#"><p class="main-text" style="margin-top: 21px">Add Products</p></a>
                </div>
             </div>

                        </div>
                        <div class="col-sm-8">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 style="font-weight: bold; font-size: 23px; color: grey;">Event Visits</h2>
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                        </div>
                    </div>

                     <!-- div for contain tickets, events and sales volume content end here -->
                
                     <!-- event details goes in here -->
                <div class="row">
                    <div class="col-sm-4 panel panel-default" style="height: 540px; padding-left: 0px; padding-right: 0px; width: 31%; margin-left: 10px; margin-right: 27px;">
                        <div class="panel panel-heading" style="margin-bottom: 6px;">
                            <h2>Events</h2>
                        </div>
                        <div class="panel panel-body" style="padding: 2px; margin-bottom: 10px;">
                            <div class="row">

                                <div class="col-sm-4">
                                    <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!--p>First Event</p-->
                                    <?php

require_once('../Database/conn.php');

$id = $_SESSION['id']; 

$query =  "SELECT * FROM `event` JOIN users ON users.id = event.creator_id WHERE `creator_id` = $id"; 

 $result = mysqli_query($con,$query); 


$row = mysqli_num_rows($result); 
//or die(mysqli_error($con));

/*if($row<1 ){
    echo '0'; 
}*/

//echo $row; 


while($row = mysqli_fetch_array($result)){

    //echo '<div><p><a href="$row['event_url']">'. $row['event_title']. '</div></p></a>'; 

    $event_url = $row['event_url']; 

   echo  "<div><p style='text-justify'><a href='/eventorhtml/newGenerated.php?event_url=$event_url'>". $row['event_title']. "</div></p></a>";
}


?>

                                    <!--span class="glyphicon glyphicon-time"></span-->
                                </div>
                                <!-- buttons at the end of the row not important -->
                                <div class="col-sm-4">
                                    <div>
                                <div class="col-sm-2" style="margin-left: auto; margin-right: auto; padding: 5px;">
                                    <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background: #4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                        <p>F</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <p style="font-size: 14px; line-height: 21px; padding-bottom: 20px; margin-top: 3px; #bf62f0;"><strong style="color: black;">First Event </strong><br/> <span class="glyphicon glyphicon-time" style="color: #bf62f0;"> 6 days</span></p>
                                </div>
                                <!-- buttons at the end of the row not important -->
                                <div class="col-sm-2" style="position: relative; left: 80px;">

                                    <div>
                                    <div style="color: black;">

                                        o
                                    </div>
                                    <div style="color: black;">
                                        o
                                    </div>
                                    <div style="color: black;">
                                        o
                                    </div-->
                                </div>
                                <!-- buttons at the end of the row not important -->
                            </div>

                         <div class="row">

                                <div class="col-sm-4">
                                    <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                        <p>S</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <p>Second Event</p>
                                    <span class="glyphicon glyphicon-time"> 2 days</span>
                                </div>
                                <!-- buttons at the end of the row not important -->
                                <div class="col-sm-4">

                                <div class="col-sm-2" style="margin-left: auto; margin-right: auto; padding: 5px;">
                                    <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background: #4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                        <p>S</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <p style="font-size: 14px; line-height: 21px; padding-bottom: 20px; margin-top: 3px; #bf62f0;"><strong style="color: black;">Second Event </strong><br/> <span class="glyphicon glyphicon-time" style="color: #bf62f0;"> 2 days</span></p>
                                </div>
                                <!-- buttons at the end of the row not important -->
                                <div class="col-sm-1" style="position: relative; left: 80px;">

                                    <div>
                                    <div style="color: black;">

                                        o
                                    </div>
                                    <div style="color: black;">
                                        o
                                    </div>
                                    <div style="color: black;">
                                        o
                                    </div>
                                </div-->
                                <!-- buttons at the end of the row not important -->
                            </div>
                    <!-- stops here -->
                    <!-- second column with the number of vendors and information -->
                    
                    <div class="col-sm-4 panel panel-default" style="height: 559px; padding-left: 0px; padding-right: 0px; width: 31%;">
                    <div class="panel-heading" style="margin-bottom: 6px;">    
                    <div class="row">
                            <div class="col-sm-10">
                                <h2>Vendors</h2>
                            </div>
                            <div class="col-sm-2">
                                <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background: #4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                        <h2 style="color: white">2</h2>
                                    </div>
                            </div>
                        </div>
                        </div>
                        <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-2" style="padding-left: 0px;">
                                <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background: #4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10" style="padding-left: 0px; padding-right:0px;">
                            <p style="font-size: 12px; line-height: 21px; padding-bottom: 36px; margin-top: -5px;"><strong style="#8f2dc2">Ting Nigeria Limited </strong><br/> We imense to cater for party needs ()</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2" style="padding-left: 0px;">
                                <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background: #4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10" style="padding-left: 0px; padding-right:0px;">
                            <p style="font-size: 12px; line-height: 21px; padding-bottom: 36px; margin-top: -5px;"><strong style="#8f2dc2">Ting Nigeria Limited </strong><br/> We imense to cater for party needs ()</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2" style="padding-left: 0px;">
                                <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background: #4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10" style="padding-left: 0px; padding-right:0px;">
                            <p style="font-size: 12px; line-height: 21px; padding-bottom: 36px; margin-top: -5px;"><strong style="#8f2dc2">Ting Nigeria Limited </strong><br/> We imense to cater for party needs ()</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2" style="padding-left: 0px;">
                                <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background: #4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10" style="padding-left: 0px; padding-right:0px;">
                            <p style="font-size: 12px; line-height: 21px; padding-bottom: 36px; margin-top: -5px;"><strong style="#8f2dc2">Ting Nigeria Limited </strong><br/> We imense to cater for party needs ()</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- vendors column ends here -->
                    <!-- second column with the number of ticket and information -->
                    <div class="col-sm-4 panel panel-default" style="height: 559px; padding-left: 0px; padding-right: 0px; width: 31%; margin-left: 27px;">
                    <div class="panel-heading" style="margin-bottom: 6px;">    
                    <div class="row">
                        <div class="col-sm-10">
                                <h2>Products/Services</h2>
                            </div>
                            <div class="col-sm-2">
                                <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background: #4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                        <h2 style="color: white">2</h2>
                                    </div>
                            </div>
                            </div>
                        </div>
                        <div class="panel-body" style="padding: 2px; margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background: #4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p style="font-size: 12px; line-height: 21px; padding-bottom: 36px; margin-top: -5px;">Muhammed bought a ticket to Idanra hills<br/> <span class="glyphicon glyphicon-time" style="color: #bf62f0;"> Just now</span></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background: #4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p style="font-size: 12px; line-height: 21px; padding-bottom: 36px; margin-top: -5px;"><strong>Lawal Hard core bought a ticket to the zoo </strong><br/> <span class="glyphicon glyphicon-time" style="color: #bf62f0;"> 2 days</span></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background: #4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p style="font-size: 12px; line-height: 21px; padding-bottom: 36px; margin-top: -5px;">More tickets sold <br/> <span class="glyphicon glyphicon-time" style="color: #bf62f0;"> 7 days</span></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 38px; height: 40px; border: 2px solid #4f2684; border-radius: 50px; background:#4f2684; color: #ffffff !important; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p style="font-size: 12px; line-height: 21px; padding-bottom: 36px; margin-top: -5px;">And more tickets bought again<br/> <span class="glyphicon glyphicon-time" style="color: #bf62f0;"> 9 days</span></p>
                            </div>
                    </div>
                </div>
                    <!-- ticket column ends here -->
                    </div>
                </div>
                     

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
 <!-- footer goes here -->
 <footer style="background-color: #4f2684; border: 3px solid #e7e7e7; padding: 10px; height: 70px; margin-top: 10px;">
  <div class="row">
    <div class="col-sm-2">
      <img src="img/footer.png" alt="" class="img-responsive" style="margin-top: 2px;">
    </div>
    <div class="col-sm-8">
      <div class="row" style="width: 40%; margin-left: auto; margin-right: auto;">
        <div class="col-sm-5">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff;">How it works</p></a>
        </div>
        <div class="col-sm-4">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff;">About us</p></a>
        </div>
        <div class="col-sm-3">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff;">Contact</p></a>
        </div>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="row">
        <div class="col-sm-4">
          <a href=""><img src="img/index.png" alt="" style="width: 30px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index1.png" alt="" style="width: 30px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index11.png" alt="" style="width: 30px; height-max: 100%; margin-top: 10px;"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
