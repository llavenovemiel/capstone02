<?php 
	require_once("connect.php");
	
	$sql = "SELECT * FROM items";
	$result = mysqli_query($conn, $sql);
	$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

	foreach($items as $item) {
		echo "<a href=\"product.php?id=" . $item["id"] . "\" class=\"col-lg-3 col-12 px-1 py-1 card-wrapper\"><div class=\"d-inline-block\">
				<div class=\"card\">
					<img class=\"card-img-top\" src=\"../assets/images/" . $item["image"] . "\">
					<div class=\"card-body\">
						<p class=\"card-title\">" . $item["name"] . "</p>
					</div>
					<ul class=\"list-group list-group-flush\">
						<li class=\"list-group-item\">" . $item["brand"] . "</li>
						<li class=\"list-group-item\">&#8369; " . number_format($item["price"]) . "</li>
						<li class=\"list-group-item\">Add To Cart</li>
					</ul>
				</div>
			</div></a>";
	}

?>