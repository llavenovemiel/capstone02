<?php 
	session_start();

	$user_id = $_POST["user_id"];
	$new_username = $_POST["username"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$old_password = $_POST["old_password"];
	$new_password = password_hash($_POST["password"], PASSWORD_BCRYPT);

	if(!password_verify($old_password, $_SESSION["user"]["password"])) {
		echo "Incorrect password";
	} else {
		require_once("connect.php");
		$sql_query = "UPDATE users SET username = '$new_username', first_name = '$firstname', last_name ='$lastname', email= '$email', password = '$new_password', address = '$address'  WHERE id = $user_id";
		$result = mysqli_query($conn, $sql_query);
		
		$sql_query2 = "SELECT * FROM users WHERE id = '$user_id'";
		$result2 = mysqli_query($conn, $sql_query2);
		$_SESSION["user"] = mysqli_fetch_assoc($result2);
		mysqli_close($conn);
		echo "Success";
	}

 ?>