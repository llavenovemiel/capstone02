<?php 
	$page_title = "Confirmation";
	require_once("../partials/start_body.php");

 ?>
<?php require_once("../partials/navbar.php") ?>

 <?php 
	if ((isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 1)) {
		header("Location: error.php");
	}
 ?>
 <body>
	
	<main class="main container-fluid text-center d-flex flex-column justify-content-center">
		<?php 
			if(isset($_SESSION["txn_number"]) && isset($_SESSION["address"])){
			?>
			<div class="row">
				<div class="offset-lg-2 col-lg-8">
					<h3>Reference No.: <?php echo $_SESSION["txn_number"] ?></h3>
					<h3>Shipped to: <?php echo $_SESSION["address"] ?></h3>
					<p>Thank you for shopping! Your order is now being processed.</p>
					<a href="shop.php" class="btn b-offblack login-input">Continue Shopping</a>
					<?php 
					unset($_SESSION["txn_number"]);
					unset($_SESSION["address"]);
					 ?>
				</div>
			</div>
			
		<?php
			}
		 ?>		

	</main>	

	<?php require_once("../partials/footer.php") ?>
	<?php require_once("../partials/end_body.php") ?>

</body>
</html>

	
</body>

