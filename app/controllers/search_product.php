<?php 
	require_once("connect.php");
	
	$searchVal = htmlspecialchars($_POST["searchVal"]);
	$sql = "SELECT * FROM items WHERE name LIKE '%$searchVal%' or brand LIKE '%$searchVal%'";

	$result = mysqli_query($conn, $sql);
	$items = mysqli_fetch_all($result,MYSQLI_ASSOC);
	
	echo json_encode($items);

	mysqli_close($conn);
		
?>