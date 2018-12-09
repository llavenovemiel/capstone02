<?php 
	require("connect.php");

	$first_name = $_POST["firstName"];
	$last_name = $_POST["lastName"];
	$user_name = $_POST["userName"];
	$email = $_POST["email"];
	$password = password_hash($_POST["password"], PASSWORD_BCRYPT);

	$sql = "SELECT * from users WHERE username = '$user_name'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)) {
		die("Username already taken.");
	} else {
		$sql = "SELECT * from users WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result)) {
			die("Email already registered.");
		} else {
			$sql = "INSERT INTO users (username, password, email, first_name, last_name) VALUES ('$user_name', '$password', '$email', '$first_name', '$last_name')";
			$result = mysqli_query($conn, $sql);
		}
		
	}
	mysqli_close($conn);