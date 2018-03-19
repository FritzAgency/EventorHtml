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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


      <script src="style.js"></script>
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
        <!--nav class="navbar navbar-inverse" style="border:0px; margin-bottom: 10px;" data-spy="affix" data-offset-top="197">
                <div class="container-fluid" style="background-color: lightgrey; padding: 15px;">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="margin-bottom: 0px; margin-left: 366px; font-weight: bold; font-size: 29px; padding: 13px; color:#4f2684">CREATE EVENT</a>
                  </div>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.html" style="font-weight: bold; padding: 13px; color:#4f2684">Signup</a></li>
                    <li><a href="#" style="font-weight: bold; padding: 13px; color:#4f2684"> | </a></li>
                    <li><a href="#" style="font-weight: bold; padding: 13px; color:#4f2684">Login</a></li>
                  </ul>
                </div>
        </nav-->    
            
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
    
          <!-- registration form starts here -->
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="usr">Event Name:</label>
                <input type="text" class="form-control" id="usr" placeholder="Event Name." name="title">
            </div>
                    
            <div class="form-group">
                <label for="comment">Description:</label>
                <textarea class="form-control" rows="5" id="comment" placeholder="Write a short passage that describes your event" name="description"></textarea>
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

        <!-- add sponsors link starts here -->
        <div class="form-group">
                <button type='button' class="btn btn-secondary" data-toggle="modal" data-target="#popUpWindow" style="margin-top: 17px;" id="venia">Click to add Sponsors Logo</button>
  
                <div class="modal fade" id="popUpWindow">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- header -->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Upload Logo</h3>
                      </div>
                      <!-- body -->
                      <div class="modal-header">
                            <div class="panel panel-default">
                                    <div class="panel-heading"><strong>Upload Files</strong></div>
                                    <div class="panel-body">
                            
                                      <!-- Standar Form -->
                                      <h4>Select files from your computer</h4>
                                      <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
                                        <div class="form-inline">
                                          <div class="form-group">
                                            <input type="file" name="files[]" id="js-upload-files" multiple>
                                          </div>
                                          <button type="submit" class="btn btn-sm btn-primary new" id="js-upload-submit">Upload files</button>
                                        </div>
                                      </form>
                            
                                      <!-- Drop Zone -->
                                      <h4>Or drag and drop files below</h4>
                                      <div class="upload-drop-zone" id="drop-zone">
                                        Just drag and drop files here
                                      </div>
                            
                                      <!-- Upload Finished -->
                                      <div class="js-upload-finished">
                                        <h3>Processed files</h3>
                                        <div class="list-group">
                                          <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>logo1.jpg</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                      </div>
                   </div>
                  </div>
                </div>
        </div>
          <!-- sponsors add link ends here -->

          <!-- organizers name -->
          <div class="form-group">
                <label for="usr">Organizers Name</label>
                <input type="text" class="form-control" id="usr" placeholder="Organizer Name" name="org_name">
            </div>

            <!-- event logo -->
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="orgLogo">Upload Organizer Logo</label>
                           <div class="form-inline">
                                     <div class="form-group">
                                        <input type="file" name="org_logo" id="js-upload-files" multiple>
                                    </div>
                                <button type="submit" class="btn btn-sm btn-secondary new" id="js-upload-submit"> Upload Logo </button>
                            </div>
            </div>

                <!-- event banner upload here -->
                <div class="form-group" style="margin-bottom: 20px;">
                        <label for="orgLogo">Upload Event Banner Here</label>
                            <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
                                        <div class="form-inline">
                                             <div class="form-group">
                                                <input type="file" name="event_flyer" id="js-upload-files" multiple>
                                            </div>
                                        <button type="submit" class="btn btn-sm btn-secondary new" id="js-upload-submit">Upload Banner</button>
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
                    <input type="text" class="form-control" id="street1_id" name="street1" placeholder="Street address, P.O. box, company name, c/o">
                </div>                  
                <!-- column for city and state -->
                <div class="row">
                    <div class="col-sm-6" style="padding-right: 0px;">
                            <div class="form-group"> <!-- State Button -->
                                <label for="state_id" class="control-label">City</label>
                                <select class="form-control" id="state_id">
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
                    <div class="col-sm-6" style="padding-left: 0px;">
                            <div class="form-group"> <!-- State Button -->
                                <label for="state_id" class="control-label">LGA</label>
                                <input type="text" class="form-control" id="street1_id" name="street1" placeholder="Enter LGA here, e.g Alimosho, Ikeja, Victoria Island, etc">                 
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
                                            <input id="timepicker1" type="text" class="form-control input-small" placeholder="Time">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker10'>
                                                    <input type='text' class="form-control" placeholder="Date"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar">
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        <script type="text/javascript">
                                            $(function () {
                                                $('#datetimepicker10').datetimepicker({
                                                    viewMode: 'years',
                                                    format: 'MM/YYYY'
                                                });
                                            });
                                        </script>
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
                                                    <input type='text' class="form-control" placeholder="Date"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar">
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        <script type="text/javascript">
                                            $(function () {
                                                $('#datetimepicker10').datetimepicker({
                                                    viewMode: 'years',
                                                    format: 'MM/YYYY'
                                                });
                                            });
                                        </script>
                                    </div>
                            </div>
                    </div>
            </div>
        </div>
       </div>

       <!-- schedule multiple activties -->
       <div class="form-group">
            <button type='button' class="btn btn-secondary" data-toggle="modal" data-target="#popUpWindow1" style="margin-top: 0px;" id="venia">Click to add Activities</button>

            <div class="modal fade" id="popUpWindow1">
              <div class="modal-dialog" style="width: 50%;">
                <div class="modal-content" style="margin: auto;">
                  <!-- header -->
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">List of Activities Available</h3>
                  </div>
                  <!-- body -->
                  <div class="modal-header">
                        <div class="panel panel-default">
                                <div class="panel-heading"><strong>You can select Mutilple Activies</strong></div>
                                <div class="panel-body">
                                    <div class="row" style="margin: auto;">
                                        <div class="col-sm-3"  style="height:150px; background-color: grey; margin:1px; width: 24%;">
                                            <label for="street1_id" class="control-label">Hicking</label>
                                        </div>
                                        <a href="index.html"><div class="col-sm-3" style="height:150px; background-color: lightgrey; margin:1px; width: 24%;">
                                                <label for="street1_id" class="control-label">Cyclying</label>
                                        </div></a>
                                        <a href="index.html"><div class="col-sm-3" style="height:150px; background-color: grey; margin:1px; width: 24%;">
                                                <label for="street1_id" class="control-label">Fencing</label>
                                        </div></a>
                                        <a href="index.html"><div class="col-sm-3" style="height:150px; background-color: grey; margin:1px; width: 24%;">
                                                <label for="street1_id" class="control-label">Fencing</label>
                                        </div></a>
                                    </div>
                                    <div class="row" style="margin: auto;">
                                            <a href="index.html"><div class="col-sm-3" style="height:150px; background-color: grey; margin:1px;width: 24%; ">
                                                <label for="street1_id" class="control-label">Horse Racing</label>
                                            </div></a>
                                            <a href="index.html"><div class="col-sm-3" style="height:150px; background-color: lightgrey; margin:1px; width: 24%;">
                                                    <label for="street1_id" class="control-label">Dancing</label>
                                            </div></a>
                                            <a href="index.html"><div class="col-sm-3" style="height:150px; background-color: grey; margin:1px; width: 24%;">
                                                    <label for="street1_id" class="control-label">5K Run</label>
                                            </div></a>
                                            <a href="index.html"><div class="col-sm-3" style="height:150px; background-color: grey; margin:1px; width: 24%;">
                                                    <label for="street1_id" class="control-label">Fencing</label>
                                            </div></a>
                                    </div>
                                </div>
                                <button class="btn btn-secondary btn-small" style="margin:auto;">Save Selection</button>
                              </div>
                  </div>
               </div>
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

