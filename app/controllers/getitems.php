<?php 
	require_once("connect.php");
	
	if (isset($_POST["category_id"])) {
		$category_id = $_POST["category_id"];
		$sql = "SELECT * FROM items WHERE category_id = $category_id";
	} else {
		$sql = "SELECT name, price, brand, description, image FROM items";
		
	}

	$result = mysqli_query($conn, $sql);
	$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn, $sql);
	$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

	






?>