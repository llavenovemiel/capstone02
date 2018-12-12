<?php 
	session_start();
	require_once("connect.php");
	
	$id = $_GET["id"];
	$get_user_query = "SELECT role_id FROM users WHERE id = $id";
	$user_to_edit = mysqli_query($conn, $get_user_query);
	$user = mysqli_fetch_assoc($user_to_edit);

	if ($user["role_id"]==2) {
		$update_role_query = "UPDATE users SET role_id = 1 WHERE id = $id";
	} else {
		$update_role_query = "UPDATE users SET role_id = 2 WHERE id = $id";
	}

	mysqli_query($conn, $update_role_query) or die(mysqli_error($conn));

	//update session variable, not needed if appropriated button is disabled 
	// $user_query = "SELECT * FROM users WHERE id = $id";
	// $user_result = mysqli_query($conn, $user_query);
	// $updated_user = mysqli_fetch_assoc($user_result);
	// $_SESSION["user"] = $updated_user;

	mysqli_close($conn);

	header("Location: ../views/users.php"); 
 ?>