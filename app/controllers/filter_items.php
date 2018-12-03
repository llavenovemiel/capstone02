<?php 
	require("connect.php");

		$categoryId = $_POST["category_id"];
		$sql = "FILTER * FROM items WHERE category_id = $categoryId";
		$result = mysqli_query($conn, $sql);
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

		if ($items) {
			echo json_encode($items);
		}
		

