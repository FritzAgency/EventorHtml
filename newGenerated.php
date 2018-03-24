<!DOCTYPE html>
<html lang="en">
<head>
  <title>Generated page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleaactivepis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="bootstrap3.min.js"></script>
  <script src="bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="bootstrap3.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<style>
.nav-tabs { border-bottom: 4px solid #e3e2e6; }
.nav-tabs > li.active > a, .nav-tabs > li. > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
.nav-tabs > li > a { border: none; color: #000000; }
    .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4f2684 !important; background: transparent; }
    .nav-tabs > li > a::after { content: ""; background: #4f2684; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}

.card {background: #FFF none repeat scroll 0% 0%;}
h1 {
  padding: 50px 0;
  font-weight: 400;
  text-align: center;
}

p {
  margin: 0 0 20px;
  line-height: 1.5;
}

main {

    min-width: 100%;
    max-width: 100%;
    padding: 50px;
    margin: 0 auto;
    background: #fff;

}

section {
  display: none;
  padding: 20px 0 0;
  border-top: 1px solid #ddd;
}

input {
  display: none;
}

label {
  display: inline-block;
  margin: 0 0 -1px;
  padding: 15px 25px;
  font-weight: 600;
  text-align: center;
  color: #bbb;
  border: 2px solid grey;
}

label:before {
  font-family: fontawesome;
  font-weight: normal;
  margin-right: 5px;
}

label:hover {
  color: #888;
  cursor: pointer;
  background-color: lightgrey;
  color: grey;
}

input:checked + label {
  color: #555;
  border: 2px solid grey;
  background-color: grey;
  color: white;
 }

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
{
  display: block;
}

#tab11:checked ~ #content11,
#tab21:checked ~ #content21,
#tab31:checked ~ #content31,
#tab41:checked ~ #content41,
#tab51:checked ~ #content51 {
  display: block;
}

@media screen and (max-width: 650px) {
  label {
    font-size: 0;
  }
  label:before {
    margin: 0;
    font-size: 18px;
  }
}

@media screen and (max-width: 400px) {
  label {
    padding: 15px;
  }
}

.vl {
    border-left: 3px solid grey;
    height: 100%;;
    position: absolute;
   margin-left: -3px;
    top: 0;
}
</style>
<body>

<div class="container" style="background-color: white;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding: 10px; border: 2px solid lightgrey;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/create.png" alt="Los Angeles" style="width:50%; height: 50%; margin: auto;" class="img-responsive">
      </div>

      <div class="item">
        <img src="img/fourth.png" alt="Chicago" style="width:50%; height: 50%; margin: auto;" class="img-responsive">
      </div>
    
      <div class="item">
        <img src="img/fifth.png" alt="New york" style="width:50%; height: 50%; margin: auto;" class="img-responsive">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- event title goes in here -->
<h1 style="text-align: center; margin:auto font-size: 82px; font-weight:bolder;">A Trip To The Hills Of <br>Idanran</h1>
<!-- event title ends here -->

<!-- menu tab for event information -->
<div class="row">
		                                <div class="col-md-12">
                                    <!-- Nav tabs --><div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active" style="width: 275px; padding-left: 10px; text-align: center; font-size: 25px;"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">About</a></li>
                                        <li role="presentation"><a href="#profile" style="width: 275px; padding-left: 10px; margin-left: 5px; text-align: center; font-size: 25px;"aria-controls="profile" role="tab" data-toggle="tab">Sponsors</a></li>
                                        <li role="presentation"><a href="#messages" style="width: 275px; padding-left: 10px; margin-left: 5px; text-align: center; font-size: 25px;" aria-controls="messages" role="tab" data-toggle="tab">Location</a></li>
                                        <li role="presentation"><a href="#settings" style="width: 275px; padding-left: 10px; margin-left: 5px; text-align: center; font-size: 25px;" aria-controls="settings" role="tab" data-toggle="tab">Vendors</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                        <div role="tabpanel" class="tab-pane" id="profile">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                        <div role="tabpanel" class="tab-pane" id="messages">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                        <div role="tabpanel" class="tab-pane" id="settings">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
                                    </div>
</div>
                                </div>
	</div>
<!-- end of menu tab for event information -->

<!-- price tag goes in here -->
<div class="row" style="width: 40%; margin: auto;">
  <div class="col-sm-3">
    
  </div>
  <div class="col-sm-3">
    <h3 style="color: #4f2684; font-weight: bold; font-size: 15px; text-align: center">PRICE</h3>
  </div>
  <div class="col-sm-4">
    <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">1500</h2>
    </div>
    <div class="col-sm-3">
    <div style="border: 2px solid lightgrey; text-align: center; padding: 0px; margin: auto; border-radius: 43px;">

    </div>
  </div>
</div>
</div>
<!-- price tag ends here -->

<!-- become a vendor and register button starts here -->
<div class="row" style="margin-top: 50px; margin-left: auto; margin-right: auto;">
  <div class="col-sm-4" style="margin-left: 47px;">
  <a href="#" style="color: #ffffff; text-decoration: none;"><div style="border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">BECOME A VENDOR</h2>
    </div></a>
  </div>
  <div class="col-sm-3">
    <div style="text-align: center; border-radius: 17px;">
     </div>
</div>
<div class="col-sm-4">
      <a href="#" style="color: #ffffff; text-decoration: none;"><div style="border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">REGISTER</h2>
    </div></a>
</div>
</div>
<!-- become a vendor and register button ends here -->


<!-- menu tabs for media, activity and schedule goes here -->
<main>
  
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1" style="width: 343px; border-radius: 11px;">Avtivities</label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2" style="width: 343px; border-radius: 11px;">Schedule</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3" style="width: 343px; border-radius: 11px;">Media</label>

    
  <section id="content1">
  
  <input id="tab11" type="radio" name="tabs" checked>
  <label for="tab11" style="width: 150px; border-radius: 11px;">Hicking</label>
    
  <input id="tab21" type="radio" name="tabs">
  <label for="tab21" style="width: 150px; border-radius: 11px;">Jogging</label>
    
  <input id="tab31" type="radio" name="tabs">
  <label for="tab31" style="width: 150px; border-radius: 11px;">Running</label>

  <input id="tab41" type="radio" name="tabs">
  <label for="tab41" style="width: 150px; border-radius: 11px;">Gunning</label>

  <input id="tab51" type="radio" name="tabs">
  <label for="tab51" style="width: 150px; border-radius: 11px;">Hunting</label>

    
  <section id="content11">
  <!-- <div style="margin: auto;">
      <img src="img/first1.png" alt="" img="img-responsive">
    </div>
  <div class="row" style="padding: 24; background-color: white; width: 100%; height:100%">
                 <div class="col-sm-8" style="padding: 10px; margin: auto;">
                   hicking
                 </div>
                 

                  <div class="col-sm-4" style="boarder-right: solid 2px grey;">
                  <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">TIME</h2>
                  <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">12:00</h2>
    </div>
    <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684;">-</h2>
                   <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top: 10px;margin-bottom: 10px; width: 50%; margin-left: auto; margin-right: auto;

}">
      <h2 style="font-weight:bold; margin: 5px; font-size: 20px;">12:00</h2>
    </div>

                   
      <a href="#" style="color: #ffffff; text-decoration: none;"><div style="border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
</div> -->
  </section>
    
  <section id="content21">
  <!-- <div style="margin: auto;">
      <img src="img/first1.png" alt="" img="img-responsive">
    </div>
  <div class="row" style="padding: 24; background-color: white; width: 100%; height:100%">
                 <div class="col-sm-8" style="padding: 10px; margin: auto;">
                   Jogging
                 </div>
                 

                  <div class="col-sm-4" style="boarder-right: solid 2px grey;">
                  <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">TIME</h2>
                  <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">12:00</h2>
    </div>
    <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684;">-</h2>
                   <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top: 10px;margin-bottom: 10px; width: 50%; margin-left: auto; margin-right: auto;

}">
      <h2 style="font-weight:bold; margin: 5px; font-size: 20px;">12:00</h2>
    </div>

                   
      <a href="#" style="color: #ffffff; text-decoration: none;"><div style="border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
