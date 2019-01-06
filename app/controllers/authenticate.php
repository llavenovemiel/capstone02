<?php 
	require("connect.php");
	session_start();
	
	$user_name = htmlspecialchars($_POST["userName"]);
	$password = htmlspecialchars($_POST["password"]);

	$sql = "SELECT * from users WHERE username = '$user_name' or email = '$user_name'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)) {
		
		$user = mysqli_fetch_assoc($result);
		if(!password_verify($password, $user["password"])) {
			die("Incorrect password.");
		} else {
			$_SESSION["user"] = $user;
		}

	} else {
		die("Unregistered user.");		
	}

	mysqli_close($conn);