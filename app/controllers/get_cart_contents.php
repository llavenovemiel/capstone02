<?php

require("connect.php");
// session_start();

foreach ($_SESSION["cart"] as $item_id => $item_quantity) {
	$sql = "SELECT * FROM items WHERE id = $item_id";
	$result = mysqli_query($conn, $sql);
	$item = mysqli_fetch_assoc($result);
	echo 	"<tr>
				<td>".$item["name"]."</td>
				<td>".$item["price"]."</td>
				<td><input type=\"number\" value=\"$item_quantity\"></input></td>
				<td>".$item_quantity*$item["price"]."</td>
				<td><button>Remove From Cart</button></td>
			</tr>";
}