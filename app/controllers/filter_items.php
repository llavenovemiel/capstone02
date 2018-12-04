<?php 
	require("connect.php");

		$categoryId = $_POST["category_id"];
		$sql = "SELECT * FROM items WHERE category_id = $categoryId";
		$result = mysqli_query($conn, $sql);
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

		echo json_encode($items);

	

		

