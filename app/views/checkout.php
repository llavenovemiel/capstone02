<?php 
	session_start();
	if ((isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 1)) {
		header("Location: error.php");
	}
	$page_title = "Checkout";
	require_once("../partials/start_body.php");
	require_once("../partials/navbar.php");
	require_once("../controllers/connect.php");
 ?>
	<main id="main" class="container-fluid main">
		
		<div class="container my-2 d-flex flex-column justify-content-around">
			<form method="POST" action="../controllers/place_order.php">
				<div class="row">
					<div class="col-12 cart-details">
						<table id="cart-table" class="table">	
							
							<?php require_once("../controllers/move_cart_to_checkout.php") ?>		
							
						</table>
						
					</div>
					
				</div>


				<div class="row">
					<div class="col-12 col-lg-3 offset-lg-9">
						<button type="submit" class="btn btn-block b-offblack login-input">Place Order</button>
					</div>
				</div>
			</form>
		</div>

		<!-- <div class="row px-3">
			
			<form method="POST" action="../controllers/place_order.php">
				<h4>Payment Option</h4>
				<div class="form-group">
					<select id="payment-mode" name="payment-mode" class="form-control">
					<?php 
						$payment_mode_query = "SELECT * FROM payment_modes";
						$payment_modes = mysqli_query($conn, $payment_mode_query);
						foreach ($payment_modes as $payment_mode) { ?>
							<option value=<?php echo $payment_mode["id"]; ?>><?php echo $payment_mode["name"]; ?></option>
					<?php } ?>
					</select>
				</div>
				
				<h4>Delivery Address</h4>
				<input class="form-control" type="text" name="address-line" value="<?php echo $_SESSION['user']['address'] ?>">
				<button type="submit" class="btn btn-block b-offblack login-input">Place Order</button>	


			</form>
			
		</div> -->

	</main>

	<?php require_once("../partials/footer.php") ?>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/toggle_nav.js"></script>
	
	
</body>
</html>