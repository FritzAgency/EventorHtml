<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

<script type="text/javascript">

</script>


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

/* css for the image upload*/ 

 #change{
    background-color: #4f2684;
    color: white;
  }

  #change:hover{
    background-color: lightgrey;
    color: #4f2684;
  }
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload1{
    width: 100%;
}

#img-upload{
    width: 100%;
}

#sponsInp{
    width: 100%;
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
<form id="regForm" action="" method="POST">
  <h1>Create Event Form</h1>
  <!-- One "tab" for each step in the form: -->
<?php
if(isset($message)){
    echo '<div class="alert alert-success">'. $message .'</div>';
}
?> 



  <div class="tab">EVENT DETAILS
    <p><input placeholder="Event Name"  name="event_title" oninput="this.className = ''" ></p>

    <p><textarea placeholder="Description" oninput="this.className = ''" name="event_description"></textarea></p>

    <!--p><input type="file" name="org_logo" id="js-upload-files" placeholder="Event Logo" oninput="this.className = ''" name="logo"></p-->

<div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Upload Event Banner.. <input type="file" name="event_flier" id="imgInp1"><input type="text" class="form-control" readonly>

                </span>
            </span>
                  </div>
        <img id='img-upload1'/>




    <p style="margin-top: 10px"><input placeholder="Organizer Name" oninput="this.className = ''" name="org_name"></p>


    <!--p><input type="file" name="org_logo" id="js-upload-files" placeholder="Event Logo" oninput="this.className = ''" name="logo"></p-->


<div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Upload Organizer's Logo.. <input type="file" name="org_logo" id="imgInp"><input type="text" class="form-control" readonly>

                </span>
            </span>
                  </div>
        <img id='img-upload'/>
    



    <p style="margin-top: 10px"><input placeholder="Enter Facebook page here" oninput="this.className = ''" name="facebook"></p>

    <p><input placeholder="Enter Instagram link here" oninput="this.className = ''" name="instagram"></p>
    <p><input placeholder="Enter Twitter handle here" oninput="this.className = ''" name="twitter"></p>
    Ticket Information
    <p><input placeholder="Ticket Quantity" oninput="this.className = ''" name="ticket_quantity"></p>
    <p><input placeholder="Ticket Price (Leave empty if ticket is free.)" oninput="this.className = ''" name="ticket_price"></p>
  </div>

  <div class="tab">SPONSORS
    Sponsors 1
    <p><input placeholder="Sponsor's Name" oninput="this.className = ''" name="sponsor_name"></p>

    <p><input placeholder="Sponsor's Website" oninput="this.className = ''" name="sponsor_url"></p>
    
    <!--p><input type="file" name="org_logo" id="js-upload-files" placeholder="Sponosor logo here" oninput="this.className = ''" name="logo"></p-->





    Sponsor 2
    <p><input placeholder="Name of Sponosors 2" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="URl" oninput="this.className = ''" name="phone"></p>
    <p><input type="file" name="org_logo" id="js-upload-files" placeholder="Sponosor logo here" oninput="this.className = ''" name="logo"></p>

    Sponsor 3
    <p><input placeholder="Name of Sponosors 3" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="URl" oninput="this.className = ''" name="phone"></p>
    <p><input type="file" name="org_logo" id="js-upload-files" placeholder="Sponosor logo here" oninput="this.className = ''" name="logo"></p>
  </div>


  <div class="tab">Activities
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="act_name"></p>

    <p><input type="file" name="act_logo" id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''"></p>

    <p><input placeholder="Enter Location of Activity" oninput="this.className = ''" name="act_logo"></p>

    <p><input placeholder="Enter Time of Activity here" oninput="this.className = ''" name="act_date"></p>

    <!--p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p-->
    Activity 2
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="dd"></p>
    <p><input type="file" name="org_logo" id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''" name="logo"></p>
    <p><input placeholder="Enter Locatio of Activity" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Time of Activity here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p>
    Activity 3
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="dd"></p>
    <p><input type="file" name="org_logo" id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''" name="logo"></p>
    <p><input placeholder="Enter Locatio of Activity" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Time of Activity here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p>

    Activity 4
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="dd"></p>
    <p><input type="file" name="org_logo" id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''" name="logo"></p>
    <p><input placeholder="Enter Locatio of Activity" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Time of Activity here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p>

    Activity 5
    <p><input placeholder="Enter Activity name here" oninput="this.className = ''" name="dd"></p>
    <p><input type="file" name="org_logo" id="js-upload-files" placeholder="Upload Activity logo here" oninput="this.className = ''" name="logo"></p>
    <p><input placeholder="Enter Locatio of Activity" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Time of Activity here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab">Scheduled
    <p><input placeholder="Enter event schedule here" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="Enter start time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter end time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p>
    Scheduled 2
    <p><input placeholder="Enter event schedule here" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="Enter start time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter end time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p>
    Scheduled 3
    <p><input placeholder="Enter event schedule here" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="Enter start time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter end time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p>

    Schedule 4
    <p><input placeholder="Enter event schedule here" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="Enter start time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter end time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p>

    Schedule 5
    <p><input placeholder="Enter event schedule here" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="Enter start time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter end time here" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Enter Date of Activity here" oninput="this.className = ''" name="yyyy"></p>
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
    <span class="step"></span>
  </div>
</form>
<!-- form ends here -->
</div>
<!-- footer goes here -->
<footer style="background-color: #f8f8f8; border: 3px solid #e7e7e7; padding: 10px; margin-top: 10px; height: 100px;">
  <div class="row">
    <div class="col-sm-2">
      <img src="img/logo2.png" alt="" class="img-responsive" style="margin-top: 2px;">
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


  $(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload1').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp1").change(function(){
        readURL(this);
    });   
  });

</script>


<script type="text/javascript">
  
  $(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   
  });
</script>
<script type="text/javascript">
$(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#sponsInp').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#sponsInp").change(function(){
        readURL(this);
    });   
  });

</script>

</body>
</html>
