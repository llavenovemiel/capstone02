<?php 
	require_once("connect.php");

	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn, $sql);
	$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

	foreach($categories as $category) {
		echo "<p id= " . $category["id"] . " class=\"list-group-item category\">" . $category["name"] . "</p>";
	}
					

	// mysqli_close($conn);



?>