<?php $page_title = "Shop" ?>
<?php require_once("../partials/header.php") ?>

<body>
	<main class="container-fluid text-center">
		
		<?php require_once("../partials/navbar.php") ?>

		<div class="section1 row">
			<div class="col-lg-3 left">
	
				<ul class="categories w3-ul w3-card">
					<?php require_once("../controllers/get_categories.php") ?>
				</ul>
				<form class="">
					<div class="input-group w3-card mt-1">
						<input id="search" class="form-control" type="text" placeholder="Search" name="search">
					    <button id="search-icon" class="input-group-append col-2" type="submit"><i class="fas fa-search"></i></button>
					</div>
				</form>
				
				
			</div>

			<div class="col-lg-9 right pr-lg-5">
				<div class="row items">

				</div>
			</div>

		</div>

	</main>



	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	
	<script src="../assets/js/script.js"></script>
	
</body>
</html>