</div> -->
  </section>
    
  <section id="content31">
  <!-- <div style="margin: auto;">
      <img src="img/first1.png" alt="" img="img-responsive">
    </div>
  <div class="row" style="padding: 24; background-color: white; width: 100%; height:100%">
                 <div class="col-sm-8" style="padding: 10px; margin: auto;">
                   Running
                 </div>
                 

                  <div class="col-sm-4" style="boarder-right: solid 2px grey;">
                  <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">TIME</h2>
                  <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">12:00</h2>
    </div>
    <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684;">-</h2>
                   <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top: 10px;margin-bottom: 10px; width: 50%; margin-left: auto; margin-right: auto;

}">
      <h2 style="font-weight:bold; margin: 5px; font-size: 20px;">12:00</h2>
    </div>

                   
      <a href="#" style="color: #ffffff; text-decoration: none;"><div style="border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
</div> -->
  </section>

  <section id="content41">
  <!-- <div style="margin: auto;">
      <img src="img/first1.png" alt="" img="img-responsive">
    </div>
  <div class="row" style="padding: 24; background-color: white; width: 100%; height:100%">
                 <div class="col-sm-8" style="padding: 10px; margin: auto;">
                   dancing
                 </div>
                 

                  <div class="col-sm-4" style="boarder-right: solid 2px grey;">
                  <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">TIME</h2>
                  <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">12:00</h2>
    </div>
    <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684;">-</h2>
                   <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top: 10px;margin-bottom: 10px; width: 50%; margin-left: auto; margin-right: auto;

}">
      <h2 style="font-weight:bold; margin: 5px; font-size: 20px;">12:00</h2>
    </div>

                   
      <a href="#" style="color: #ffffff; text-decoration: none;"><div style="border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
