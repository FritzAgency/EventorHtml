<?php session_start();?> 
<?php 

$_SESSION['event'] = $_GET['event']; 


if(isset($_POST['submit'])){

$event_name = $_GET['event'];

//$ee = $_SESSION['event'];  

$ticket_id = uniqid(); 

$email = $_POST['email'];
$ticket_name = $_POST['name']; 
$to = $email;
$subject = "Your Ticket Details for $event_name";
//$header = "From Eventor";
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Eventor abiodun@fritzng.com' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$body="<p>Ticket Details for  $event_name</p> 

<p><b> Ticket Name:</b> $ticket_name</br> </p> 

<b> Ticket ID: </b> $ticket_id  

";   


$sent=mail($to,$subject,$body,$headers);

if ($sent){
header("Location: confirm.php");
    //echo 'success'; 
}

else{
    echo 'Something went wrong'; 
}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
form_main {
    width: 100%;
}
.form_main h4 {
    font-family: roboto;
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 15px;
    margin-top: 20px;
    text-transform: uppercase;
}
.heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
}
.heading span {
    background: #9e6600 none repeat scroll 0 0;
    bottom: -2px;
    height: 3px;
    left: 0;
    position: absolute;
    width: 75px;
}   
.form {
    border-radius: 7px;
    padding: 6px;
}
.txt[type="text"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt_3[type="text"] {
    margin: 10px 0 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt2[type="submit"] {
    background: #242424 none repeat scroll 0 0;
    border: 1px solid #4f5c04;
    border-radius: 25px;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    line-height: 35px;
    margin: 10px 0;
    padding: 0;
    text-transform: uppercase;
    width: 30%;
}
.txt2:hover {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #5793ef;
    transition: all 0.5s ease 0s;
}

</style>
</head>
<body>
<div class="container-fluid">

<div class="row">
	<div class="col-md-offset-1 col-md-6" style="margin-top: 50px">
<p class="lead">Complete your ticket details below to reserve a seat at <?php echo $_GET['event'];?> </p>

    </div>
</div>


</div>





    
    <div class="container panel panel-default">
 <div class="row panel-heading">

<div class="col-md-12">
<h3>Order Summary.	</h3>
</div>
</div>

<div class="row panel-body">

<div class="col-md-2">
	Ticket Quantity: 
</div>

<div class="col-md-offset-4 col-md-2">
<?php echo $_GET['ticket']; ?>
   </div>




</div>



<div class="row panel-body">

<div class="col-md-2">
	Ticket Price: 
</div>

<div class="col-md-offset-4 col-md-2">

   </div>
</div>

</div>

<div class="container"> 
<div class="row">
<div class="col-md-12">
<p class="lead"> Ticket info</p> 	
</div>
</div>


<div class="row">
<!-- form begins --> 

<div class="form">
                <form action="" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" required="" placeholder="Please input your Name" value="" name="name" class="txt">
                    
                    <input type="text" required="" placeholder="Please input your mobile No" value="" name="mob" class="txt">
                    
                    <input type="text" required="" placeholder="Please input your Email" value="<?php echo $_SESSION['email'];?>" name="email" class="txt">

                     <input type="text" id="autocomplete" onFocus="geolocate()" required="" placeholder="Location" value="" name="location" class="txt">

                     <input type="submit" value="Complete Registration" name="submit" class="txt2">
                </form>
            </div>


<!-- form ends --> 

	
</div>

	
</div>






</body>
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
      {types: ['geocode']});

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


</html>