<?php

require 'connect.php';
$id  = $_REQUEST['id'];
$query = "DELETE FROM tenants WHERE id=$id";
$result = mysqli_query($mysqli, $query) or die(mysql_error());
header("Location: viewtenants.php");
