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
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/file-upload-with-preview/dist/file-upload-with-preview.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="style2.js"></script>
<!-- scripts ends here -->

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

<div class=row>
<div class="col-sm-6">
<div class="container" style="background-color: white; width: 600px; padding: 20px;">
<!-- rounded number and text     -->
<div class="row">
<div class="col-sm-1">
<div class="numberCircle">1</div>
</div>
<div class="col-sm-2" style="padding-left: 8px;">
<h3 style="margin-top: 0px; padding-left: 0px; color:#4f2684; font-size: 28;">What</h3>
</div>
</div>

<!-- line breaker for sections -->
<hr style="margin-top: 10px;">

<!-- group button for public or private event -->
<div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 20px;">
<button type="button" class="btn btn-secondary" style="background-color: #4f2684; color: #fff;">Public</button>
<button type="button" class="btn btn-secondary">Private</button>

</div>

<?php 

if(isset($message)){
    echo '<div class="alert alert-success">'. $message .'</div>';
}
?> 
<!-- registration form starts here -->
<form method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="usr">Event Name:</label>
<input type="text"   class="form-control" id="usr" placeholder="Event Name" name="event_title">
</div>

<div class="form-group">
<label for="comment">Description:</label>
<textarea class="form-control" rows="5" id="comment" placeholder="Write a short passage that describes your event" name="event_description"></textarea>
</div> 
<div class="form-group">
<div class="row">
<div class="col-sm-2">
<label class="radio-inline">
<input type="radio" name="status" value="free"> Free
</label>
</div>
<div class="col-sm-2">
<label class="radio-inline">
<input type="radio" name="status" value="paid"> Paid
</label>
</div>
</div>
<div class="form-group">
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Add Sponsors
</button>
<div class="row">
<div class="col-sm-4" style="padding-right: 0px; padding-bottom: 5px;">
<input type="text" class="form-control" id="usr" placeholder="Enter sponsors Name" name="sponsor_name">
</div>
<div class="col-sm-4" style="padding-left: 3px;">
<input type="text" class="form-control" id="usr" placeholder="Website/URL" name="sponsor_url">
</div>
<div class="col-sm-4" style="padding-left: 3px; margin-left: -15px;">
<input type="file" title=" " name="sponsor_logo" id="js-upload-files" multiple>
</div>
</div>

<div class="row">
<div class="col-sm-4" style="padding-right: 0px; padding-bottom: 5px;">
<input type="text" class="form-control" id="usr" placeholder="Enter sponsors Name" name="title">
</div>
<div class="col-sm-4" style="padding-left: 3px;">
<input type="text" class="form-control" id="usr" placeholder="Enter sponsors custom Url" name="title">
</div>
<div class="col-sm-4" style="padding-left: 3px; margin-left: -15px;">
<input type="file" title=" " name="org_logo" id="js-upload-files" multiple>
</div>
</div>
<div class="row">
<div class="col-sm-4" style="padding-right: 0px; padding-bottom: 5px;">
<input type="text" class="form-control" id="usr" placeholder="Enter sponsors Name" name="title">
</div>
<div class="col-sm-4" style="padding-left: 3px;">
<input type="text" class="form-control" id="usr" placeholder="Enter sponsors custom Url" name="title">
</div>
<div class="col-sm-4" style="padding-left: 3px; margin-left: -15px;">
<input type="file" title=" " name="org_logo" id="js-upload-files" multiple>
</div>
</div>
</div>

<!-- sponsors add link ends here -->

<!-- organizers name -->
<div class="form-group">
<button class="btn btn-secondary" type="button" style="margin-top: -10px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Organizers Name
</button>
<input type="text" class="form-control" id="usr" placeholder="Organizer Name" name="org_name">
</div>



<!-- event logo -->
<div class="form-group" style="margin-bottom: 20px;">
<label for="orgLogo">Upload Organizer Logo</label>
<div class="form-inline">
<div class="form-group">
<input type="file" name="org_logo" id="js-upload-files">
</div>
<!--button type="submit" class="btn btn-sm btn-secondary new" id="js-upload-submit"> Upload Logo </button-->
</div>
</div>

<!-- event banner upload here -->
<div class="form-group" style="margin-bottom: 20px;">
<label for="orgLogo">Upload Event Banner Here</label>
<!--form action="" method="post" enctype="multipart/form-data" id="js-upload-form"-->
<div class="form-inline">
<div class="form-group">
<input type="file" name="event_flier" id="js-upload-files">
</div>
<!--button type="submit" class="btn btn-sm btn-secondary new" id="js-upload-submit">Upload Banner</button-->
</div>
</div>
</div>

<!-- section two starts here -->
<hr style="margin-top: 2px;">
<!-- rounded number and text     -->
<div class="row">
<div class="col-sm-1">
<div class="numberCircle">2</div>
</div>
<div class="col-sm-2" style="padding-left: 8px;">
<h3 style="margin-top: 0px; padding-left: 0px; color:#4f2684; font-size: 28;">Where</h3>
</div>
</div>

