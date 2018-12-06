<?php 
	require_once("connect.php");
	
	if (isset($_GET["id"]) && !empty($_GET["id"])) {
		$id = htmlspecialchars($_GET["id"]);
		$sql = "SELECT * FROM items where id = $id";
		
		$result = mysqli_query($conn, $sql);
		
		if ($result) {
			$item = mysqli_fetch_assoc($result);
			echo
			"<div class=\"col-lg-4 left\">
					<h2>". $item["name"] . "</h2>
					<p>". $item["brand"] . "</p>
					<p>". $item["description"] . "</p>
					<p>&#8369; ". number_format($item["price"]) . "</p>	
			</div>
			
			<div class=\"col-lg-8 right pr-lg-5 px-4\">
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
		
	
	

	
?>