<?php

require("connect.php");

if (isset($_SESSION["cart"])) {
	// echo 	"
	// 		<thead>
	// 			<td>Item Name</td>	
	// 			<td>Item Price</td>	
	// 			<td>Quantity</td>	
	// 			<td>Subtotal</td>	
	// 		</thead>
	// 		";

	echo "<tbody>";
	
	$total = 0;
	
	foreach ($_SESSION["cart"] as $item_id => $item_quantity) {

		$sql = "SELECT * FROM items WHERE id = $item_id";
		$result = mysqli_query($conn, $sql);
		$item = mysqli_fetch_assoc($result);
		$total += $item_quantity*$item["price"];
		echo 	"
				<tr class=\"cart-item text-center\">
					<td class=\"item-img\">
						<img class=\"img-fluid\" src=\"../assets/images/".$item["image"]."\">
					</td>
					<td class=\"item-name font-bold\">".$item["name"]."</td>
					<td class=\"item-price number\">&#8369; ".number_format($item["price"])."</td>
					<td class=\"item-quantity-checkout number\">Quantity: $item_quantity</td>
					<td class=\"item-subtotal number font-bold\" data-sub=".$item_quantity*$item["price"].">&#8369; ".number_format($item_quantity*$item["price"])."</td>
				</tr>";
	}

	echo	"<tr class=\"cart-total\">
				<td id=\"cart-total-text\"class=\"font-bold\" colspan=3	>TOTAL</td>
				<td id=\"empty-cell\"></td>
				<td id=\"cart-total\" class=\"number-black font-bold\">&#8369; ".number_format($total)."</td>
			</tr>";

	$payment_mode_query = "SELECT * FROM payment_modes";
	$payment_modes = mysqli_query($conn, $payment_mode_query);


	echo 	"<tr>
				<td class=\"font-bold full-width\" colspan=3>PAYMENT METHOD</td>
				<td class=\"font-bold full-width pr-0\" colspan=2>
					<select id=\"payment-mode\" name=\"payment-mode\" class=\"form-control login-input\">";

	foreach ($payment_modes as $payment_mode) {
		echo "<option value=" . $payment_mode["id"]. ">" . $payment_mode["name"] ."</option>";
	}
				
	echo	"</select></td></tr>";

	echo 	"<tr>
				<td class=\"font-bold full-width\" colspan=3>DELIVERY ADDRESS</td>
				<td class=\"full-width pr-0\" colspan=2><input class=\"form-control login-input\" type=\"text\" name=\"address-line\" value=\"" . $_SESSION['user']['address'] . "\"></td>
			</tr>";

	echo "</tbody>";
	
}
