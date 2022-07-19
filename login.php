<?php
require 'connect.php';
$username = $password = "";

if (isset($_POST['submit']))
{
	$username =$_POST['username'];
	$password = $_POST['password'];
	 if ($username != "" && $password != ""){

        $sql = "select count(*) as cntUser from registration where username='".$username."' and password='".$password."'";
        $result = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
            header('Location: dashboard.html');
        }else{
            echo "Invalid username and password";
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
	<form action="dashboard.html">
		<label>Username:</label>
		<input type="text" name="username" placeholder="Enter username" required>
		<label>Password:</label>
		<input type="password" name="password" placeholder="Enter password" required><br>
		<input type="submit" name="submit" value="Login"><br><br>
		<a href="register.php">Not yet registered? Register here</a>
	</form>

</body>
</html>