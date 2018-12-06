<?php 
	require_once("connect.php");
	
	$sql = "SELECT * FROM items";
	$result = mysqli_query($conn, $sql);
	$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

	foreach($items as $item) {
		echo "<div class=\"col-lg-3 col-12 px-1 py-1 card-wrapper\">
				<a href=\"product.php?id=" . $item["id"] . "\" >
					<div class=\"d-inline-block card\">
						<img class=\"card-img-top\" src=\"../assets/images/" . $item["image"] . "\">
						<div class=\"card-body\">
							<p class=\"card-title\">" . $item["name"] . "</p>
						</div>
						<ul class=\"list-group list-group-flush\">
							<li class=\"list-group-item\">" . $item["brand"] . "</li>
							<li class=\"list-group-item\">&#8369; " . number_format($item["price"]) . "</li>
						</ul>
					</div>
				</a>
				<input type=\"number\">
				<button data-id=". $item["id"] ." class=\"add-cart\">Add To Cart</button>
			</div>";
	}

?>

