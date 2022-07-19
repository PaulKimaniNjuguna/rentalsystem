<?php

	$host = "localhost";
	$db = "rental";
	$username = "root";
	$passw = "";

	//create connection
   $mysqli = new mysqli($host, $username,  $passw,  $db);


	//check connection
if ($mysqli->connect_errno) {
	die("Connection error:" . $mysqli->connect_error);
	
} 