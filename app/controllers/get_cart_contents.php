<?php

require("connect.php");
// session_start();

if (isset($_SESSION["cart"])) {
	echo 	"
			<thead>
				<td>Item Name</td>	
				<td>Item Price</td>	
				<td>Quantity</td>	
				<td>Subtotal</td>	
				<td>Action</td>	
			</thead>
			";

	echo "<tbody>";
	
	$total = 0;
	foreach ($_SESSION["cart"] as $item_id => $item_quantity) {
		$sql = "SELECT * FROM items WHERE id = $item_id";
		$result = mysqli_query($conn, $sql);
		$item = mysqli_fetch_assoc($result);
		$total += $item_quantity*$item["price"];
		echo 	"
				<tr>
					<td>".$item["name"]."</td>
					<td>".$item["price"]."</td>
					<td><input class=\"item-quantity\" type=\"number\" value=\"$item_quantity\" data-id=".$item["id"] ."></input></td>
					<td class=\"subtotal\">".$item_quantity*$item["price"]."</td>
					<td><button data-id=".$item["id"]." class=\"remove-item\">Remove From Cart</button></td>
				</tr>";
	}

	echo	"<tr>
				<td colspan=3>Total</td>
				<td id=\"total\">$total</td>
			</tr>";
	echo "</tbody>";


	
}
