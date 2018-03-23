<?php session_start();?> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Create EVENT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/file-upload-with-preview/dist/file-upload-with-preview.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css">
<style>
/* .switch {
  position: relative;
  height: 32px;
  width: 146PX;
  margin: -4px auto;
  background: #4f2684;
  border-radius: 14px;
  /* -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1); */
/* } */

/* .switch-label {
  position: relative;
  z-index: 2;
  float: left;
  width: 146px;
  line-height: 26px;
  font-size: 14px;
  color: #ffffff;
  text-align: center; */
  /* text-shadow: 0 1px 1px rgba(0, 0, 0, 0.45); */
  /* cursor: pointer;
}
.switch-label:active {
  font-weight: bold;
}

.switch-label-off {
  padding-left: 2px;
}

.switch-label-on {
  padding-right: 2px;
} */


/* .switch-input {
  display: none;
}
.switch-input:checked + .switch-label {
  font-weight: bold;
  color: rgba(0, 0, 0, 0.65);
  /* text-shadow: 0 1px rgba(255, 255, 255, 0.25); */
  /* -webkit-transition: 0.15s ease-out;
  -moz-transition: 0.15s ease-out;
  -ms-transition: 0.15s ease-out;
  -o-transition: 0.15s ease-out;
  transition: 0.15s ease-out; */ 
  /* -webkit-transition-property: color, text-shadow;
  -moz-transition-property: color, text-shadow;
  -ms-transition-property: color, text-shadow;
  -o-transition-property: color, text-shadow;
  transition-property: color, text-shadow; */
/* } */
/* .switch-input:checked + .switch-label-on ~ .switch-selection {
  left: 60px; */
  /* Note: left: 50%; doesn't transition in WebKit */
/* } */

/* .switch-selection {
  position: absolute;
  z-index: 1;
  top: 2px;
  left: 2px;
  display: block;
  width: 58px;
  height: 22px;
  border-radius: 3px;
  background-color: #65bd63;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #9dd993), color-stop(100%, #65bd63));
  background-image: -webkit-linear-gradient(top, #9dd993, #65bd63);
  background-image: -moz-linear-gradient(top, #9dd993, #65bd63);
  background-image: -ms-linear-gradient(top, #9dd993, #65bd63);
  background-image: -o-linear-gradient(top, #9dd993, #65bd63);
  background-image: linear-gradient(top, #9dd993, #65bd63);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 0 2px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 0 2px rgba(0, 0, 0, 0.2);
  -webkit-transition: left 0.15s ease-out;
  -moz-transition: left 0.15s ease-out;
  -ms-transition: left 0.15s ease-out;
  -o-transition: left 0.15s ease-out;
  transition: left 0.15s ease-out; */
/* }
.switch-blue .switch-selection {
  background-color: #ffffff;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #4fc9ee), color-stop(100%, #3aa2d0));
  background-image: -webkit-linear-gradient(top, #4fc9ee, #3aa2d0);
  background-image: -moz-linear-gradient(top, #4fc9ee, #3aa2d0);
  background-image: -ms-linear-gradient(top, #4fc9ee, #3aa2d0);
  background-image: -o-linear-gradient(top, #4fc9ee, #3aa2d0);
  background-image: linear-gradient(top, #4fc9ee, #3aa2d0);
}
.switch-yellow .switch-selection {
  background-color: #c4bb61;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #e0dd94), color-stop(100%, #c4bb61));
  background-image: -webkit-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: -moz-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: -ms-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: -o-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: linear-gradient(top, #e0dd94, #c4bb61);
} */ 

.btn1 {
color: gray;
background-color: #4f2684;
padding: 8px 20px;
border-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
font-size: 12px;
font-weight: bold;
border:2px solid #4f2684;
}

.collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
}

.active, .collapsible:hover {
    background-color: #555;
}

.content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
}

</style>
</head>
<body>

  
    <!-- header ends here -->

