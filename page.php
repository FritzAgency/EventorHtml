<?php

$url = $_GET['url']; 


require_once('Database/conn.php');


  $query = "SELECT * FROM `event` WHERE event_url='$url'"; 

$result = mysqli_query($con,$query) or die(mysqli_error());

$row = mysqli_num_rows($result);


while( $row = mysqli_fetch_array($result) ){

$event_description =  $row['event_description']; 

$Address = $row['Address']; 

$event_title = $row['event_title']; 

$event_flier = $row['event_flier'];  

$ticket_price = $row['ticket_price']; 

$ticket_qty = $row['ticket_qty'];

$status = $row['status'];     

}
?>

<html>
<head>
  <meta charset="utf-8">
  <title>eventor</title>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap.vertical-tabs.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container" style="background-color:white; margin:auot;">
    <div class="row">
      <div  class="col-sm-7" style="margin-bottom: -43px;">
        <div class="col-xs-9">
          <!-- Tab panes -->
          <div class="tab-content" style="background-color:lightgrey; width: 645px; height: 609px;">
<div class="tab-pane active" id="home-vr">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
    
          <div class="item active">
              <img src="/eventorhtml/public/images/<?php echo 
$event_flier;?>" alt="Los Angeles" style="width:100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Celine Dion</h3>
              <!--p>LA is always so much fun!</p-->
            </div>
          </div>
    
          <div class="item">
              <img src="img/new.jpg" alt="Los Angeles" style="width:100%; height: 100%;">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>
        
          <div class="item">
            <img src="img/new.jpg" alt="Los Angeles" style="width:100%; height: 100%;">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>
      
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
            <div class="tab-pane" id="profile-vr">
              <div style="width: 645px; height: 609px;">
                <img src="img/schedule.png" alt="" style="width:645px; height:609px;">
              </div>
            </div>
            <div class="tab-pane" id="messages-vr">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="well">
                            <h4 class="text-danger"><a href="#"><span class="label label-danger pull-right">- 9%</span> New Users </a></h4>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="well">
                            <h4 class="text-success"><a href=""><span class="label label-success pull-right">+ 3%</span> Returning </a></h4>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="well">
                            <h4 class="text-primary"><a href=""><span class="label label-primary pull-right">201</span> Sales </a></h4>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="well">
                            <h4 class="text-success"><a href=""><span class="label label-success pull-right">+ 24%</span> Pageviews </a></h4>
                          </div>
                        </div>
                      </div><!--/row-->    
                    </div><!--/col-12-->
                  </div><!--/row-->

                  <div class="row">
                      <div class="col-sm-12">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="well">
                              <h4 class="text-danger"><a href="#"><span class="label label-danger pull-right">- 9%</span> New Users </a></h4>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="well">
                              <h4 class="text-success"><a href=""><span class="label label-success pull-right">+ 3%</span> Returning </a></h4>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="well">
                              <h4 class="text-primary"><a href=""><span class="label label-primary pull-right">201</span> Sales </a></h4>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="well">
                              <h4 class="text-success"><a href=""><span class="label label-success pull-right">+ 24%</span> Pageviews </a></h4>
                            </div>
                          </div>
                        </div><!--/row-->    
                      </div><!--/col-12-->
                    </div><!--/row-->

                    <div class="row">
                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="well">
                                <h4 class="text-danger"><a href="#"><span class="label label-danger pull-right">- 9%</span> New Users </a></h4>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="well">
                                <h4 class="text-success"><a href=""><span class="label label-success pull-right">+ 3%</span> Returning </a></h4>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="well">
                                <h4 class="text-primary"><a href=""><span class="label label-primary pull-right">201</span> Sales </a></h4>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="well">
                                <h4 class="text-success"><a href=""><span class="label label-success pull-right">+ 24%</span> Pageviews </a></h4>
                              </div>
                            </div>
                          </div><!--/row-->    
                        </div><!--/col-12-->
                      </div><!--/row-->

                      <div class="row">
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="well">
                                  <h4 class="text-danger"><a href="#"><span class="label label-danger pull-right">- 9%</span> New Users </a></h4>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="well">
                                  <h4 class="text-success"><a href=""><span class="label label-success pull-right">+ 3%</span> Returning </a></h4>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="well">
                                  <h4 class="text-primary"><a href=""><span class="label label-primary pull-right">201</span> Sales </a></h4>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="well">
                                  <h4 class="text-success"><a href=""><span class="label label-success pull-right">+ 24%</span> Pageviews </a></h4>
                                </div>
                              </div>
                            </div><!--/row-->    
                          </div><!--/col-12-->
                        </div><!--/row-->

                        <div class="row">
                            <div class="col-sm-12">
                              <div class="row">
                                <div class="col-md-3">
                                  <div class="well">
                                    <h4 class="text-danger"><a href="#"><span class="label label-danger pull-right">- 9%</span> New Users </a></h4>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="well">
                                    <h4 class="text-success"><a href=""><span class="label label-success pull-right">+ 3%</span> Returning </a></h4>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="well">
                                    <h4 class="text-primary"><a href=""><span class="label label-primary pull-right">201</span> Sales </a></h4>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="well">
                                    <h4 class="text-success"><a href=""><span class="label label-success pull-right">+ 24%</span> Pageviews </a></h4>
                                  </div>
                                </div>
                              </div><!--/row-->    
                            </div><!--/col-12-->
                          </div><!--/row-->

                      
            </div>
          </div>
        </div>

        <div class="col-xs-3"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-right sideways">
            <li class="active"><a href="#home-vr" data-toggle="tab">Media</a></li>
            <li><a href="#profile-vr" data-toggle="tab">Schedule</a></li>
            <li><a href="#messages-vr" data-toggle="tab">Activities</a></li>

          </ul>
        </div>
      </div>
  <div class="col-sm-5">
    <div class="row">
    <h2 style="font-weight: bold;"><?php 

    if(isset($event_title)){
     echo $event_title; 
    }

    ?></h2>
    <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home" style="font-size: 12px; font-weight: bold; color:#4f2684;">ABOUT</a></li>
            <li><a data-toggle="tab" href="#menu1" style="font-size: 12px; font-weight: bold; color:#4f2684;">SPONSORS</a></li>
            <li><a data-toggle="tab" href="#menu2" style="font-size: 12px; font-weight: bold; color:#4f2684;">LOCATION</a></li>
            <li><a data-toggle="tab" href="#menu3"style="font-size: 12px; font-weight: bold; color:#4f2684;">VENDORS</a></li>
          </ul>
        
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active" style="height: 308px;">
              
             <p style="padding:10px; text-align:justify; font: grey;">
