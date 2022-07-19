<?php
require 'connect.php';
$apartmentno = $apartmentname = $location = ""; 

if (isset($_POST['submit'])){
	$apartmentno = $_POST['apartmentno'];
	$apartmentname = $_POST['apartmentname'];
	$location = $_POST['location'];

	if (!preg_match("/^[a-zA-Z0-9]+$/", $apartmentno)){
	 echo "<script>alert('Apartment number should contain alphabets and numbers only')</script>";
	}
	elseif (!preg_match("/^[a-zA-Z]+$/",$apartmentname)) {
	 	echo "<script>alert('Apartment name should contain alphabets only.')</script>";
	 	}
	 elseif (!preg_match("/^[a-zA-Z]+$/", $location)){
	 	echo "<script>alert('Location should contain alphabets only.')</script>";

	 }
	 else {
	 	$sql = "INSERT INTO apartments (apartmentno, apartmentname, location) VALUES ( '$apartmentno', '$apartmentname', '$location')";

	 	if($mysqli->query($sql) === TRUE) {
	 		echo "<script>alert('Apartment registered.')</script>";
	 	}else{
	 		echo"Error:" .$sql . "<br>" .$mysqli->error;
	 	}

	 	
	}
	 
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		form{
			background: #D3D3D3;
			width: 200px;
			height: 210px;
			margin: 150px;
			align-content: center;
		}
		label{
		display:block;
		
		font-size: 1.5rem;

		}

		input [type=submit] {
			width: 60%;
			border: none;
			color: white;
			padding: 16px 32px;
			text-decoration: none;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<form method="POST" action="">
		<label>Apartment No:</label>
		<input type="text" name="apartmentno" placeholder="Enter apartment no." required>
		<label>Apartment Name:</label>
		<input type="text" name="apartmentname" placeholder="Enter name" required>
		<label>Location:</label>
		<input type="text" name="location" placeholder="Location" required><br>
		<input type="submit" name="submit" value="Submit"><br><br>
		<a href="dashboard.html">Back</a>
	</form>
	
</body>
</html>