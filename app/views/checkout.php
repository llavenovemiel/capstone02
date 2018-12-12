<?php $page_title = "Checkout" ?>
<?php require_once("../partials/header.php") ?>
<?php 
	if ((isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 1)) {
		header("Location: error.php");
	}
 ?>

<body>
	<main class="container-fluid text-center">
		
		<?php require_once("../partials/navbar.php") ?>

		<div class="section1 row">
			<table class="table table-dark mx-5">
				
				<tbody>
					<?php require_once("../controllers/move_cart_to_checkout.php") ?>		
				</tbody>
			</table>
			
		</div>

		<div class="row px-3">
			
			<form method="POST" action="../controllers/place_order.php">
				<input type="text" name="address-line" value="<?php echo $_SESSION['user']['address'] ?>">
				<button type="submit" class="btn btn-block btn-primary">Place Order</button>	
			</form>
			
		</div>

	</main>



	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	
</body>
</html>