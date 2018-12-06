<?php 
	session_start();
?>

<nav class="super-nav container-fluid row align-items-center mt-2">
			
	<div class="nav-left col-lg-4 text-center col-3">
		
		<input class="d-none" type="checkbox" name="" id="toggle">
		<div class="menu col-lg-12 d-lg-flex flex-lg-row justify-content-lg-between pl-0">
			<a href="">Home</a>
			<a href="">Shop</a>
			<a href="">Pages</a>
			<a href="">Login</a>	
		</div>
	</div>

	<div class="nav-center col-lg-4 text-lg-center col-12 px-1">
		<div class="row align-items-center">
			<h2 class="d-inline col-lg-12 col-9"><a href="#"><span class="logo mr-2">H</span>Halpert</a></h2>
			<label class="d-lg-none offset-1 col-2 hamburger" for="toggle">&#9776;</label>
		</div>
		
	</div>

	<div class="nav-right offset-lg-1 col-lg-3 d-flex flex-row justify-content-between">
		<a href="">Cart
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
	</div>

</nav> 
