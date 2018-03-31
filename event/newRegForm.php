<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="/event/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
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
  font-family: Raleway;
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
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
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
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
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
</style>
</head>
<body>
  <header>
 <!-- header starts here -->
 <nav class="navbar-sticky navbar navbar-default navbar-static-top" id="myTopnav" style="margin-bottom: 10px;" class="new">
  <div class="container-fluid">
    <div class="navbar-header" >
      <div class="col-sm-2 col-md-3 col-xm-4">
      <a class="navbar-brand" href="index.php"><img src="img/logo2.png" alt="" srcset="" class="img-responsive" style="margin-top: -7px;"></a>
      </div>
    </div>
    <ul class="nav navbar-nav navbar-right" class="topnav" id="myTopnav" style="margin-top: -45px;padding-bottom: 10px;">
    <li><a href="#" class="new">HOW IT WORKS </a></li>
      <li><a href="#" class="new">EVENTS</a></li>
      <li><a href="#" class="new">SPECIAL DEALS</a></li>
      <li><a href="#" class="new">ABOUT US</a></li>
      <li><a href="#" class="new">CONTACT</a></li>
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
</header>

<?php 
require_once('../event/createclass.php'); 
?> 

<!-- form starts here -->
<div class="container">
                <!-- rounded number ends here -->

        <!-- line breaker for sections -->
        <hr style="margin-top: 0px; color: #4f2684;">
        <!-- line breaker ends here -->
<form id="regForm" action="" method="post" enctype="multipart/form-data">
  <h1 style="font-weight: bold; color: #4f2684">CREATE EVENT</h1>
  <!-- One "tab" for each step in the form: -->
              <?php 

if(isset($message)){
    echo '<div class="alert alert-success">'. $message .'</div>';
}
?> 
<hr>
  <div class="tab"><h4 style="font-weight: bold; color: #4f2684">EVENT DETAILS</h4>
    <p><input placeholder="Event Name" oninput="this.className = ''" name="event_title"></p>
    <p><textarea style="width:100%; height: 200px; "placeholder="Give a short discription of the event" oninput="this.className = ''" name="event_description"></textarea></p>
  <hr>  
    <p><input placeholder="Enter Address or location of the event here " oninput="this.className = ''" name="Address" id="autocomplete" onFocus="geolocate()"></p>

    <p><input placeholder="Enter State here"oninput="this.className = ''" name="state"></p>

    <p><input placeholder="Enter City here" oninput="this.className = ''" name="city"></p>

<div class="row">
  <div class="col-sm-6">
    <p><input placeholder="Ticket Quantity" oninput="this.className = ''" name="ticket_qty"></p>
    </div>
    <div class="col-sm-6">
    <p><input placeholder="Ticket Price (Leave empty if ticket is free.)"oninput="this.className = ''" name="ticket_price"></p>
    </div>
  </div>
<hr  style="color: black;">
<p style="color: #4f2684">UPLOAD EVENT BANNER </p>
   <p> <input type="file"  id="js-upload-files" placeholder="Event Logo" oninput="this.className = ''" name="event_flier"> </p>

   

<!--p style="color: #4f2684; margin-top:10px;">UPLOAD EVENT BANNER </p>
    <input type="file"  id="js-upload-files" placeholder="Event Logo" oninput="this.className = ''" name="event_flier"-->

<div class="row">
  <div class="col-sm-6">
    <p style="color: #4f2684; margin-top:10px;">EVENT STARTS: </p>
    <input type="date" placeholder="Event start Date here" oninput="this.className = ''" name="event_starts" style="color: lightgrey;">
    </div>
<div class="col-sm-6">
<p style="color: #4f2684; margin-top:10px;" >EVENT ENDS: </p>

    <input type="date" placeholder="Event End date" oninput="this.className = ''" name="event_ends" style="color: lightgrey;">
    </div>
</div>
    <!--p><input placeholder="Enter Event End Time here" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Enter Event End Date" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Ticket Quantity" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Ticket Quantity" oninput="this.className = ''" name="email"></p-->
<hr  style="color: black; font-size: bold;">
    <p style="margin-top:10px;"><input placeholder="Organizer Name" oninput="this.className = ''" name="org_name"></p>

   <!--p>  <input placeholder="Organizers logo" oninput="this.className = ''" type="file"   name="org_logo" > </p-->


<p> Organizer's Logo </p>

    <!--p><input type="file" name="org_logo" id="js-upload-files" placeholder="" oninput="this.className = ''" ></p-->
<p>  <input type='file' name="org_logo" onchange="readURL(this);"/> </p>

  <div>
  <img id="blah" src="http://placehold.it/180" alt="your image" style="max-width:100px;  height:100px;
  margin-top:20px;"/>
</div>


    <!--p><input placeholder="Enter Facebook page here" oninput="this.className = ''" name="facebook" style="margin-top:10px"></p-->
    <!--p><input placeholder="Enter Instagram link here" value="@Instagram.com" oninput="this.className = ''" name="instagram" ></p>
    <p><input placeholder="Enter Twitter handle here" value="@twitter.com" oninput="this.className = ''" name="twitter"></p>
    <p><input type="file" name="org_logo" id="js-upload-files" placeholder="" oninput="this.className = ''" ></p-->
