<?php
 


require_once('Database/conn.php');


//$url = $_GET['url'];

if(isset($_GET['event_url'])){

$event_url = $_GET['event_url'];

$query = "SELECT * FROM `event` WHERE event_url='$event_url'"; 

$result = mysqli_query($con,$query) or die(mysqli_error());

$row = mysqli_num_rows($result) or die(mysqli_error());


while( $row = mysqli_fetch_array($result) ){

$event_description =  $row['event_description']; 
$Address = $row['Address']; 
$event_title = $row['event_title']; 
$event_flier = $row['event_flier'];  
$event_flier1 = $row['event_flier1'];  
$event_flier2 = $row['event_flier2'];  
$ticket_price = $row['ticket_price']; 
$ticket_qty = $row['ticket_qty'];
$status = $row['status']; 
$sponsor_name = $row['sponsor_name']; 

$act_name = $row['act_name']; 
$act_loc = $row['act_loc']; 
$act_desc = $row['act_desc']; 
$act_date = $row['act_date']; 
$act_img = $row['act_img']; 



}

}
?>

<html>
<head>
  <meta charset="utf-8">
  <title>Eventor.com</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
  .eon{
    background-color: black;
    font-weight: bold;
    color: white;
  }

  .eon:hover{
    background-color: yellow;
    font-weight: bold;
    color: red;
  }
</style>
</head>


<body>


<div class="container">
  <h2>Modal Example</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register.</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
<<<<<<< HEAD
        
        <!-- Modal body -->
        <div class="modal-body">
         <p> Choose number of Ticket: </p>
          <div class="form-group">
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>

      </div>
  <div class="col-sm-5">
    <div class="row">
    <h2 style="font-weight: bold;"><?php 

    if(isset($event_title)){
     echo $event_title; 
    }

    ?></h2>
    <div class="container">
        <!-- Nav tabs -->
        <!-- <ul class="container nav nav-tabs" style="margin-left: 4px;">
            <li class="active"><a data-toggle="tab" href="#home" style="font-size: 12px; font-weight: bold; color:#4f2684;">ABOUT</a></li>
            <li><a data-toggle="tab" href="#menu1" style="font-size: 12px; font-weight: bold; color:#4f2684;">SPONSORS</a></li>
            <li><a data-toggle="tab" href="#menu2" style="font-size: 12px; font-weight: bold; color:#4f2684;">LOCATION</a></li>
            <li><a data-toggle="tab" href="#menu3"style="font-size: 12px; font-weight: bold; color:#4f2684;">VENDORS</a></li>
          </ul> -->
        
          <!-- <div class="tab-content">
            <div id="home" class="tab-pane fade in active" style="height: 397px;">
              
             <p style="padding:10px; text-align:justify; font: grey; margin-left: 6px;">
<?php 

if(isset($event_description)){

echo $event_description; 

}
?> This is the about section
                  </p>
            </div>
</div>

            <div id="menu1" class="tab-pane fade" style="height: 397px;">
              <h3 style="margin-left: 8px;">SPONSORS</h3>
              <p style="margin-left: 8px;"><?php 

              if (isset($sponsor_name)){
              	echo $sponsor_name; 
              }

              ?>
              This is the sponsor's section
              </p>
            </div>
            <div id="menu2" class="tab-pane fade" style="height: 397px;">
              <h3 margin-left: 8px;>LOCATION</h3>
              <p style="margin-left: 8px;"><?php 

              if (isset($Address)){
              	echo $Address;  
              }

              ?>
              this is the location section
              </p>
            </div>
            <div id="menu3" class="tab-pane fade" style="height: 397px;">
              <h3 style="margin-left: 8px;">VENDORS</h3>
              <p style="margin-left: 8px;">Set boxes for vendors that displays vendors in a carousel</p>
            </div>
          </div>
    </div> -->

<ul class="nav nav-tabs" style="margin-left: 4px;">
    <li class="active"><a data-toggle="tab" href="#home" style="font-size: 12px; font-weight: bold; color:#4f2684;">About</a></li>
    <li><a data-toggle="tab" href="#menu1" style="font-size: 12px; font-weight: bold; color:#4f2684;">Sponsors</a></li>
    <li><a data-toggle="tab" href="#menu2" style="font-size: 12px; font-weight: bold; color:#4f2684;">Location</a></li>
    <li><a data-toggle="tab" href="#menu3" style="font-size: 12px; font-weight: bold; color:#4f2684;">Vendors</a></li>
  </ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>About</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Sponsors</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Location</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Vendors</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

    <div class="row container" style="width: 100%; margin: auto;">
      <div class="col-sm-4" style="width:29%;">
        <p style="font-size: 13px; color:#4f2684;">TICKET PRICE <br> 
        <?php if(isset($ticket_price)){
            	echo '&#8358;'. $ticket_price; 
            }  ?></p>
      </div>
      <div class="col-sm-4" style="width:35%;">
          <p style="font-size: 13px; color:#4f2684;">TICKET QUANTITY <br> <?php if(isset($ticket_qty)){
            	echo $ticket_qty; 
            }  ?> </p>
      </div>
      <div class="col-sm-4" style="width:36%;">
          <p style="margin-left:20px; color:#4f2684;">EVENT TYPE <br>  <?php if(isset($status)){
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
        <div class="row container" style="margin-left: -15px; margin-top: 22px;">
          <div class="col-md-3" style="width: 21%;">
            <a href="vendor.html" style="color:#4f2684;"><button class="eon">BECOME A VENDOR</button></a>
          </div>
          <div class="col-md-3">
            <a href="signup.html" style="color:#4f2684;"><button style="background-color:#4f2684; color: white; font-weight: bold; border-radius: 10px; padding: 5px; width: 152px;">REGISTER</button></a>
          </div>
        </div>
    </div>
  </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">CHECKOUT</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
  
</body>

</html>