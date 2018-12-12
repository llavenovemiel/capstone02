<?php 
	require("connect.php");
	$name = $_POST["item-name"];
	$brand = $_POST["item-brand"];
	$price = $_POST["item-price"];
	$description = $_POST["item-description"];
	$category_id = $_POST["item-category"];
	$image = $_FILES["item-img"]["name"];

	move_uploaded_file($_FILES["item-img"]["tmp_name"], "../assets/images/".$_FILES["item-img"]["name"]);

	$sql = "INSERT INTO items (name, brand, description, price, image, category_id) VALUES ('$name', '$brand', '$description', '$price', '$image', '$category_id')";

	mysqli_query($conn, $sql) or die(mysqli_error($conn));

	header("Location: ../views/items.php");

 ?>
