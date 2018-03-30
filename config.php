<?php
$url = parse_url(getenv("mysql://bacf3fbec39377:87d078f2@us-cdbr-iron-east-05.cleardb.net:3306/heroku_adcba3479704be4"));

$server = $url["us-cdbr-iron-east-05.cleardb.net"];
$username = $url["bacf3fbec39377"];
$password = $url["87d078f2"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

//$con = mysqli_connect($server, $username, $password, $db);

if ($conn == false){
echo 'Falied to connect';
}
else{
	echo 'Successfully connect'; 
}

/*$db_host='localhost'; //defining the database host. 
$db_user='root'; //defining the database user. 
$db_name='eventor';//defining the database name.   
$db_pass=''; //defining the password

$con = mysqli_connect($db_host, $db_user, "", $db_name);*/ 
?>