<?php 
	require("connect.php");
	session_start();
	
	if (isset($_POST["goToLogin"])) {
		unset($_SESSION["display"]);
	}

	if (isset($_POST["addUser"])) {
		$first_name = htmlspecialchars($_POST["firstName"]);
		$last_name = htmlspecialchars($_POST["lastName"]);
		$user_name = $_SESSION["temp_user"]["username"];
		$address = htmlspecialchars($_POST["address"]);
		$email = $_SESSION["temp_user"]["email"];
		$password =$_SESSION["temp_user"]["password"];
		$role_id = 2;
		$sql = "SELECT * from users WHERE username = '$user_name'";
		$result = mysqli_query($conn, $sql);
		
		$sql = "INSERT INTO users (username, password, email, first_name, last_name, role_id, address) VALUES ('$user_name', '$password', '$email', '$first_name', '$last_name', '$role_id', '$address')";
		
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		unset($_SESSION["temp_user"]);
		$_SESSION["display"] = "page3";
		
		
	}


	mysqli_close($conn);