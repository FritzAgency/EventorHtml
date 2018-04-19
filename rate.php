<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Fritz Event rating</title>

<link rel="stylesheet" type="text/css" href="5star.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>



<?php 



require_once('Database/conn.php');


if (isset($_POST['submit'])){
  
$email = $_GET['email']; 

$comment = $_POST['comment']; 

$rating =  $_GET['rating'];  


  $query = "INSERT into `review` (name, comment, rating) VALUES ('$email', '$comment', '$rating' )"; 

 $result = mysqli_query($con, $query);

if ($result){
  

          header("Location: succ.php");
}

else{
  
  echo 'Something went wrong'; 

}

}



?>

<body>
  <div class="container">

<div class="row">
  
  <div class="col-md-6">
    
   <h2>Event rating system for fritz</h2>

  </div>

</div>    

<div class="row">
<form method="POST">


  <!--div class="col-md-6">
    <input type="name"  class="form-control"  placeholder="name" name="name"> 
  </div-->
</div>





<!--div class="row">
      
      <div class="col-md-6">

      <ul class="rate-area" style="margin-left: -40px">


        
      <input type="radio" id="5-star" name="rating" value="5" /><label for="5-star" title="Amazing">5 stars</label>
      <input type="radio" id="4-star" name="rating" value="4" /><label for="4-star" title="Good">4 stars</label>
      <input type="radio" id="3-star" name="rating" value="3" /><label for="3-star" title="Average">3 stars</label>
      <input type="radio" id="2-star" name="rating" value="2" /><label for="2-star" title="Not Good">2 stars</label>
      <input type="radio" id="1-star" name="rating" value="1" /><label for="1-star" title="Bad">1 star</label>
      
  </ul>
</div>

  </div-->  
  


<div class="row" style="margin-top: 20px">
  
  <div class="col-md-6">
     <textarea class="form-control"  rows="3" name="comment" placeholder="Additional comment"></textarea>

  </div>


</div>


<div class="row">

<div class="col-md-2" style="margin-top: 30px">
  
  <input type="submit" name="submit" class="btn btn-success" value="Submit rating">

</div>

  

</div>




  </div>
    </form>
</body>

</html>
