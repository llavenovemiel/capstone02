<?php 
	require("connect.php");
	session_start();

	if (isset($_POST["prevPage"])) {
		$_SESSION["display"] = "page1";
		header("location: ../views/signup.php");
		die();
	}

	$user_name = htmlspecialchars($_POST["userName"]);
	$email = htmlspecialchars($_POST["email"]);
	$password = password_hash(htmlspecialchars($_POST["password"]), PASSWORD_BCRYPT);
	
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
			$_SESSION["temp_user"]["username"] = $user_name;
			$_SESSION["temp_user"]["email"] = $email;
			$_SESSION["temp_user"]["password"] = $password;
			$_SESSION["display"] = "page2";

		}
		
	}
	mysqli_close($conn);