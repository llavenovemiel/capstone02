<?php 
	session_start();
	if (!isset($_SESSION["user"]) || (isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 2)) {
		header("Location: error.php");
	}
	$page_title = "Items";
	require_once("../partials/start_body.php");
	require_once("../partials/navbar.php");
 ?>
	<main id="main" class="container-fluid main">	
		<div class="row">
			<div class="shop-left col-12">
				<div class="category-container b-lgray p-3 pb-1 mt-3 w3-card">
					<h4 class="font-bold">Products</h4>
					<ul class="categories mb-0">
						<?php require_once("../controllers/get_categories.php") ?>
					</ul>
				</div>
				<form class="search-container mt-3">
					<div class="input-group">
						<input id="search" class="form-control append-input w3-card" type="text" placeholder="Search product" name="search">
					    <button id="search-icon" class="input-group-append append w3-card" type="submit">Search</button>
					</div>
				</form>
				
				
			</div>

			<div class="offset-md-4 col-md-8 offset-lg-3 col-lg-9 right pr-lg-5">
				<div class="row items mt-3">

				</div>
			</div>

		</div>

	</main>


	<?php require_once("../partials/footer.php") ?>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	
	
	<script src="../assets/js/list_items.js"></script>
	<script src="../assets/js/toggle_nav.js"></script>
	
</body>
</html>