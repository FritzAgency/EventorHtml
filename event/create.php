<?php 

/*
if user not logged in, redirect to the login page
*/
if (!isset($_COOKIE['id'])) {
  header('Location: ../auth/signup.php'); 
}

?> 





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="/event/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" type="text/css" href="https://unpkg.com/file-upload-with-preview/dist/file-upload-with-preview.min.css">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
        <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
        <script type='text/javascript' src='script.js'></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
        <script src="js-timepicker.js"></script>
	<link rel="stylesheet" href="js-timepicker.css">

<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
  box-sizing: border-box;
}

body {
    background-image: url("img/eventor.jpg");
    font-family: 'Montserrat', sans-serif;

}

#regForm {
  background-color: #ffffff;
  margin: 50px auto;
  font-family: 'Montserrat', sans-serif;
  padding: 40px;
  width: 60%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 12px;
  font-family: 'Montserrat', sans-serif;
  border: 1px solid #aaaaaa;
  border-radius:5px;

}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4f2684;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: 'Montserrat', sans-serif;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}


/*upload organizer's logo css*/  
  .inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}

.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: purple;
    display: inline-block;
}

.inputfile:focus + label,

.inputfile + label:hover {
    background-color: red;
}

.inputfile + label {
  cursor: pointer; /* "hand" cursor */
}

.custom-file-container__image-preview {
  margin-top: -29px;
}
/*upload organizer's logo */ 
</style>
</head>
<body>


 <header>
 <!-- header starts here -->
 <nav class="navbar-sticky navbar navbar-default navbar-static-top" id="myTopnav" style="margin-bottom: 10px; background-color: white;">
  <div class="container-fluid">
    <div class="navbar-header" >
      <div class="col-sm-2 col-md-3 col-xm-4" style="width: 90%;">
      <a class="navbar-brand" href="../index.php"><img src="img/logo12.png" alt="" srcset="" class="img-responsive" style="margin-top: -7px;"></a>
      </div>
    </div>
    <ul class="nav navbar-nav navbar-right" class="topnav" id="myTopnav" style="margin-top: -41px;">
    <!--li><a href="#" class="new">HOW IT WORKS </a></li>
      <li><a href="#" class="new">EVENTS</a></li>
      <li><a href="#" class="new">SPECIAL DEALS</a></li>
      <li><a href="#" class="new">ABOUT US</a></li>
      <li><a href="#" class="new">CONTACT</a></li-->
      <!-- <li><a href="auth/signup.php" class="new">SIGNUP</a></li> -->
      <!--li><a class="new"> | </a></li-->
      <!-- <li><a href="auth/login.php" class="new">LOGIN</a></li> -->
      <?php 

      /*if ((!isset($_SESSION['email']))){


  header("Location: ../auth/signup.php");

} */ 

 
?>




<li style="    margin-top: 13px; margin-right: 17px; font-weight: bold; color: #4f2684; padding-top: 29px;"><a href="EventorHtml/index.php">Back to <span class="glyphicon glyphicon-home"></span></a></li> 

    </ul>
  </div>
</nav>
<!-- header stops here -->
</header>

<?php 
require_once('../event/createclass.php'); 

?> 

<!-- form starts here -->
<div class="container">
                <!-- rounded number ends here -->

        <!-- line breaker for sections -->
        <!-- line breaker ends here -->
<form id="regForm" action="" method="post" enctype="multipart/form-data">
  <p style="font-family: Arial; text-align: center; font-weight: bolder; color: #4f2684; font-size: 30px">CREATE EVENT</p>
  <!-- One "tab" for each step in the form: -->
              <?php 

if(isset($message)){
    echo '<div class="alert alert-success">'. $message .'</div>';
}
?> 
<hr>
  <div class="tab"><h4 style="font-weight: bold; color: #4f2684">EVENT DETAILS</h4>
  <hr> 
  <h4 style="color: #4f2684; font-size: 14px;">Event Title</h4>
    <p><input placeholder="Event Name" oninput="this.className = ''" name="event_title"></p>
    <h4 style="color: #4f2684; font-size: 14px;">Event Description</h4>
    <p><textarea style="width:100%; height: 200px; "placeholder="Give a short discription of the event" oninput="this.className = ''" name="event_description"></textarea></p>
  <hr>  
  <h4 style="color: #4f2684; font-size: 14px;">Address</h4>
  <p><input type="number" placeholder="Enter Address" oninput="this.className = ''" name="Address" id="autocomplete" onFocus="geolocate()"></p>
  <div class="row">
  <div class="col-sm-6">
  <h4 style="color: #4f2684; font-size: 14px;">State</h4>
  <p><input type="number" placeholder="Enter State here"oninput="this.className = ''" name="state"></p>
    </div>
    <div class="col-sm-6">
    <h4 style="color: #4f2684; font-size: 14px;">City</h4>
    <p><input placeholder="Enter City here" oninput="this.className = ''" name="city"></p>
    </div>
  </div>
