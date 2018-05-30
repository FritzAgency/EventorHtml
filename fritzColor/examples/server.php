




<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>tracking.js - color with video</title>
  <link rel="stylesheet" href="assets/demo.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../build/tracking-min.js"></script>

  <script src="../build/build2/dat.gui.min.js"></script>

   <!--<script src="../node_modules/dat.gui/build/dat.gui.min.js"></script>-->
  <!--<script src="assets/stats.min.js"></script>-->
  <!--<script src="assets/color_camera_gui.js"></script>-->

  <script src="assets/stats.min.js"></script>
  <script src="assets/color_camera_gui.js"></script>


  <style>
  /*.demo-container {
    background-color: black;
  }*/

  video, canvas {
    position: absolute;
  }
  </style>
</head>
<body>
  <div class="demo-title">
    <p><a href="http://trackingjs.com" target="_parent">tracking.js</a> － detect certain colors in a video</p>
  </div>

  <div class="demo-frame">
    Yellow:<div id="color_type_div" class="color_type_div"></div>

Cyan:<div id="color_type_divv" class="color_type_divv"> </div>




    <div class="demo-container">
      <video id="video" is="video-color-tracking" target="red" width="600" height="450" camera="true" preload autoplay loop muted controls></video>
      <canvas id="canvas" width="600" height="450" is="canvas-color-tracking" target="red"></canvas>
    </div>
  





<script>




    window.onload = function() {
      var video = document.getElementById('video');
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');

      var tracker = new tracking.ColorTracker();

  var div_cType = document.getElementById('color_type_div');

      var div_cType1 = document.getElementById('color_type_divv');

      var count_blue = 0;


      var count_yellow = 0;
        //var tracker = new tracking.ColorTracker(['yellow', 'r']);


      tracking.track('#video', tracker, { camera: true });

      tracking.ColorTracker.registerColor('blue', function(r, g, b) {
  if (r >= 0 && g >= 0  && b >=128 ) {
    return true;
  }
  return false;
});



   tracking.ColorTracker.registerColor('red', function(r, g, b) {
  if (r >= 237 && g >= 41 && b >= 57) {
    return true;
  }
  return false;
});




      tracker.on('track', function(event) {
        context.clearRect(0, 0, canvas.width, canvas.height);





        event.data.forEach(function(rect) {
          if (rect.color === 'custom') {
            rect.color = tracker.customColor;
          }



          if(rect.color === 'cyan'){
            count_blue++;
            //div_cType1.innerHTML = rect.color + " detected " + count_blue + " times";
            // div_cType1.innerHTML = rect.color + " detected " + count_blue + "X";

             div_cType1.innerHTML =   count_blue;  


          }


          if(rect.color === 'yellow'){
            count_yellow++;
            //div_cType.innerHTML = rect.color + " detected " + count_yellow + " X";
            div_cType.innerHTML = count_yellow;  
            
}




          context.strokeStyle = rect.color;
          context.strokeRect(rect.x, rect.y, rect.width, rect.height);
          context.font = '11px Helvetica';
          context.fillStyle = "#fff";
          context.fillText('x: ' + rect.x + 'px', rect.x + rect.width + 5, rect.y + 11);
          context.fillText('y: ' + rect.y + 'px', rect.x + rect.width + 5, rect.y + 22);
 


var color1 = $('.color_type_div').html(); //first div

var color2 = $('.color_type_divv').html();  //second div

/*
ajax to save into database
*/
  $.ajax({

         type: "POST",
         url: "save.php",
         data: {
                color1: color1, color2: color2
            },
         success: function(data){
              console.log(color2);
         }
});



//console.log(color1);

//console.log(color2);  



        });
      });

     initGUIControllers(tracker);
    };
  </script>

<script>




</script>





</body>
</html>