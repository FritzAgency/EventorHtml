<?php
/*
Author: Abiodun Adetona
email: adetonaabiodun12@gmail.com
*/

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../index.php"); // Redirecting To Home Page
}
?>