<hr  style="color: black;">

        <div class="custom-file-container" data-upload-id="myUniqueUploadId">
        <h4 style="color: #4f2684; font-size: 14px;">Upload Event Banner</h4>

            <label class="custom-file-container__custom-file" >
                <input type="file" name="event_flier" class="inputfile custom-file-container__custom-file__custom-file-input" accept="*" multiple>
                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                <!--span class="custom-file-container__custom-file__custom-file-control"></span-->

<span class="glyphicon glyphicon-upload custom-file-container__custom-file__custom-file-control" style="color:white; height:25px"></span>



            </label>

             <div class="custom-file-container__image-preview" style="height: 500px; width: 100%;"> </div>
             <p style="margin-top: -30px; text-align: right;"><a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image" style="color: red; font-weight: bold;"> Remove Image</a></p>



        </div>


<div class="row">
  <div class="col-sm-6" style="padding-left: 0px; padding-right: 0px; margin-bottom: 10px;">
  <div class="form-group">
                            <h4 style="padding-left: 15px; color: #4f2684;font-size: 14px;">Event Start</h4>
                        <div class="col-sm-12">
                            <input type="text" id="departing" name="event_statrs" class="form-control" placeholder="Start Date" style="padding:2px">
                            <script>
                                $(document).ready(function() {
                                $("#departing").datepicker();
                                $("#returning").datepicker();
                                $("button").click(function() {
                                    var selected = $("#dropdown option:selected").text();
                                    var departing = $("#departing").val();
                                    var returning = $("#returning").val();
                                    // if (departing === "" || returning === "") {
                                    //     alert("Please select Event start date");
                                    // } else {
                                    //     confirm("Event Start date selected.");
                                    // }
                                });
                            });
                            </script>
                        </div>
                    </div>
                          </div>
                          <div class="col-sm-6" style="padding-left: 0px; padding-right: 0px; margin-bottom: 10px;">
  <div class="form-group">
                            <h4 style="padding-left: 15px; color: #4f2684;font-size: 14px;">Events Ends</h4>
                        <div class="col-sm-12">
                            <input type="text" id="ends" name="event_statrs" class="form-control" placeholder="Start Date" style="padding:2px">
                            <script>
                                $(document).ready(function() {
                                $("#ends").datepicker();
                                $("#end2").datepicker();
                                $("button").click(function() {
                                    var selected = $("#dropdown option:selected").text();
                                    var departing = $("#ends").val();
                                    var returning = $("#ends2").val();
                                    // if (departing === "" || returning === "") {
                                    //     alert("Please select Event start date");
                                    // } else {
                                    //     confirm("Event Start date selected.");
                                    // }
                                });
                            });
                            </script>
                        </div>
                    </div>
                          </div>
</div>

<div class="row">
  <div class="col-sm-6">
  <h4 style="color: #4f2684; font-size: 14px;">Ticket Quantity</h4>
    <p><input type="number" placeholder="Ticket Quantity" oninput="this.className = ''" name="ticket_qty"></p>
    </div>
    <div class="col-sm-6">
    <h4 style="color: #4f2684; font-size: 14px;">Ticket Price</h4>
    <p><input type="number" placeholder="Ticket Price (in &#8358;)"oninput="this.className = ''" name="ticket_price"></p>
    <p style="color: grey; margin-top: -9px;">Leave Empty if Event Ticket is free.</p>
    </div>
  </div>
    <!--p><input placeholder="Enter Event End Time here" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Enter Event End Date" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Ticket Quantity" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Ticket Quantity" oninput="this.className = ''" name="email"></p-->
<hr  style="color: black; font-size: bold; margin-top: 10px; margin-bottom: 6px;">
<h4 style="color: #4f2684; font-size: 14px;">Organizer Name</h4>
    <p style="margin-top:10px;"><input placeholder="Organizer Name" oninput="this.className = ''" name="org_name"></p>

   <!--p>  <input placeholder="Organizers logo" oninput="this.className = ''" type="file"   name="org_logo" > </p-->


