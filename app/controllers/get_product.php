<?php 
	require_once("connect.php");
	

	if (isset($_GET["id"]) && !empty($_GET["id"])) {
		$id = htmlspecialchars($_GET["id"]);
		$sql = "SELECT * FROM items where id = $id";
		
		$result = mysqli_query($conn, $sql);
		
		if ($result) {
			$item = mysqli_fetch_assoc($result);
			echo
			"<div class=\"col-12 col-lg-4 left\">
					<h2 class=\"font-bold\">". $item["name"] . "</h2>
					<p>". $item["brand"] . "</p>
					<p class=\"text-justify\">". $item["description"] . "</p>
					<p class=\"number font-weight-bold\">Price: &#8369; ". number_format($item["price"]) . "</p>	
					<form class=\"add-cart-form\">
						<div class=\"form-row add-cart-cont align-items-center\">
							<div class=\"quantity-cont-shop\">
								<span class=\"item-decrease prod unbind b-offblack\"><</span>
								<input class=\"text-center number item-quantity-input-shop\" type=\"text\" size=\"1\" value=1>
								<span class=\"item-increase unbind b-offblack\">></span>
							</div>
							
							<button data-id={$id} class=\"add-cart login-input b-offblack mx-0\"><i class=\"fas fa-cart-plus\"></i>
							</button>
							
						</div>
					</form>
			</div>
			
			<div class=\"col-12 col-lg-8 right pr-lg-5 px-4\">
				<h2 class=\"notif-prod b-offblack\">Added to Cart</h2>
				<img class=\"img-fluid\" src=\"../assets/images/". $item["image"] . "\">
			</div>";
		} else {
			echo
			"<div class=\"container-fluid\">
					<h2>No product found.</h2>
						
			</div>";
		}		
	
	} else {
		echo
		"<div class=\"container-fluid\">
				<h2>No product found.</h2>
		</div>";
	}

	mysqli_close($conn);
			
?>