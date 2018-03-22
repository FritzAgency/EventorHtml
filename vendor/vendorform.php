<!DOCTYPE html>
<html lang="en">
<head>
<title>Create EVENT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/file-upload-with-preview/dist/file-upload-with-preview.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="style2.js"></script>
<!-- scripts ends here -->
<style>
  #change{
    background-color: #4f2684;
    color: white;
  }

  #change:hover{
    background-color: lightgrey;
    color: #4f2684;
  }
</style>

<?php 
session_start(); 

require_once('../event/createclass.php');

//if user not logged, redirect to the signup page 
if((!isset($_SESSION['email']))){
header("Location: ../auth/signup.php");
}
?> 
</head>
<body>
     <!-- header starts here -->
<nav class="navbar-sticky navbar navbar-default navbar-static-top" id="myTopnav" style="margin-bottom: 10px;" class="new">
  <div class="container-fluid">
    <div class="navbar-header" >
      <div>
      <h2 style="margin-right: auto; font-weight: bold; color: #4f2684; margin-left: 2em; margin-bottom: 20px; margin-top: 20px;">VENDOR REGISTRATION FORM</h2>
      <!-- <a class="navbar-brand" href="index.php"><img src="img/logo2.png" alt="" srcset="" class="img-responsive" style="margin-top: -7px;"></a> -->
      </div>
    </div>
    <ul class="nav navbar-nav navbar-right" class="topnav" id="myTopnav" style="margin-top: -43px;padding-bottom: 10px;">
    <li><a href="index.php" class="new" style="margin-top: 53px; font-size: 20px; font-weight: bold; border-radius: 5%;" id="change"> <span class="glyphicon glyphicon-arrow-left"> </span></a></li>
    <!--  <li><a href="#" class="new">EVENTS</a></li>
      <li><a href="#" class="new">SPECIAL DEALS</a></li>
      <li><a href="#" class="new">ABOUT US</a></li>
      <li><a href="#" class="new">CONTACT</a></li> -->
      <!-- <li><a href="auth/signup.php" class="new">SIGNUP</a></li> -->
      <!--li><a class="new"> | </a></li-->
      <!-- <li><a href="auth/login.php" class="new">LOGIN</a></li> -->
      <?php if ((isset($_SESSION['email']))){

echo 
''; 
}else{
echo'<li><a href="auth/signup.php" style="color:#4f2684;"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>'; 
}
?>

<?php if ((isset($_SESSION['email']))){

echo 
'
<li><a href="auth/logout.php" style="color:#4f2684;"><span class=""></span> Logout</a></li>
';      }else{
echo'
<li><a href="auth/login.php" style="color:#4f2684;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
'; 
}
?>



<li style="margin-top: 15px; margin-right: 17px; font-weight: bold; color: #4f2684;">  <?php 
if((isset($_SESSION['first_name']))){
echo 'Welcome, '. $_SESSION['first_name'];
}
?>

    </ul>
  </div>
</nav>
<!-- header stops here -->
<div class="container" style="background-color: white; width: 600px; padding: 20px;">
<!-- rounded number and text     -->
<div class="row">
<div class="col-sm-1">
<div class="numberCircle">1</div>
</div>
<div class="col-sm-11" style="padding-left: 8px;">
<h3 style="margin-top: 0px; padding-left: 0px; color:#4f2684; font-size: 28;">Business Details</h3>
</div>
</div>

<!-- line breaker for sections -->
<hr style="margin-top: 10px;">

<!-- group button for public or private event
<div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 20px;">
<button type="button" class="btn btn-secondary" style="background-color: #4f2684; color: #fff;">Public</button>
<button type="button" class="btn btn-secondary">Private</button>

</div> -->

<?php 

if(isset($message)){
    echo '<div class="alert alert-success">'. $message .'</div>';
}
?> 
<!-- registration form starts here -->
<form method="POST" enctype="multipart/form-data">
<div class="form-group">
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Business/Organization Name
</button>
<input type="text"   class="form-control" id="usr" placeholder="Event Name" name="event_title">
</div>

<!-- registration form starts here -->
<form method="POST" enctype="multipart/form-data">
<div class="form-group">
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Store Name
</button>
<input type="text"   class="form-control" id="usr" placeholder="Event Name" name="event_title">
</div>

<!-- section two starts here -->
<hr style="margin-top: 2px;">
<!-- rounded number and text     -->
<div class="row">
<div class="col-sm-1">
<div class="numberCircle">2</div>
</div>
<div class="col-sm-2" style="padding-left: 8px;">
<h3 style="margin-top: 0px; padding-left: 0px; color:#4f2684; font-size: 28;">Location</h3>
</div>
</div>

