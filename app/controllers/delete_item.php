<?php 
	require("connect.php");
	if(isset($_POST["delete"])) {
		$item_id = $_POST["delete"];
		$sql = "DELETE FROM items WHERE id = '$item_id'";
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		header("Location: ../views/items.php");
	} else {
		echo "You don't have permission to view this page";
	}
	