<?php 
require_once('../event/createclass.php'); 
?> 


    <header>
    <!-- header starts here -->
    <nav class="navbar-sticky navbar navbar-default navbar-static-top" id="myTopnav" style="margin-bottom: 10px;" class="new">
  <div class="container-fluid">
    <div class="navbar-header" >
      <div>
      <h2 style="margin-right: auto; font-weight: bold; color: #4f2684; margin-left: 7em; margin-bottom: 20px; margin-top: 20px;">CREATE EVENT FORM</h2>
      <!-- <a class="navbar-brand" href="index.php"><img src="img/logo2.png" alt="" srcset="" class="img-responsive" style="margin-top: -7px;"></a> -->
      </div>
    </div>
    <ul class="nav navbar-nav navbar-right" class="topnav" id="myTopnav" style="margin-top: 10px;padding-bottom: 10px;">
    <!-- <li><a href="index.php" class="new" style="margin-top: 53px; font-size: 20px; font-weight: bold; border-radius: 5%;" id="change"> <span class="glyphicon glyphicon-arrow-left"> </span></a></li> -->
    <!--  <li><a href="#" class="new">EVENTS</a></li>
      <li><a href="#" class="new">SPECIAL DEALS</a></li>
      <li><a href="#" class="new">ABOUT US</a></li>
      <li><a href="#" class="new">CONTACT</a></li> -->
      <!--li style="font-weight: bold;"><a href="auth/signup.php">SIGNUP</a></li>
      <li style="font-weight: bold;"><a> | </a></li>
      <li style="margin-right: 52px; font-weight: bold;"><a href="auth/login.php">LOGIN</a></li-->
    </ul>
  </div>
</nav>
</header>
    <!-- header ends here -->

    <!-- the whole body starts here -->
    <div class="container" style="background-color: white; padding: 20px 0px 20px 20px; border-radius: 15px;">
        <!-- rounded number and text     -->
        <div class="row">
            <div class="col-sm-1">
                <div class="numberCircle">1</div>
                </div>
                <div class="col-sm-2" style="padding-left: 8px;">
                <h3 style="margin-top: 0px; padding-left: 0px; color:#4f2684; font-size: 28;">WHAT</h3>
            </div>
        </div>
                <!-- rounded number ends here -->

        <!-- line breaker for sections -->
        <hr style="margin-top: 0px; color: #4f2684;">
        <!-- line breaker ends here -->
        <div class="row">
            <!-- form starts here -->
            <div class="col-sm-6">
                <?php 

if(isset($message)){
    echo '<div class="alert alert-success">'. $message .'</div>';
}
?> 
            <form method="POST" enctype="multipart/form-data">
                <!-- switch button goes in here -->
                <p>Select type of event here</p>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn1 btn btn-default btn-sm">
                        <input name="status" id="option2"  type="radio" value="public"> PUBLIC
                    </label>
                    <label class="btn1 btn btn-default btn-sm">
                        <input name="status" id="option3"  type="radio" value="private"> PRIVATE
                    </label>
                </div>
                <!-- end of switch button -->
                <!-- event name goes in -->

                <div class="form-group">
                <label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px; margin-top: 20px;margin-top: 20px;">EVENT NAME</label>
                    <input type="text" class="form-control well" id="" placeholder="Enter event name here" name="event_title">
                </div>
                <!-- end of event name --> 

                <div class="form-group">
<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">DESCRIPTION</label>
<textarea class="form-control well" rows="5" id="comment" placeholder="Write a short passage that describes your event" name="event_description"></textarea>
</div> 

<!-- organizers name -->
<div class="form-group">
<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px; margin-top: 20px;margin-top: 20px;">ORGANIZERS NAME </label>
<input type="text" class="form-control well" id="usr" placeholder="Organizer Name" name="org_name">
</div>



<!-- event logo -->
<div class="form-group" style="margin-bottom: 30px;">
<label for="OrgName" style="font-weight: bold; border: 1px solid black; background-color: #4f2684; color: white; border-radius: 5px; padding: 10px;">UPLOAD LOGO</label>
<div class="form-inline">
<div class="form-group">
<input type="file" name="org_logo" id="js-upload-files">
</div>
<!--button type="submit" class="btn btn-sm btn-secondary new" id="js-upload-submit"> Upload Logo </button-->
</div>
</div>

