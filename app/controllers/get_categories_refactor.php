<?php 
	require_once("connect.php");

	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn, $sql);
	$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

	foreach($categories as $category) {
		echo "<option value= " . $category["id"] . ">" . $category["name"] . "</option>";
	}
	

	// mysqli_close($conn);



?>