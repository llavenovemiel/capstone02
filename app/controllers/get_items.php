<?php 
	require_once("connect.php");
	
	$sql = "SELECT * FROM items";
	$result = mysqli_query($conn, $sql);
	$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

	echo json_encode($items);

?>