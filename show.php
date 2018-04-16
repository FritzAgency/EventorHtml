




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rating Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Rating Results.</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Comment</th>
        <th>Rating</th>
      </tr>
    </thead>
    <tbody>




<?php



require_once('Database/conn.php');



$query = "SELECT * FROM `review`"; 


$result = mysqli_query($con,$query) or die(mysqli_error());

$row = mysqli_num_rows($result) or die(mysqli_error());


while( $row = mysqli_fetch_array($result) ){

echo  '<tr>'; 


echo 
'<td>'
.$row['name']. '</td>';  


echo '<td>'.
$row['comment']. '</td>' ; 

echo  '<td>'. $row['rating'] . ' stars'. '</td>'; 

}


echo '</tr>'; 

?> 

     
     

         </tbody>
  </table>
</div>

</body>
</html>