<hr>

 <div class="input-group" style="margin-bottom: 15px;">
   <span class="input-group-addon">@</span>
   <input id="email" type="text" class="form-control" name="email" placeholder="twitter handle">
 </div>
 <div class="input-group" style="margin-bottom: 15px;">
   <span class="input-group-addon">@</span>
   <input id="password" type="password" class="form-control" name="password" placeholder="instagram handle">
 </div>
 <div class="input-group" style="margin-bottom: 15px;">
   <span class="input-group-addon">Facebook.com/</span>
   <input id="msg" type="text" class="form-control" name="msg" placeholder="facebook page">
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
    <p> Activity Time </p>
    <p><input type="time" placeholder="" oninput="this.className = ''" name="act_date"></p>
<hr  style="color: black;">

    <p style="font-weight: bold;"> ACTIVITY 2 </p>
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="dd"></p>
    <p><textarea style="width:100%; height: 200px; "placeholder="Give a short discription of the activity" oninput="this.className = ''" name="activity_description"></textarea></p>

    <p><input type="file" name="" id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''" name="logo"></p>
    <p><input placeholder="Enter Locatio of Activity" oninput="this.className = ''" name="yyyy"></p>
    <p> Activity Time </p>
    <p><input type="time" placeholder="" oninput="this.className = ''" name="act_date"></p>

  <hr  style="color: black;">  
    <p style="font-weight: bold;"> ACTIVITY 3 </p>
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="dd"></p>
    <p><textarea style="width:100%; height: 200px; "placeholder="Give a short discription of the activity" oninput="this.className = ''" name="activity_description"></textarea></p>

    <p><input type="file" name="" id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''" name="logo"></p>
    <p><input placeholder="Enter Locatio of Activity" oninput="this.className = ''" name="yyyy"></p>
    <p style="font-weight: bold;"> Activity Time </p>
    <p><input type="time" placeholder="" oninput="this.className = ''" name="act_date"></p>
<hr  style="color: black;">
    <p style="font-weight: bold;"> ACTIVITY 4 </p>
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
    <p><input type="time" placeholder="" oninput="this.className = ''" name="act_date"></p>
  </div>
  <!-- <div class="tab"><h4 style="font-weight: bold; color: #4f2684">SCHEDULE</h4> 

    <p><input placeholder="Name of Schedule" oninput="this.className = ''" name="sch_name" ></p> -->

<!-- <p> When the schedule starts: </p>
    <p><input type="time" placeholder="" oninput="this.className = ''" name="sch_start"></p>

<p> When the schedule ends: </p>
    <p><input type="time" placeholder="Enter end time here" oninput="this.className = ''" name="sch_end"></p> -->


    <!--p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="sch_end"></p-->


    <!-- Scheduled 2
    <p><input  placeholder="Enter event schedule here" oninput="this.className = ''" name="sch_name1"></p>

    <p><input type="time" placeholder="Enter start time here" oninput="this.className = ''" name="sch_start1"></p>

    <p><input type="time" placeholder="Enter end time here" oninput="this.className = ''" name="sch_end1"></p> -->

    <!--p><input placeholder="" oninput="this.className = ''" name="yyyy"></p-->

    <!-- Scheduled 3
    <p><input  placeholder="Enter event schedule here" oninput="this.className = ''" name="sch_name2"></p>
    
    <p><input type="time" placeholder="Enter start time here" oninput="this.className = ''" name="sch_start2"></p>
    
    <p><input  type="time" placeholder="Enter end time here" oninput="this.className = ''" name="sch_end2"></p> -->

    <!--p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p-->

   <!-- Schedule 4
    <p><input placeholder="Enter event schedule here" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="Enter start time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter end time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p>

    Schedule 5
    <p><input placeholder="Enter event schedule here" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="Enter start time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter end time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p>--> 

  <!-- </div> -->
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
    <span class="step"></span>
  </div>
</form>
<!-- form ends here -->
</div>
<!-- footer goes here -->
<!-- footer goes here -->
<footer style="background-color: #4f2684; border: 3px solid #e7e7e7; padding: 10px; height: 70px; margin-top: 10px;">
  <div class="row">
    <div class="col-sm-2">
      <img src="img/footer.png" alt="" class="img-responsive" style="margin-top: 2px;">
    </div>
    <div class="col-sm-8">
      <div class="row" style="width: 40%; margin-left: auto; margin-right: auto;">
        <div class="col-sm-5">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff;">How it works</p></a>
        </div>
        <div class="col-sm-4">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff;">About us</p></a>
        </div>
        <div class="col-sm-3">
        <a href="#"><p style="text-align: center; font-weight: bold; padding-top: 15px; color: #ffffff;">Contact</p></a>
        </div>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="row">
        <div class="col-sm-4">
          <a href=""><img src="img/index.png" alt="" style="width: 30px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index1.png" alt="" style="width: 30px; height-max: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/index11.png" alt="" style="width: 30px; height-max: 100%; margin-top: 10px;"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
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

</body>
</html>
