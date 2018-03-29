
<?php
session_start(); 
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eventor: Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="" alt="">Eventor Logo</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="../auth/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="top: 60px;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				
                    <li>
                        <a class="active-menu"  href="#"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="#"><i class="fa fa-ticket fa-2x"></i> Events</a>
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-calendar fa-2x"></i> Tickets</a>
                    </li>
						   <li  >
                        <a   href="#"><i class="fa fa-bar-chart-o fa-2x"></i> Vendors</a>
                    </li>	
                      <li  >
                        <a  href="#"><i class="fa fa-table fa-2x"></i> Settings</a>
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
                    <p class="main-text">23</p>
                    <p class="text-muted">Tickets sold</p>
                </div>
             </div>

                <div class="panel panel-back noti-box">
                  <div class="text-box" style="text-align: center; font-weight: bold;">
                    <p class="main-text">#69000</p>
                    <p class="text-muted">Sales Volume</p>
                </div>
             </div>

                        </div>
                        <div class="col-sm-8">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Bar Chart Example
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
                    <div class="col-sm-4">
                        <div>
                            <h2>Events</h2>
                        </div>
                        <div>
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
                                    <!--div>
                                        o
                                    </div>
                                    <div>
                                        o
                                    </div>
                                    <div>
                                        o
                                    </div-->
                                </div>
                                <!-- buttons at the end of the row not important -->
                            </div>
                        </div>

                         <div class="row">
                                <!--div class="col-sm-4">
                                    <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                        <p>S</p>
                                    </div>
                                </div-->
                                <!--div class="col-sm-4">
                                    <p>Second Event</p>
                                    <span class="glyphicon glyphicon-time"> 2 days</span>
                                </div-->
                                <!-- buttons at the end of the row not important -->
                                <!--div class="col-sm-4">
                                    <div>
                                        o
                                    </div>
                                    <div>
                                        o
                                    </div>
                                    <div>
                                        o
                                    </div>
                                </div-->
                                <!-- buttons at the end of the row not important -->
                            </div>
                        </div>
                    <!-- stops here -->
                    <!-- second column with the number of vendors and information -->
                    
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-10">
                                <p>Vendors</p>
                            </div>
                            <div class="col-sm-2">
                                <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                        <p>2</p>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p>vendors name comes here</p>
                                <p>vendors discription of products goes here</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p>vendors name comes here</p>
                                <p>vendors discription of products goes here</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p>vendors name comes here</p>
                                <p>vendors discription of products goes here</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p>vendors name comes here</p>
                            <p>vendors discription of products goes here</p>
                            </div>
                        </div>
                    </div>
                    <!-- vendors column ends here -->
                    <!-- second column with the number of ticket and information -->
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-10">
                                <p>Tickets</p>
                            </div>
                            <div class="col-sm-2">
                                <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                        <p>2</p>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p>vendors name comes here</p>
                                <p>vendors discription of products goes here</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p>vendors name comes here</p>
                                <p>vendors discription of products goes here</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p>vendors name comes here</p>
                                <p>vendors discription of products goes here</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div style="width: 50px; height: 50px; border: 2px solid black; border-radius: 50px; background: black; color: white; text-align: center; font-weight: bold;">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-10">
                            <p>vendors name comes here</p>
                            <p>vendors discription of products goes here</p>
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
