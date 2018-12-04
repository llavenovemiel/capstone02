<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once("../partials/header.php") ?>
</head>
<body>
	<main class="container-fluid text-center">
		
		<?php require_once("../partials/navbar.php") ?>

		<div class="section1 row align-items-center product-info">
			
			<?php require_once("../controllers/get_product.php") ?>
			

		</div>

	</main>



	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="../assets/js/script.js"></script>
	<script src="../assets/js/filter_items.js"></script>
</body>
</html>