<!-- line breaker for sections -->
<hr style="margin-top: 10px;">

<!-- address starts here -->
<div class="form-group"> <!-- Street 1 -->
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Address
</button>
<input type="text" class="form-control" id="street1_id" name="Address" placeholder="Street address, P.O. box, company name, c/o">
</div>                  
<!-- column for city and state -->
<div class="row">
<div class="col-sm-4" style="padding-right: 0px;">
<div class="form-group"> <!-- State Button -->
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
State
</button>
<select class="form-control" id="state_id" name="state">
<option value="AL">Choose City</option>
<option value="AK">Aba</option>
<option value="AZ">Abakaliki</option>
<option value="AR">Abeokuta</option>
<option value="CA">Abuja</option>
<option value="CO">Ado Ekiti</option>
<option value="CT">Akpawfu</option>
<option value="DE">Akure</option>
<option value="DC">Asaba</option>
<option value="FL">Awka</option>
<option value="GA">Bauchi</option>
<option value="HI">Benin City</option>
<option value="ID">Birnin Kebbi</option>
<option value="IL">Buguma</option>
<option value="IN">Calabar</option>
<option value="IA">Dutse</option>
<option value="KS">Efon-Alaaye</option>
<option value="KY">Eket</option>
<option value="LA">Enugu</option>
<option value="ME">Gombe</option>
<option value="MD">Gusau</option>
<option value="MA">Ibadan</option>
<option value="MI">Ibadan</option>
<option value="MN">Ifelodun</option>
<option value="MS">Ife</option>
<option value="MO">Ikeja</option>
<option value="MT">Ikirun</option>
<option value="NE">Nebraska</option>
<option value="NV">Ikot-Abasi</option>
<option value="NH">Ikot Ekpene</option>
<option value="NJ">Ilorin</option>
<option value="NM">Iragbiji</option>
<option value="NY">Jalingo</option>
<option value="NC">Jimeta</option>
<option value="ND">Jos</option>
<option value="OH">Kaduna</option>
<option value="OK">Kano</option>
<option value="OR">Katsina</option>
<option value="PA">Karu</option>
<option value="RI">Kumariya</option>
<option value="SC">Lafia</option>
<option value="SD">Lagos</option>
<option value="TN">Lekki</option>
<option value="TX">Lokoja</option>
<option value="UT">Maiduguri</option>
<option value="VT">Makurdi</option>
<option value="VA">Minna</option>
<option value="WA">Nnewi</option>
<option value="WV">Nsukka</option>
<option value="WI">Offa</option>
<option value="WY">Ogbomoso</option>
<option value="OK">Onitsha</option>
<option value="OR">Okene</option>
<option value="PA">Ogaminana</option>
<option value="RI">Omu-Aran</option>
<option value="SC">Oron</option>
<option value="SD">Oshogbo</option>
<option value="TN">Owerri</option>
<option value="TX">Owo</option>
<option value="UT">Orlu</option>
<option value="VT">Oyo</option>
<option value="VA">Port Harcourt</option>
<option value="WA">Sokoto</option>
<option value="WV">Sokoto</option>
<option value="WI">Suleja</option>
<option value="WY">Umuahia</option>
<option value="VT">Uyo</option>
<option value="VA">Warri</option>
<option value="WA">Wukari</option>
<option value="WV">Yenagoa</option>
<option value="WI">Yola</option>
<option value="WY">Zaria</option>
</select>                   
</div>
</div>
<div class="col-sm-7" style="padding-left: 22px; width: 64.333%;">
<div class="form-group"> <!-- State Button -->

<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
City
</button>
<input type="text" class="form-control" id="street1_id" name="city" placeholder="Enter LGA here, e.g Alimosho, Ikeja, Victoria Island, etc">                 
</div>
</div>
</div>                              

<div class="form-group"> <!-- Zip Code-->
<div class="row">
<div class="col-sm-4" style="padding-right: 0px;">
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Zip
</button>
<input type="text" class="form-control" id="street1_id" name="city" placeholder="Zip Code">
</div>
<div class="col-sm-8" style="padding-left: 23px;">
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Phone Number
</button>
<input type="text" class="form-control" id="street1_id" name="city" placeholder="Phone Number">
</div>
</div>
</div>

<div class="form-group"> <!-- Zip Code-->
<div class="row">
<div class="col-sm-6" style="padding-left: 16px;">
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Mobile Number 1
</button>
<input type="text" class="form-control" id="street1_id" name="city" placeholder="Mobile Number 1">
</div>
<div class="col-sm-6" style="padding-left: 0px;">
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Mobile Number 2
</button>
<input type="text" class="form-control" id="street1_id" name="city" placeholder="Mobile number 2">
</div>
</div>
</div>


