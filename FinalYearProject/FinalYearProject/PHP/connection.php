<?php
//Database variables
$server = "127.0.0.1";
$user = "root";
$password = "";
$database = "fyp";

//Try to connect otherwise show appropriate error message
$connection = mysql_connect($server, $user) or die('I cannot connect to the database because: ' . mysql_error());
mysql_select_db($database);
?>