<div class="form-group">
        <label for="usr">TICKETS</label>
        <div class="row">
            <div class="col-sm-3">
                <button class="btn btn-secondary" id="venia">Free +</button>
            </div>
            <div class="col-sm-3">
                    <button type='button' class="btn btn-secondary" data-toggle="modal" data-target="#popUpWindow2" id="venia">Paid +</button>

                    <div class="modal fade" id="popUpWindow2">
                      <div class="modal-dialog" style="width: 50%;">
                        <div class="modal-content" style="margin: auto;">
                          <!-- header -->
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Tickets</h3>
                          </div>
                          <!-- body -->
                          <div class="modal-header">
                                <div class="panel panel-default">
                                        <div class="panel-heading"><strong>Set Ticket Settings</strong></div>
                                        <div class="panel-body">
                                            <div class="row" style="margin: auto;">
                                                <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="ticket" name="ticket" placeholder="Enter quantity of ticket here">
                                                </div>
                                                <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="ticket" name="street1" placeholder="Enter Price of Ticket here">
                                                </div>
                                            </div>
                                        <button  type="button" class="btn btn-secondary btn-small" style="margin:auto; margin-top: 15px;" id="venia">Save Ticket Settings</button>
                                      </div>
                          </div>
                       </div>
                      </div>
                    </div>
            </div>
            </div>
            <div class="col-sm-3">
                    <button type='button' class="btn btn-secondary" data-toggle="modal" data-target="#popUpWindow2" id="venia">RESERVED +</button>

                    <div class="modal fade" id="popUpWindow2">
                      <div class="modal-dialog" style="width: 50%;">
                        <div class="modal-content" style="margin: auto;">
                          <!-- header -->
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Tickets</h3>
                          </div>
                          <!-- body -->
                          <div class="modal-header">
                                <div class="panel panel-default">
                                        <div class="panel-heading"><strong>Set Ticket Settings</strong></div>
                                        <div class="panel-body">
                                            <div class="row" style="margin: auto;">
                                                <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="ticket" name="ticket" placeholder="Enter Price of Ticket here">
                                                </div>
                                                <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="ticket" name="street1" placeholder="Enter number of reserved">
                                                </div>
                                            </div>
                                        <button  type="button" class="btn btn-secondary btn-small" style="margin:auto; margin-top: 15px;" id="venia">Save Ticket Settings</button>
                                      </div>
                          </div>
                       </div>
                      </div>
                    </div>
            </div>
            </div>
        </div>
    </div>

    <div class="form-group">
            <div class="row">
                    <div class="col-xs-6">
                    <form>
                        <div class="form-group multiple-form-group" data-max=3>
                            <label style="margin-top: 10px;">Social Media Links </label>
            
                            <div class="form-group input-group">
                                <input type="text" name="multiple[]" class="form-control" placeholder="Enter social media link eg. example@facebook.com/example">
                                    <span class="input-group-btn"><button type="button" class="btn btn-default btn-add">+
                                    </button></span>
                            </div>
                        </div>
                    </form>
                    </div>  

    </div>
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
                        <a href="index.html"><button type="submit" class="btn  btn-success" name="submit">SAVE</button></a>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">PREVIEW</button>
                    </div>    

    </div>
    </div>    

        </form>
    </div><!-- /.container -->
    </div>
    <div class="col-sm-5">
        <div style="height: 392px; background-color: grey; font-weight: bold; font-size: 20px; text-align: center; margin-top:50px;">PREVIEW</div>
    </div>
</div>

<!-- script Starts here -->
<script type="text/javascript">
    $('#timepicker1').timepicker();
</script>
</body>
</html>
