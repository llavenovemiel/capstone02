<?php

session_start();

function getCartCount() {
	return array_sum($_SESSION["cart"]);
}

$item_id = htmlspecialchars($_POST["item_id"]);
$item_quantity = htmlspecialchars($_POST["item_quantity"]);


if ($item_quantity == "0") {
	unset($_SESSION["cart"][$item_id]);
} else {
	if (isset($_SESSION["cart"][$item_id])) {
		// add to session
		$_SESSION["cart"][$item_id] += $item_quantity;
	} else {
		$_SESSION["cart"][$item_id] = $item_quantity;
	}
}

echo getCartCount();