<div class="form-group">
<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">ADD SPONSORS</label>
<div class="row">
<div class="col-sm-4" style="padding-right: 0px; padding-bottom: 5px;">
<input type="text" class="form-control well" id="usr" placeholder="Enter sponsors Name" name="sponsor_name">
</div>
<div class="col-sm-4" style="padding-left: 3px;">
<input type="text" class="form-control well" id="usr" placeholder="Website/URL" name="sponsor_url">
</div>
<div class="col-sm-4" style="padding-left: 3px; margin-left: -15px;">
<input type="file" title=" " name="sponsor_logo" id="js-upload-files" multiple>
</div>
</div>

<div class="row">
<div class="col-sm-4" style="padding-right: 0px; padding-bottom: 5px;">
<input type="text" class="form-control well" id="usr" placeholder="Enter sponsors Name" name="title">
</div>
<div class="col-sm-4" style="padding-left: 3px;">
<input type="text" class="form-control weel" id="usr" placeholder="Enter sponsors custom Url" name="title">
</div>
<div class="col-sm-4" style="padding-left: 3px; margin-left: -15px;">
<input type="file" title=" " name="org_logo" id="js-upload-files" multiple>
</div>
</div>
<div class="row">
<div class="col-sm-4" style="padding-right: 0px; padding-bottom: 5px;">
<input type="text" class="form-control well" id="usr" placeholder="Enter sponsors Name" name="title">
</div>
<div class="col-sm-4" style="padding-left: 3px;">
<input type="text" class="form-control well" id="usr" placeholder="Enter sponsors custom Url" name="title">
</div>
<div class="col-sm-4" style="padding-left: 3px; margin-left: -15px;">
<input type="file" title=" " name="org_logo" id="js-upload-files" multiple>
</div>
</div>    
</div>

<!-- event logo -->
<div class="form-group" style="margin-bottom: 30px;">
<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">UPLOAD LOGO</label>
<div class="form-inline">
<div class="form-group">
<input type="file" name="event_flier" id="js-upload-files">
</div>
<!--button type="submit" class="btn btn-sm btn-secondary new" id="js-upload-submit"> Upload Logo </button-->
</div>
</div>

<!-- event banner upload here -->
<div class="form-group" style="margin-bottom: 30px;">
<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">UPLOAD EVENT BANNER</label>
<!--form action="" method="post" enctype="multipart/form-data" id="js-upload-form"-->
<div class="row">
    <div class="col-sm-4">
<div class="form-inline">
<div class="form-group">
<input type="file" name="event_flier1" id="js-upload-files">
</div>
</div>
</div>
<div class="col-sm-4">
<div class="form-inline">
<div class="form-group">
<input type="file" name="event_flier2" id="js-upload-files">
</div>
</div>
</div>
<div class="col-sm-4">
<div class="form-inline">
<div class="form-group">
<!--input type="file" name="event_flier2" id="js-upload-files"-->
</div>
</div>
</div>
<!--button type="submit" class="btn btn-sm btn-secondary new" id="js-upload-submit">Upload Banner</button-->
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
<h3 style="margin-top: 0px; padding-left: 0px; color:#4f2684; font-size: 28;">WHERE</h3>
</div>
</div>

<!-- line breaker for sections -->
<hr style="margin-top: 10px;">
            
<!-- address starts here -->
<div class="form-group"> <!-- Street 1 -->
<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">ADDRESS</label>
<input type="text" class="form-control well" id="street1_id" name="Address" placeholder="Street address, P.O. box, company name, c/o">
</div>                  
<!-- column for city and state -->
<div class="row">
<div class="col-sm-4" style="padding-right: 0px;">
<div class="form-group"> <!-- State Button -->
<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">STATE</label>
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

<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">CITY</label>
<input type="text" class="form-control well" id="street1_id" name="city" placeholder="Enter LGA here, e.g Alimosho, Ikeja, Victoria Island, etc">                 
</div>
</div>
</div>                              

<div class="form-group"> <!-- Zip Code-->
<div class="row">
<div class="col-sm-4" style="padding-right: 0px;">
<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">ZIP CODE</label>
<input type="text" class="form-control well" id="street1_id" name="city" placeholder="Zip COde">
</div>
<div class="col-sm-8" style="padding-left: 23px;">
<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">PHONE NUMBER </label>
<input type="text" class="form-control well" id="street1_id" name="city" placeholder="Phone Number">
</div>
</div>
</div>