<!-- line breaker for sections -->
<hr style="margin-top: 10px;">

<!-- address starts here -->
<div class="form-group"> <!-- Street 1 -->
<label for="street1_id" class="control-label">Address</label>
<input type="text" class="form-control" id="street1_id" name="Address" placeholder="Street address, P.O. box, company name, c/o">
</div>                  
<!-- column for city and state -->
<div class="row">
<div class="col-sm-6" style="padding-right: 0px;">
<div class="form-group"> <!-- State Button -->
<label for="state_id" class="control-label">State</label>
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
<div class="col-sm-6" style="padding-right: 0px;">
<div class="form-group"> <!-- State Button -->

<label for="state_id" class="control-label">LGA</label>
<input type="text" class="form-control" id="street1_id" name="lga" placeholder="Enter LGA here, e.g Alimosho, Ikeja, Victoria Island, etc">                 
<label for="state_id" class="control-label">City</label>
<input type="text" class="form-control" id="street1_id" name="city" placeholder="Enter name of city here">					
</div>
</div>
</div>                              




<div class="form-group"> <!-- Zip Code-->
<div class="row">
<div class="col-sm-1" style="padding-right: 0px;">
<i class="material-icons" style="color: #4f2684">&#xe568;</i>
</div>
<div class="col-sm-3" style="padding-left: 0px;">
<p style="font-weight: bold;">Map</p>
</div>
</div>
</div>

<!-- section three starts here -->
<hr style="margin-top: 2px;">
<!-- rounded number and text     -->
<div class="row">
<div class="col-sm-1">
<div class="numberCircle">3</div>
</div>
<div class="col-sm-2" style="padding-left: 8px;">
<h3 style="margin-top: 0px; padding-left: 0px; color:#4f2684; font-size: 28;">When</h3>
</div>
</div>

<!-- line breaker for sections -->
<hr style="margin-top: 10px;">

<div class="form-group"> <!-- Zip Code-->
<div class="row">
<div class="col-sm-6">
<label for="state_id" class="control-label">STARTS</label>
</div>
<div class="col-sm-6">
<label for="state_id" class="control-label">ENDS</label>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="row">
<div class="col-sm-6">
<div class="input-group bootstrap-timepicker timepicker">
<input class="form-control" id="time" name="time" placeholder="Date" type="text"/>
<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
</div>
</div>
<div class="col-sm-6">
<div>
<div class="form-group">
<div class='input-group date' id='datetimepicker10'>
<input class="form-control" id="time" name="event_starts" placeholder="Date" type="text"/>
<span class="input-group-addon">
<span class="glyphicon glyphicon-calendar">
</span>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="row">
<div class="col-sm-6">
<div class="input-group bootstrap-timepicker timepicker">
<input id="timepicker1" type="text" class="form-control input-small" placeholder="Time">
<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
</div>
</div>
<div class="col-sm-6">
<div>
<div class="form-group">
<div class='input-group date' id='datetimepicker10'>
<input class="form-control" id="date" name="event_ends" placeholder="Date" type="text"/>
<span class="input-group-addon">
<span class="glyphicon glyphicon-calendar">
</span>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- schedule multiple activties -->
<div class="form-group">
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Add Avtivities
</button>
<div class="row" style="margin-top: 10px;">
<div class="col-sm-5" style="margin:1px;" >
<input class="form-control" placeholder="Enter activity name here" type="text"/>
</div>
<div class="col-sm-5">
<input type="file" name="event_flyer" id="js-upload-files" multiple>
</div>
</div>
<div class="row" style="margin-top: 10px;">
<div class="col-sm-5" style="margin:1px;" >
<input class="form-control" placeholder="Enter location of Activity here" type="text"/>
</div>
<div class="col-sm-5">
<div class="input-group bootstrap-timepicker timepicker">
<input class="form-control" id="time" name="time" placeholder="Date" type="text"/>
<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
</div>
</div>
</div>
<div class="row" style="margin-top:10px;">
<div class="col-sm-11"
<label for="comment">Description of Activity</label>
<textarea class="form-control" rows="5" id="comment" placeholder="Write a short passage that describes your event" name="description"></textarea>
</div>
<div class="col-sm-5" style="margin-top:10px;" >
<input class="form-control" placeholder="Enter activity name here" type="text"/>
</div>
<div class="col-sm-5" style="margin-top:10px;">
<input type="file" name="event_flyer" id="js-upload-files" multiple>
</div>
</div>
<div class="row" style="margin-top: 10px;">
<div class="col-sm-5" style="margin:1px;" >
<input class="form-control" placeholder="Enter location of Activity here" type="text"/>
</div>
<div class="col-sm-5">
<div class="input-group bootstrap-timepicker timepicker">
<input class="form-control" id="time" name="time" placeholder="Date" type="text"/>
<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
</div>
</div>
</div>
<div class="row" style="margin-top:10px;">
<div class="col-sm-11"
<label for="comment">Description of Activity</label>
<textarea class="form-control" rows="5" id="comment" placeholder="Write a short passage that describes your event" name="description"></textarea>
</div>
</div>
</div>

