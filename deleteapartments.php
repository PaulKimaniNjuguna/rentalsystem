<?php

require 'connect.php';
$id  = $_REQUEST['id'];
$query = "DELETE FROM apartments WHERE id=$id";
$result = mysqli_query($mysqli, $query) or die(mysql_error());
header("Location: viewapartments.php");