<div class="form-group"> <!-- Zip Code-->
<div class="row">
<div class="col-sm-1" style="padding-right: 0px;">
<i class="material-icons" style="color: #4f2684">&#xe568;</i>
</div>
<div class="col-sm-3" style="padding-left: 0px;">
<p style="font-weight: bold;">MAP</p>
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
<h3 style="margin-top: 0px; padding-left: 0px; color:#4f2684; font-size: 28;">WHEN</h3>
</div>
</div>

<!-- line breaker for sections -->
<hr style="margin-top: 10px;">

<div class="form-group"> <!-- Zip Code-->
<div class="row">
<div class="col-sm-6">
<label for="state_id" class="control-label" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">STARTS</label>
</div>
<div class="col-sm-6">
<label for="state_id" class="control-label" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">ENDS</label>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="row">
<div class="col-sm-6">
<div class="input-group bootstrap-timepicker timepicker">
<input class="form-control well" id="time" name="time" placeholder="Date" type="text"/>
<!-- <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span> -->
</div>
</div>
<div class="col-sm-6" style="padding-right: 16px;">
<div>
<div class="form-group">
<div class='input-group date' id='datetimepicker10'>
<input class="form-control well" id="time" name="event_starts" placeholder="Time" type="text"/>
<!-- <span class="glyphicon glyphicon-calendar"></span> -->
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
<input id="timepicker1" type="text" class="form-control well" placeholder="Time">
<!-- <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span> -->
</div>
</div>
<div class="col-sm-6">
<div>
<div class="form-group">
<div class='input-group date' id='datetimepicker10'>
<input class="form-control well" id="date" name="event_ends" placeholder="Date" type="text"/>
<!-- <span class="glyphicon glyphicon-calendar"></span> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div data-role="collapsibleset" data-theme="a" data-content-theme="a">
    <div data-role="collapsible">
        <h3>Section 1</h3>
    <p>I'm the collapsible content for section 1</p>
    </div>
    <div data-role="collapsible">
        <h3>Section 2</h3>
    <p>I'm the collapsible content for section 2</p>
    </div>
    <div data-role="collapsible">
        <h3>Section 3</h3>
    <p>I'm the collapsible content for section 3</p>
    </div>
</div>

<!-- schedule multiple activties -->
<div class="form-group">
<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">ADD ACTIVITIES</label>
<div class="row" style="margin-top: 10px;">
<div class="col-sm-5" style="margin:1px; padding-left: 19px;" >
<input class="form-control well" placeholder="Enter activity name here" type="text" name="act_name" />
</div>
<div class="col-sm-5" style="padding-left: 19px;">
<input type="file" name="act_img" id="js-upload-files">
</div>
</div>
<div class="row" style="margin-top: 10px;">
<div class="col-sm-5" style="margin:1px; padding-left: 19px;" >
<input class="form-control well" placeholder="Enter location of Activity here" type="text" name="act_loc" />
</div>
<div class="col-sm-5" style="padding-left: 19px;">
<div class="input-group bootstrap-timepicker timepicker">
<input class="form-control well" id="time" name="act_date" placeholder="Date" type="text"/>
<!-- <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span> -->
</div>
</div>
</div>
<div class="row" style="margin-top:10px;">
<div class="col-sm-11">
<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">DESCRIPTION OF ACTIVITY</label>
<textarea class="form-control well" rows="5" id="comment" placeholder="Write a short passage that describes your event" name="act_desc"></textarea>
</div>
<!--div class="col-sm-5" style="margin-top:10px;" >
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
</div-->
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
<h3 style="margin-top: 0px; padding-left: 0px; color:#4f2684; font-size: 28;">HOW</h3>
</div>
</div>

<!-- line breaker for sections -->
<hr style="margin-top: 10px;">
<!-- tickest section with form drop -->
<div class="form-group">
<ul class="nav nav-pills" style="background-color: white; color: #4f2684;">

