<nav class="super-nav container-fluid row align-items-center mt-2">
			
	<div class="nav-left col-lg-4 text-center col-3">
		
		<input class="d-none" type="checkbox" name="" id="toggle">
		<div class="menu col-lg-12 d-lg-flex flex-lg-row justify-content-lg-between pl-0">


			<?php if(!isset($_SESSION["user"]) || (isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 2)) { ?>
				<a href="index.php">Home</a>
				<a href="shop.php">Shop</a>
				<a href="">Pages</a>
			<?php } ?>

			
			<?php if(!isset($_SESSION["user"])) { ?>
				<a href="login.php">Login</a>
			<?php } else { ?>
				<a href="profile.php">Welcome, <?php echo $_SESSION["user"]["username"]; ?></a>
			<?php } ?>	
			

			<a href="../controllers/logout.php">Log Out</a>

			<?php if(isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 1) {  ?>
				<a href="items.php">Items</a>
				<a href="users.php">Users</a>

			<?php } ?>

		</div>
	</div>

	<div class="nav-center col-lg-4 text-lg-center col-12 px-1">
		<div class="row align-items-center">
			<h2 class="d-inline col-lg-12 col-9"><a href="index.php"><span class="logo mr-2">H</span>Halpert</a></h2>
			<label class="d-lg-none offset-1 col-2 hamburger" for="toggle">&#9776;</label>
		</div>
		
	</div>

	<div class="nav-right offset-lg-1 col-lg-3 d-flex flex-row justify-content-between">
		
		<?php if(!isset($_SESSION["user"]) || (isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 2)) { ?>
			<a href="cart.php">Cart
				<span id="cart-count">
					<?php 
						if (isset($_SESSION["cart"])) {
							echo array_sum($_SESSION["cart"]);
						}				
					?>
				</span>
			</a>

			<a href="">Wishlist</a>
			<a href="">Search</a>

		<?php } ?>

		
	</div>

</nav> 
