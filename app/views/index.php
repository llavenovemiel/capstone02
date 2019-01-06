<?php 
	session_start();
	$page_title = "Home";
	require_once("../partials/start_body.php");
	require_once("../partials/navbar.php");
 ?>
<main id="main" class="container-fluid main px-0">
	<div class="home-banner px-5 d-flex flex-column justify-content-center align-items-center align-items-lg-start">
		<h2 class="font-bold text-center">Clean, healthy, instant urban mobility.</h2>
		<a href="shop.php" class="btn b-offblack login-input font-weight-bold">Discover Halpert</a>
	</div>


	<div class="banner-2 text-center b-offblack py-3 px-3">
		<h1>WHY HALPERT?</h1>
		<div class="row">
			<div class="col-12 col-md-4">
				<h4>Great Options</h4>
				<p>We offer an extensive range of products.</p>
				<div><a href="shop.php" class="btn login-input b-lgray text-black">Shop Now</a></div>
			</div>
			<div class="col-12 col-md-4">
				<h4>Great Quality</h4>
				<p>We ensure our service and products are top-notch.</p>
			</div>
			<div class="col-12 col-md-4">
				<h4>Great Promos</h4>
				<p>Sign up and learn of our amazing promos.</p>
				<div><a href="signup.php" class="btn login-input b-lgray text-black">Create Account</a></div>
			</div>
		</div>
	</div>

</main>

<?php require_once("../partials/footer.php") ?>
<?php require_once("../partials/end_body.php") ?>