<li><a data-toggle="tab" href="#home" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">FREE +</a></li>
<li><a data-toggle="tab" href="#menu1" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">PAID +</a></li>
<li><a data-toggle="tab" href="#menu2" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">RESERVED +</a></li>
</ul>

<div class="">
<div id="home" class="">
<div class="row">
<div class="col-sm-5" style="padding-left: 16px;">
<input class="form-control well" id="time" name="ticket_qty" placeholder="Ticket quantity" type="text" style="margin-top: 10px;">
</div>
<div class="col-sm-5" style="padding-left: 16px;">
<input class="form-control well" id="time" name="ticket_price" placeholder="Ticket Price not not applicable to free" type="text" style="margin-top: 10px;">
</div>
</div>
</div>
<div id="menu1" class="">
<div class="row">
<div class="col-sm-5" style="padding-left: 16px;">
<!-- <input class="form-control" id="time" name="ticket_price" placeholder="Ticket Price" type="text" style="margin-top: 10px;"> -->
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
  <div class="tab-content">
    <div id="home" class="tab-pane fade">
    <div class="row">
    <div class="col-sm-5" style="padding-left: 16px;">
      <input class="form-control well" placeholder="Enter Ticket quantity here" type="text" style="margin-top: 10px;">
    </div>
    <div class="col-sm-5" style="padding-left: 16px;">
     </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="row">
    <div class="col-sm-5" style="padding-left: 16px;">
      <input class="form-control well" placeholder="Enter Ticket quantity here" type="text" style="margin-top: 10px;">
    </div>
    <div class="col-sm-5" style="padding-left: 16px;">
      <input class="form-control well" placeholder="Enter Ticket quantity here" type="text" style="margin-top: 10px;">
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="row">
    <div class="col-sm-5" style="padding-left: 16px;">
      <input class="form-control well" placeholder="Enter Ticket quantity here" type="text" style="margin-top: 10px;">
    </div>
    <div class="col-sm-5" style="padding-left: 16px;">
      <input class="form-control well" placeholder="Enter Ticket quantity here" type="text" style="margin-top: 10px;">
    </div>
    </div>
</div>
</div>

<!-- social media section -->
<div class="form-group">

<label for="OrgName" style="font-weight: bold; border: 0px solid black; color: grey; border-radius: 5px; padding-left: 0px; padding: 10px 10px 10px 0px; font-size: 20px;">ADD SOCIAL MEDIA</label>
<div class="row" style="margin-top: 10px; ">
<div class="col-sm-5" style="margin:1px; padding-left: 16px;" >
<input class="form-control well" placeholder="@Facebook.com " type="text" name="facebook" />
</div>
<div class="col-sm-5" style="padding-left: 16px;">
<input class="form-control well" placeholder="@instagram.com" type="text" name="instagram" />
</div>
</div>
<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
<div class="col-sm-5" style="padding-left: 16px; margin:1px;" >
<input class="form-control well" placeholder="@Twitter.com" type="text" name="twitter" />
</div>
<!--div class="col-sm-5">
<div class="input-group bootstrap-timepicker timepicker">
<input class="form-control" placeholder="Enter Google + link here" type="text"/>
</div>
</div-->
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-1" style="margin-right: 0px; padding-right: 0px; margin-top: 25px;">
<input type="checkbox" >
</div>
<div class="col-xs-11" style="margin-left: 0px; padding-left: 0px; margin-top: 30px;">
<p>I agree to the terms of use.</p>
</div>   
<div class="col-xs-4" style="margin-top: 45px; margin-left: 170px;">
<button type="submit" class="btn  btn-success btn-small" name="save">SAVE</button>
<!-- <input type="submit" name="save" value="SAVE" class="btn  btn-success"> -->
</div>
<div class="col-sm-4" style="margin-top: 45px;">
<button type="submit" class="btn btn-primary btn-sm">PREVIEW</button>
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
            <!-- form ends here -->
            <div class="col-sm-6">
                <div style="margin: auto;">
                    <h3 style="text-align: center;">
                        PREVIEW
                    </h3>
                </div>
            </div>
        </div>
    </div>
<script>
   var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}
</script>
</body>
</html>