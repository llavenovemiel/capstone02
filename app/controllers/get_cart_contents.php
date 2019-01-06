<?php

require("connect.php");

if (isset($_SESSION["cart"]) && array_sum($_SESSION["cart"]) > 0) {
	
	$total = 0;
	foreach ($_SESSION["cart"] as $item_id => $item_quantity) {

		$sql = "SELECT * FROM items WHERE id = $item_id";
		$result = mysqli_query($conn, $sql);
		$item = mysqli_fetch_assoc($result);
		$total += $item_quantity*$item["price"];
		echo 	"
				<tr class=\"cart-item\">
					<td class=\"remove-item\" data-id=".$item["id"].">
						<div class=\"remove-item-btn b-offblack\">&times;</div>
					</td>
					<td class=\"item-img\">
						<img class=\"img-fluid\" src=\"../assets/images/".$item["image"]."\">
					</td>
					<td class=\"item-name font-bold\">".$item["name"]."</td>
					<td class=\"item-price number\">&#8369; ".number_format($item["price"])."</td>
					<td class=\"item-quantity\">
						<div class=\"quantity-cont\">
							
							<span class=\"number item-decrease b-offblack\"><</span>
							<input class=\"item-quantity-input text-center number\" type=\"text\" size=\"1\" value=\"$item_quantity\" data-id=".$item["id"]." data-price=".$item["price"].">
							<span class=\"number item-increase b-offblack\">></span>
						</div>
					</td>

					<td class=\"item-subtotal number font-bold\" data-sub=".$item_quantity*$item["price"].">&#8369; ".number_format($item_quantity*$item["price"])."</td>
				</tr>";
	}

	
	echo  	"
			<tr class=\"cart-total\">
				<td id=\"cart-total-text\"class=\"font-bold\"colspan=5>CART TOTAL</td>
				<td id=\"cart-total\" class=\"number-black font-bold\">&#8369; ".number_format($total)."</td>
			</tr>
			";
	echo "</tbody>";


	
}
