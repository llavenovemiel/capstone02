<?php 
	session_start();
	if ((isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 1)) {
		header("Location: error.php");
	}
	$page_title = "Cart";
	require_once("../partials/start_body.php");
	require_once("../partials/navbar.php");
 ?>
	<main id="main" class="container-fluid main px-0">
		<div class="cart-banner">
			<h2 class="cart-text text-center font-weight-bold">CART</h2>
		</div>
		
		<div class="container my-2 d-flex flex-column justify-content-around">
			<div class="row">
				<div class="col-12 cart-details">									
					<table id="cart-table" class="table">
						<tbody>
							<?php require_once("../controllers/get_cart_contents.php") ?>
						</tbody>
					</table>

					<?php if (!isset($_SESSION["cart"]) || array_sum($_SESSION["cart"]) == 0) { ?>
						<h2 class="pb-4 text-center">Your cart is empty.</h2>
					<?php } ?>
					
				</div>				
			</div>
			<div class="row">
				<div class="col-12 col-lg-3">
					<a class="text-white" href="shop.php">
					<button class="btn btn-block btn-secondary login-input">
						Continue Shopping
					</button>
					</a>
				</div>	
				<?php 
					if (isset($_SESSION["cart"]) && array_sum($_SESSION["cart"]) > 0) { ?>

					<div class="col-12 offset-lg-6 col-lg-3 mt-2 mt-lg-0">
						<?php if (isset($_SESSION["user"])) { ?>
							<a class="text-white" href="checkout.php">
							<button class="btn btn-block login-input b-offblack">Proceed to Checkout</button>
							</a>
						<?php } else { ?>
							<a class="text-white" href="login.php?checkout=true">
							<button class="btn btn-block login-input btn-secondary">Log in to Checkout</button>
							</a>
						<?php } ?>
					</div>	
				<?php } ?>
			</div>
		</div>
			
	</main>

	<?php require_once("../partials/footer.php") ?>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	
	<script src="../assets/js/cart.js"></script>
	<script src="../assets/js/toggle_nav.js"></script>
	
</body>
</html>