<!-- section four starts here -->
<hr style="margin-top: 2px;">
<!-- rounded number and text     -->
<div class="row">
<div class="col-sm-1">
<div class="numberCircle">4</div>
</div>
<div class="col-sm-2" style="padding-left: 8px;">
<h3 style="margin-top: 0px; padding-left: 0px; color:#4f2684; font-size: 28;">How</h3>
</div>
</div>

<!-- line breaker for sections -->
<hr style="margin-top: 10px;">
<!-- tickest section with form drop -->
<div class="form-group">
<ul class="nav nav-pills" style="background-color: white; color: #4f2684;">
<li><a data-toggle="tab" href="#home" style="margin-right: 20px; background-color: #4f2684; color: white; font-weight: bold; ">FREE +</a></li>
<li><a data-toggle="tab" href="#menu1" style=" margin-right: 20px; background-color: #4f2684; color: white; font-weight: bold;">PAID +</a></li>
<li><a data-toggle="tab" href="#menu2" style="background-color: #4f2684; color: white; font-weight: bold;">RESERVED +</a></li>
</ul>

<div class="">
<div id="home" class="">
<div class="row">
<div class="col-sm-5">
<input class="form-control" id="time" name="ticket_qty" placeholder="Ticket quantity" type="text" style="margin-top: 10px;">
</div>
<div class="col-sm-5">
</div>
</div>
</div>
<div id="menu1" class="">
<div class="row">
<div class="col-sm-5">
<input class="form-control" id="time" name="ticket_price" placeholder="Ticket Price" type="text" style="margin-top: 10px;">
</div>
<!--div class="col-sm-5">
<input class="form-control" id="time" name="date" placeholder="Enter Ticket quantity here" type="text" style="margin-top: 10px;">
</div>
</div>
<div id="menu1" class="tab-pane fade">
<div class="row">
<div class="col-sm-5">
<input class="form-control" id="time" name="date" placeholder="Enter Ticket quantity here" type="text" style="margin-top: 10px;">
</div>
<div class="col-sm-5">
<input class="form-control" id="time" name="date" placeholder="Enter Ticket quantity here" type="text" style="margin-top: 10px;">
</div-->
</div>
</div>
</div>

<!-- social media section -->
<div class="form-group">
<button class="btn btn-secondary" type="button" style="margin-top: 17px; margin-bottom: 5px; background-color: #4f2684; color: #fff;" id="venia">
Add Social Media Links
</button>
<div class="row" style="margin-top: 10px;">
<div class="col-sm-5" style="margin:1px;" >
<input class="form-control" placeholder="Facebook handle" type="text" name="facebook" />
</div>
<div class="col-sm-5">
<input class="form-control" placeholder="Instagram handle" type="text" name="instagram" />
</div>
</div>
<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
<div class="col-sm-5" style="margin:1px;" >
<input class="form-control" placeholder="Enter Twitter handle" type="text" name="twitter" />
</div>
<!--div class="col-sm-5">
<div class="input-group bootstrap-timepicker timepicker">
<input class="form-control" placeholder="Enter Google + link here" type="text"/>
</div>
</div-->
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-1" style="margin-right: 0px; padding-right: 0px;">
<input type="checkbox" >
</div>
<div class="col-xs-11">
<p>I agree to the terms of use.</p>
</div>   

</div>
</div>    

<div class="form-group">
<div class="row">
<div class="col-sm-4">

</div>
<div class="col-xs-4">
<!--button type="submit" class="btn  btn-success" name="save">SAVE</button-->
<input type="submit" name="save" value="SAVE" class="btn  btn-success">
</div>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">PREVIEW</button>
</div>    

</div>
</div>    

</form>
</div>
</div><!-- /.container -->
</div>
<div class="col-sm-5">
<div style="height: 392px; background-color: grey; font-weight: bold; font-size: 20px; text-align: center; margin-top:10px;">PREVIEW</div>
</div>
</div>

<!-- script Starts here -->
<script src="https://unpkg.com/file-upload-with-preview"></script> 
<script>
$(document).ready(function(){
var date_input=$('input[name="date"]'); //our date input has the name "date"
var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
var options={
format: 'mm/dd/yyyy',
container: container,
todayHighlight: true,
autoclose: true,
};
date_input.datepicker(options);
})

$(document).ready(function(){
var date_input=$('input[name="time"]'); //our date input has the name "date"
var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
var options={
format: '00:00',
container: container,
todayHighlight: true,
autoclose: true,
};
date_input.timepicker(options);
})
// var upload = new FileUploadWithPreview('myUniqueUploadId')
</script>
<!-- script -->
</body>
</html>