<?php 

if(isset($event_description)){

echo $event_description; 

}
?> 
                  </p>
            </div>
            <div id="menu1" class="tab-pane fade" style="height: 308px;">
              <h3>SPONSORS</h3>
              <p>Set Boxes for sponsors when added at the registration form in a carousel</p>
            </div>
            <div id="menu2" class="tab-pane fade" style="height: 308px;">
              <h3>LOCATION</h3>
              <p><?php 

              if (isset($Address)){
              	echo $Address; 
              }

              ?></p>
            </div>
            <div id="menu3" class="tab-pane fade" style="height: 308px;">
              <h3>VENDORS</h3>
              <p>Set boxes for vendors that displays vendors in a carousel</p>
            </div>
          </div>
    </div>
    <div class="row container" style="width: 60%; margin: auto;">
      <div class="col-sm-4">
        <p style="font-size: 13px; color:#4f2684;" >Ticket Price <br> 
        <?php if(isset($ticket_price)){
            	echo '&#8358;'. $ticket_price; 
            }  ?></p>
      </div>
      <div class="col-sm-4">
          <p style="font-size: 13px; color:#4f2684;">Ticket Quantity <br> <?php if(isset($ticket_qty)){
            	echo $ticket_qty; 
            }  ?> </p>
      </div>
      <div class="col-sm-4">
          <p style="font-size: 13px; color:#4f2684;">Event type <br>  <?php if(isset($status)){
            	echo $status; 
            }  ?>   </p>
      </div>
      <div class="row container" style="width: 70%;">
          <div class="col-sm-4">
            <p style="margin-left:20px; font-weight: bold; color:#4f2684;">   </p>
          </div>
          <div class="col-sm-4">
              <p style="margin-left:50px; font-weight: bold; color:#4f2684;">      </p>
          </div>
          <div class="col-sm-4">
              <p style="margin-left:77px; font-weight:bold; color:#4f2684;">    </p>
          </div>
         </div> <!-- bottom button for register and vendor -->
        <div class="row container" style="margin-left: -98px; margin-top: 22px;">
          <div class="col-md-3">
            <a href="vendor.html" style="color:#4f2684;"><button>BECOME A VENDOR</button></a>
          </div>
          <div class="col-md-3">
            <a href="signup.html" style="color:#4f2684;"><button>REGISTER</button></a>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
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
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</html>