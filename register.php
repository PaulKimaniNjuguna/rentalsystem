<?php
require 'connect.php';

$surname = $username = $password = "";
if (isset($_POST['submit'])) {
	$surname = $_POST['surname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!preg_match("/^[a-zA-Z]+$/",$surname)) {
	 	echo "<script>alert('Surname should contain alphabets only.')</script>";
	 }
	


elseif (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
	echo "<script>alert('Username should contain alphabets and numbers only.')</script>";
}


else {
	$sql = "INSERT INTO registration (surname, username, password) VALUES('$surname', '$username', '$password')";

	if($mysqli->query($sql) === TRUE) {
	 		echo "<script>alert('User registered.')</script>";
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
	</style>
</head>
<body>
	<form method="POST" action="">
		<label>Surname:</label>
		<input type="text" name="surname" placeholder="Enter surname" required>
		<label>Username:</label>
		<input type="text" name="username" placeholder="Enter username" required>
		<label>Password:</label>
		<input type="password" name="password" placeholder="Enter password" required><br>
		<input type="submit" name="submit" value="Submit"><br><br>
		<a href="login.php">Login</a>
		
	</form>

</body>
</html>