<!--p> Organizer's Logo </p-->

   

<h4 style="color: #4f2684; font-size: 14px;">Upload Organizer's logo</h4>
 <p style="margin-bottom: 35px;"><input type="file" id="js-upload-files" placeholder="Organizer's Logo" oninput="this.className = ''" name="org_logo"></p>


    <!--p><input placeholder="Enter Facebook page here" oninput="this.className = ''" name="facebook" style="margin-top:10px"></p-->
    <!--p><input placeholder="Enter Instagram link here" value="@Instagram.com" oninput="this.className = ''" name="instagram" ></p>
    <p><input placeholder="Enter Twitter handle here" value="@twitter.com" oninput="this.className = ''" name="twitter"></p>
    <p><input type="file" name="org_logo" id="js-upload-files" placeholder="" oninput="this.className = ''" ></p-->
<hr style="color: black; font-size: bold; margin-top: 20px; margin-bottom: 20px;">
<h4 style="color: #4f2684; font-size: 14px;">Social Account</h4>
 <div class="input-group" style="margin-bottom: 15px;">
   <span class="input-group-addon">@</span>

   <input  type="text" class="form-control" name="twitter" placeholder="Twitter handle">
 </div>

 <div class="input-group" style="margin-bottom: 15px;">
   <span class="input-group-addon">@</span>
   <input  type="text" class="form-control" name="instagram" placeholder="Instagram handle">

 </div>

 <div class="input-group" style="margin-bottom: 15px;">
   <span class="input-group-addon">Facebook.com/</span>
   <input type="text" class="form-control" name="facebook" placeholder="Facebook username">
 </div>


  </div>
  
  <div class="tab">
  <p style="color: #4f2684">SPONSOR 1</p>
    <p><input placeholder="Sponsor's Name" oninput="this.className = ''" name="sponsor_name"></p>
    <p><input placeholder="Sponsor's Website" oninput="this.className = ''" name="sponsor_url"></p>
    <p><input type="file" id="js-upload-files" placeholder="Sponosor logo here" oninput="this.className = ''" name="sponsor_logo"></p>
<hr  style="color: black;">
    <p style="color: #4f2684">SPONSOR 2</p>
    <P><input placeholder="Sponsor's Name" oninput="this.className = ''" name="sponsor_name1"></P>
    <P><input placeholder="Sponsor's Website" oninput="this.className = ''" name="sponsor_url1"></P>
    <P><input type="file" name="sponsor_logo1" id="js-upload-files" placeholder="Sponosor logo here" oninput="this.className = ''"
      ></p>
<hr  style="color: black;">
    <p style="color: #4f2684">SPONSORS 3</p>
    <input placeholder="Sponsor's Name" oninput="this.className = ''" name="sponsor_name2">

    <P style="margin-top: 10px;"><input placeholder="Sponsor's Website" oninput="this.className = ''" name="sponsor_url2"></P>

  <P><input type="file" name="sponsor_logo2" id="js-upload-files" placeholder="Sponosor logo here" oninput="this.className = ''" ></P>
  </div>

  <div class="tab"><h4 style="font-weight: bold; color: #4f2684">ACTIVITIES</h4>
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="act_name"></p>

    <p><textarea style="width:100%; height: 200px; "placeholder="Give a short discription of the activity" oninput="this.className = ''" name="act_desc"></textarea></p>

    <p><input type="file" name="act_img" id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''"></p>


    <p><input placeholder="Enter Location of Activity" oninput="this.className = ''" name="act_loc" id="autocomplete" onFocus="geolocate()"></p>

    <!--p><input placeholder="Enter Time of Activity here" oninput="this.className = ''" name="yyyy"></p-->
    <p style="color: #4f2684"> Activity Time </p>
    <p><input type="text" placeholder="click to pick event time" oninput="this.className = ''" name="picker-1">
    <style>
      .js-t{
        width: 297px;
      }
    </style>
        <script>
          	window.picker1 = new JsTimepicker(document.querySelector('[name="picker-1"]'), {hourLeadingZero: false, minuteLeadingZero: false});
        </script>
  </p>