<div class="form-group"> <!-- Zip Code-->
<div class="row" style="margin-top: 30px;">
<div class="col-sm-1" style="padding-right: 0px;">
<i class="material-icons" style="color: #4f2684">&#xe568;</i>
</div>
<div class="col-sm-3" style="padding-left: 0px; margin-top: 7px;">
<p style="font-weight: bold;">Map</p>
</div>
</div>
</div>

<!-- section three starts here -->

<div class="form-group">
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Business Category
</button>
<select class="form-control" id="state_id" name="state">
<option value="AL">Choose Category</option>
<option value="AK">Tents</option>
<option value="AZ">Audio</option>Ai</option>
<option value="AR">DJ's</option>
<option value="CA">Food</option>
<option value="CO">Fun Toys</option>
<option value="CT">Games</option>
</select>                   
</div>

<!-- add category ends here -->

<!-- add vendors logo goes here -->
<!-- event logo -->
<div class="form-group">
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Upload Logo
</button>
<input type="file" name="org_logo" id="js-upload-files">
</div>
<!-- add vendors logo ends here -->

<div class="form-group">
<div class="row">
<div class="col-sm-1" style="margin-right: 0px; padding-right: 0px; margin-top: 25px;">
<input type="checkbox" >
</div>
<div class="col-xs-11" style="margin-left: 0px; padding-left: 0px; margin-top: 30px;">
<p>I agree to the terms of use.</p>
</div>   
<div class="col-xs-4" style="margin-top: 45px; margin-left: 196px;">
<!-- <button type="submit" class="btn  btn-success" name="save">SAVE</button> -->
<!-- <input type="submit" name="save" value="SAVE" class="btn  btn-success"> -->
</div>
<div class="col-sm-4" style="margin-top: 5px; padding-left: 86px;">
<button type="submit" class="btn btn-danger btn-lg">Submit</button>
</div>    
</div>
</div>    



</div>
</div>    

</form>
</div>
</div><!-- /.container -->
</div>
</div>

<footer style="background-color: #f8f8f8; border: 3px solid #e7e7e7; padding: 10px; margin-top: 10px; height: 100px;">
  <div class="row">
    <div class="col-sm-2">
      <img src="img/logo.png" alt="" class="img-responsive" style="margin-top: -37px;">
    </div>
    <div class="col-sm-8">
      <p style="text-align: center; font-weight: bold; padding-top: 15px;">Copyright &copy; 2018 Eventor.com, all Rights Reserved. All Photos &copy; their respective owners</p>
    </div>
    <div class="col-sm-2"> 
      <div class="row">
        <div class="col-sm-4">
          <a href=""><img src="img/index.png" alt="" style="width: 30px; height-max: 100%; margin-top: 15px; border: 1px solid #000; border-radius: 50%;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index1.png" alt="" style="width: 30px; height-max: 100%; margin-top: 15px; border: 1px solid #000; border-radius: 50%;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index11.png" alt="" style="width: 30px; height-max: 100%; margin-top: 15px; border: 1px solid #000; border-radius: 50%;"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- script Starts here -->
<script src="https://unpkg.com/file-upload-with-preview"></script> 
<script>
// $( document ).on( 'click', '.btn-add', function ( event ) {
// 	event.preventDefault();

// 	var field = $(this).closest( '.form-group' );
// 	var field_new = field.clone();

// 	$(this)
// 		.toggleClass( 'btn-default' )
// 		.toggleClass( 'btn-add' )
// 		.toggleClass( 'btn-danger' )
// 		.toggleClass( 'btn-remove' )
// 		.html( '–' );

// 	field_new.find( 'input' ).val( '' );
// 	field_new.insertAfter( field );
// } );

// $( document ).on( 'click', '.btn-remove', function ( event ) {
// 	event.preventDefault();
// 	$(this).closest( '.form-group' ).remove();
// } );

// $(document).ready(function(){
// var date_input=$('input[name="date"]'); //our date input has the name "date"
// var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
// var options={
// format: 'mm/dd/yyyy',
// container: container,
// todayHighlight: true,
// autoclose: true,
// };
// date_input.datepicker(options);
// })

// $(document).ready(function(){
// var date_input=$('input[name="time"]'); //our date input has the name "date"
// var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
// var options={
// format: '00:00',
// container: container,
// todayHighlight: true,
// autoclose: true,
// };
// date_input.timepicker(options);
// })
// var upload = new FileUploadWithPreview('myUniqueUploadId')
</script>
<!-- script -->
</body>
</html>
