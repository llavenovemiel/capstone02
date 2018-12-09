<?php 
	require_once("connect.php");

	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn, $sql);
	$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

	foreach($categories as $category) {
		echo "<li id= " . $category["id"] . " class=\"category\">" . $category["name"] . "</li>";
	}
					

	// mysqli_close($conn);



?>