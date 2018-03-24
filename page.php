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