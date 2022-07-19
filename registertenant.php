<?php
require 'connect.php';
$first = $last = $roomno = $rent = "";

if (isset($_POST['submit'])) {
	$first= $_POST['first'];
	$surname= $_POST['surname'];
	$roomno	=$_POST['roomno'];
	$rent= $_POST['rent'];
	$amountpaid= $_POST['amountpaid'];

	if (!preg_match("/^[A-Za-z]+$/", $first)) {
		echo "<script>alert('First name should have alphabets only.')</script>";
	}
	elseif (!preg_match("/^[A-Za-z]+$/", $surname)) {
		echo "<script>alert('Last name should have alphabets only.')</script>";
	}
	elseif (!preg_match("/^[0-9]+$/", $roomno)){
		echo "<script>alert('Room number should have numbers only.')</script>";	
	}
	elseif(!preg_match("/^[0-9]+(?:\.[0-9]{0,2})?$/", $rent))	{
			echo "<script>alert('Amount is invalid.')</script>";
	}
	elseif(!preg_match("/^[0-9]+(?:\.[0-9]{0,2})?$/", $amountpaid))	{
			echo "<script>alert('Amount is invalid.')</script>";
	}
	else{
		$sql = "INSERT INTO tenants (first, surname, roomno, rent, amountpaid) VALUES ('$first', '$surname', '$roomno', '$rent', '$amountpaid')";

		if($mysqli->query($sql) === TRUE) {
	 		echo "<script>alert('Tenant registered.')</script>";
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
			height: 320px;
			margin: 150px;
			align-content: center;
		}
		label{
		display:block;
		
		font-size: 1.5rem;

		}


	</style>
</head>
<body>
	
	<form method="POST" action="">
	<h3>REGISTER TENANT</h3>
	<label>First name:</label>
	<input type="text" name="first" placeholder="Enter first name" required>
	<label>Surname:</label>
	<input type="text" name="surname" placeholder="Enter  surname" required>
	<label>Room No:</label>
	<input type="text" name="roomno" placeholder="Enter room no" required>
	<label>Monthly rent:</label>
	<input type="text" name="rent" placeholder="Enter rent amount"required>
	<label>Amount paid:</label>
	<input type="text" name="amountpaid" placeholder="Enter rent amount"required>
	
	<input type="submit" name="submit" value="Submit"><br><br>
	<a href="dashboard.html">Back</a>
	</form>
	

</body>
</html>
