<?php
/*
Author: Abiodun Adetona. 
email: adetonaabiodun12@gmail.com. 
*/

/*$db_host='localhost'; //defining the database host. 
$db_user='root'; //defining the database user. 
$db_name='eventor';//defining the database name.   
$db_pass=''; //defining the password

$con = mysqli_connect($db_host, $db_user, "", $db_name);//establishing the connecting. 

// Check if its connected. 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();//returns error if connection failed. 
  } */


/*$url = parse_url(getenv("mysql://bacf3fbec39377:87d078f2@us-cdbr-iron-east-05.cleardb.net/heroku_adcba3479704be4?reconnect=true"));

$server = $url["us-cdbr-iron-east-05.cleardb.net"];
$username = $url["bacf3fbec39377"];
$password = $url["87d078f2"];*/


//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = "us-cdbr-iron-east-05.cleardb.net";
$username = "bacf3fbec39377";
$password = "87d078f2";
$db = "heroku_adcba3479704be4";

$con = new mysqli($server, $username, $password, $db);

/*$server = "us-cdbr-iron-east-05.cleardb.net";
$username = "bacf3fbec39377";
$password = "87d078f2"; */ 

//$db = substr($url["mysql://bacf3fbec39377:87d078f2@us-cdbr-iron-east-05.cleardb.net/heroku_adcba3479704be4?reconnect=true"], 1);

//$con = mysqli_connect($server, $username, $password);

if ($con == false)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();//returns error if connection failed. 
  } else{
  	echo 'connection succeed'; 
  }


 ?>