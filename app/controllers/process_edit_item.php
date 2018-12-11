<?php 
	require("connect.php");
	$id = $_POST["id"];
	$name = $_POST["item-name"];
	$brand = $_POST["item-brand"];
	$price = $_POST["item-price"];
	$description = $_POST["item-description"];
	$category_id = $_POST["item-category"];


	if($_FILES["item-img"]["size"] !== 0) {
		
		move_uploaded_file($_FILES["item-img"]["tmp_name"], "../assets/images/".$_FILES["item-img"]["name"]);
		
		$image = $_FILES["item-img"]["name"];

		$sql = "UPDATE items SET name = '$name', brand = '$brand', description ='$description', price = '$price', category_id ='$category_id', image = '$image' WHERE id = '$id'";

	} else {
		$sql = "UPDATE items SET name = '$name', brand = '$brand', description ='$description', price = '$price', category_id ='$category_id' WHERE id = '$id'";
	}

	mysqli_query($conn, $sql) or die(mysqli_error($conn));

	header("Location: ../views/items.php");

 ?>