<hr  style="color: black;">

    <p style="font-weight: bold; color: #4f2684"> ACTIVITY 2 </p>
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="act_name1"></p>
    <p><textarea style="width:100%; height: 200px; "placeholder="Give a short discription of the activity" oninput="this.className = ''" name="act_desc1"></textarea></p>

    <p><input type="file"  id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''" name="act_img1"></p>
    <p><input placeholder="Enter Location of Activity" oninput="this.className = ''" name="act_loc1" id="autocomplete" onFocus="geolocate()"></p>
    <p style="color: #4f2684"> Activity Time </p>
    <p><input type="text" placeholder="click to pick event time" oninput="this.className = ''" name="picker-1">
    <style>
      .js-t{
        width: 297px;
      }
    </style>
        <script>
          	window.picker1 = new JsTimepicker(document.querySelector('[name="picker-1"]'), {hourLeadingZero: false, minuteLeadingZero: false});
        </script>
  </p>

  <hr  style="color: black;">  
    <p style="font-weight: bold; color: #4f2684"> ACTIVITY 3 </p>
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="act_name2"></p>
    <p><textarea style="width:100%; height: 200px; "placeholder="Give a short discription of the activity" oninput="this.className = ''" name="act_desc2"></textarea></p>

    <p><input type="file" id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''" name="act_img2"></p>

    <p><input placeholder="Enter Location of Activity" oninput="this.className = ''" name="act_loc2" id="autocomplete" onFocus="geolocate()"></p>

    <p style="color: #4f2684"> Activity Time </p>
    <p><input type="text" placeholder="click to pick event time" oninput="this.className = ''" name="picker-1">
    <style>
      .js-t{
        width: 297px;
      }
    </style>
        <script>
          	window.picker1 = new JsTimepicker(document.querySelector('[name="picker-1"]'), {hourLeadingZero: false, minuteLeadingZero: false});
        </script>
  </p>
<hr  style="color: black;">
    <!--p style="font-weight: bold;"> ACTIVITY 4 </p>
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="dd"></p>
    <p><input type="file" name="" id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''" name="logo"></p>
    <p><input placeholder="Enter Locatio of Activity" oninput="this.className = ''" name="yyyy"></p>
    <p> Activity Time </p>
    <p><input type="time" placeholder="" oninput="this.className = ''" name="act_date"></p>
<hr  style="color: black;">
    <p style="font-weight: bold;"> ACTIVITY 5 </p>
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="dd"></p>
    <p><textarea style="width:100%; height: 200px; "placeholder="Give a short discription of the activity" oninput="this.className = ''" name="activity_description"></textarea></p>

    <p><input type="file" name="" id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''" name="logo"></p>
    <p><input placeholder="Enter Locatio of Activity" oninput="this.className = ''" name="yyyy"></p>
    <p> Activity Time </p>
    <p><input type="time" placeholder="" oninput="this.className = ''" name="act_date"></p-->
  </div>
 
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>

  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
<!-- form ends here -->
</div>
<!-- footer goes here -->
<!-- footer goes here -->
<footer style="background-color: #4f2684; border: 3px solid #e7e7e7; padding: 10px; height: 50px; margin-top: 10px;">
  <div class="row">
    <div class="col-sm-2"  style="width: 12.666667%; margin-left: 36px">
      <img src="img/footer.png" alt="" class="img-responsive" style="margin-top: 2px;">
    </div>
    <div class="col-sm-8" style="margin-top: -8px;">
      <div class="row" style="width: 40%; margin-left: auto; margin-right: auto; margin-top: -4;">
        <div class="col-sm-5">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff; font-size: 10px;">How it works</p></a>
        </div>
        <div class="col-sm-4">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff; font-size: 10px;">About us</p></a>
        </div>
        <div class="col-sm-3">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff; font-size: 10px;">Contact</p></a>
        </div>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="row">
        <div class="col-sm-4">
          <a href=""><img src="img/index.png" alt="" style="width: 15px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index1.png" alt="" style="width: 15px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index11.png" alt="" style="width: 15px; height-max: 100%; margin-top: 10px;"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer ends here -->
</body>
</html>
<!-- footer ends here -->

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  /*for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }*/
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzCW1767osdDu9G37BlTJ88a7i9BNDQ7c&libraries=places&callback=initAutocomplete"
        async defer></script>
<script type="text/javascript">
    // This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
      {
        types: ['geocode'],
         componentRestrictions: {country: "ng"}

    });

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
</script>

<script type="text/javascript">
  
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>


        <script src="https://unpkg.com/file-upload-with-preview"></script>
        <script>
            var upload = new FileUploadWithPreview('myUniqueUploadId')
        </script>
</body>
</html>