</div> -->
  </section>

  <section id="content51">
  <!-- <div style="margin: auto;">
      <img src="img/first1.png" alt="" img="img-responsive">
    </div>
  <div class="row" style="padding: 24; background-color: white; width: 100%; height:100%">
                 <div class="col-sm-8" style="padding: 10px; margin: auto;">
                   hunting
                 </div>
                 

                  <div class="col-sm-4" style="boarder-right: solid 2px grey;">
                  <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684; font-size: 20px;margin-bottom: 25px;">TIME</h2>
                  <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top:10px; width: 50%; margin-left: auto; margin-right: auto;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">12:00</h2>
    </div>
    <h2 style="margin-left:auto; margin-right: auto; font-weight: bold; font-weight: bold; text-align: center; color: #4f2684;">-</h2>
                   <div style="border: 3px solid lightgrey; text-align: center; border-radius: 17px; margin-top: 10px;margin-bottom: 10px; width: 50%; margin-left: auto; margin-right: auto;

}">
      <h2 style="font-weight:bold; margin: 5px; font-size: 20px;">12:00</h2>
    </div>

                   
      <a href="#" style="color: #ffffff; text-decoration: none;"><div style="border: 4px solid #bb0b9e; background-color: #4f2684; color: #fff; text-align: center; border-radius: 17px; padding: 10px; margin-top: 50px;">
      <h2 style="font-weight:bold; margin: 10px; font-size: 20px;">SCHEDULE</h2>
    </div></a>
</div> -->
</main>
  </section>
</section>
    
  <section id="content2">
    <img src="img/celine.jpg" alt="">
  </section>
    
  <section id="content3">
    <img src="img/index.png" alt="">
  </section>
    
</main>
<!-- menu tabs for media, activity and schedule goes here  -->


</div>
<!-- container ends here -->

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
</body>
</html>
