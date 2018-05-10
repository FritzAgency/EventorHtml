<!DOCTYPE html>
<html>
<head>
	<title></title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div id="demo1"></div>

<div id="demo2"></div>

<script type="text/javascript">
fetch('https://dev-eventor.herokuapp.com/fritzColor/examples/server.php')
.then(res => console.log(res));	

</script>

<script type="text/javascript">



	$(document).ready(function () {
    // will call refreshPartial every 5 seconds
    setInterval(update, 5000)

});
	function update(){
	$.get("server.php", {}, function(results){
   // will show the HTML from anotherPage.html
   //alert(results); 
    
  //alert($(results).find("#color_type_div").html()); // show "scores" div in results


  var color1 = $(results).find("#color_type_div").html();

  var color2 = $(results).find('#color_type_divv').html();  

$('#demo1').html(color1);  

$('#demo2').html(color2);
// window.setTimeout(update, 10000);//reload after 10 seconds

//  $('color_type_divv').html('Hello World');
});

}

//update(); //call update function
</script>


</body>
</html>
