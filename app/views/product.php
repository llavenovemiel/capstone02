<?php $page_title = "Product" ?>
<?php require_once("../partials/start_body.php") ?>
<?php require_once("../partials/navbar.php") ?>

<body>
	<main id="main" class="container-fluid text-center main pb-2">
		

		<div class="row align-items-center product-info">
			<?php require_once("../controllers/get_product.php") ?>
		</div>

	</main>

	<?php require_once("../partials/footer.php") ?>


	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	
	<script src="../assets/js/script.js"></script>
	<script src="../assets/js/toggle_nav.js"></script>
</body>
</html>