<?php session_start();?> 
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
<p class="lead">Confirm your Details Below to reserve a seat at -- </p>

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
111
   </div>




</div>



<div class="row panel-body">

<div class="col-md-2">
	Ticket Price: 
</div>

<div class="col-md-offset-4 col-md-2">
FREE
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
                    <input type="text" required="" placeholder="Please input your Name" value="<?php echo $_SESSION['first_name'];?>" name="name" class="txt">
                    
                    <input type="text" required="" placeholder="Please input your mobile No" value="<?php echo $_SESSION['phoneNumber'];?>" name="mob" class="txt">
                    
                    <input type="text" required="" placeholder="Please input your Email" value="<?php echo $_SESSION['email'];?>" name="email" class="txt">

                     <input type="text" required="" placeholder="Location" value="<?php echo $_SESSION['Address'];?>" name="location" class="txt">

                     <input type="submit" value="Complete Registration" name="submit" class="txt2">
                </form>
            </div>


<!-- form ends --> 

	
</div>

	
</div>






</body>
</html>