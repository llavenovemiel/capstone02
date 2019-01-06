<nav class="super-nav container-fluid row mx-0 px-0">

	<div class="logo-container col-8 col-lg-3 text-lg-center align-items-center flex-row d-flex pl-3 pl-md-5">
		<a href="index.php">
			<div class="logo text-center">
				Halpert
				<div class="logo-corner-left"></div>
				<div class="logo-corner-right"></div>
			</div>
		</a>
	</div>
	
	<label class="d-lg-none offset-1 col-3 hamburger mb-0 text-center" for="toggle">&#9776;</label>
	<input class="d-none" type="checkbox" name="" id="toggle">
	<div class="menu offset-lg-1 col-lg-8 px-0 align-items-center flex-lg-row d-lg-flex">

		<?php if(!isset($_SESSION["user"]) || (isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 2)) { ?>
				<a class="nav-item-loc px-3" href="index.php">Home</a>
				<a class="nav-item-loc px-3" href="shop.php">Shop</a>
		<?php } ?>
		
		
		<div class="nav-item-loc-no-hover px-3 account d-none d-lg-block">
			<span>
				<?php 
					if (!isset($_SESSION["user"])) {
						echo "Account";
					} else {
						echo "Welcome, " . $_SESSION["user"]["username"];
					}
				?>
				
			</span>
			<ul class="account-menu px-0 b-offblack pl-3 d-none">
				
				<?php if(!isset($_SESSION["user"])) { ?>
					<li class="py-2">
						<a class="nav-item-loc" href="login.php">Log In</a>
					</li>
					<li class="py-2">
						<a class="nav-item-loc" href="signup.php">Create Account</a>
					</li>
				<?php } else { ?>
					<li class="pt-2 pb-1">
						<a class="nav-item-loc" href="profile.php">Profile</a>
					</li>
					<li class="py-1">
						<a class="nav-item-loc" href="../controllers/logout.php">Log Out</a>
					</li>
				<?php } ?>						
			</ul>
		</div>

		
		<?php if(!isset($_SESSION["user"])) { ?>
				<a class="nav-item-loc px-3 d-lg-none" href="login.php">Log In</a>
				<a class="nav-item-loc px-3 d-lg-none" href="signup.php">Create Account</a>
		<?php } else { ?>
				<a class="nav-item-loc px-3 d-lg-none" href="profile.php">Profile</a>
				<a class="nav-item-loc px-3 d-lg-none" href="../controllers/logout.php">Log Out</a>
		<?php } ?>	

		<?php if(!isset($_SESSION["user"]) || (isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 2)) { ?>
			<a class="nav-item-loc px-3" href="cart.php">Cart
				<?php 
					if (isset($_SESSION["cart"]) && array_sum($_SESSION["cart"]) > 0) {
						echo "<span id=\"cart-count\" class=\"badge badge-light\">";
						echo array_sum($_SESSION["cart"]);
					} else {
						echo "<span id=\"cart-count\">";
						echo "";
					}		
				?>
				</span>
			</a>

			<a class="nav-item-loc px-3" href="">Search</a>

		<?php } ?>

		<?php if (isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 1) { ?>
			<a class="nav-item-loc px-3" href="users.php">Users</a>
			<a class="nav-item-loc px-3" href="orders.php">Orders</a>
			<a class="nav-item-loc px-3" href="items.php">Items</a>
			<a class="nav-item-loc px-3" href="add_item.php">Add Item</a>
		<?php } ?>

	</div>	

	

</nav> 
