<?php $page_title = "Cart" ?>
<?php require_once("../partials/header.php") ?>
<?php 
	if (!isset($_SESSION["user"]) || (isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 2)) {
		header("Location: error.php");
	}
 ?>


<body>
	<main class="container-fluid text-center">
		
		<?php require_once("../partials/navbar.php") ?>

		<div class="section1 row">
			<div class="offset-lg-3 col-lg-6">
				<h1 class="font-weight-bold">Add Item</h1>

				<form method="post" action="../controllers/process_new_item.php"  enctype="multipart/form-data">
			  			
						
					<div class="form-group">
						<input type="text" class="form-control" id="item-name" name="item-name" placeholder="Item Name">
						<span class="text-danger small"></span>
					</div>
					
					<div class="form-group">
						<input type="number" class="form-control" id="item-price" name="item-price"placeholder="Item Price">
						<span class="text-danger small"></span>
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" id="item-brand" name="item-brand" placeholder="Item Brand">
						<span class="text-danger small"></span>
					</div>
					
					<div class="form-group">
						<textarea class="form-control" rows="5"  name="item-description" placeholder="Item Description"></textarea>
					</div>

					<div class="form-group">
						<select id="item-category" class="form-control" name="item-category">
							<?php require_once("../controllers/get_categories_refactor.php") ?>
						</select>
					</div>

					<div class="form-group">
						<input type="file" class="form-control" id="item-img" name="item-img">
					</div>


		    		<button id="add-item" class="btn btn-block" type="submit">Add Item</button>

				</form>
				
			</div>
			




			
		</div>

	</main>



	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	

	<script src="../assets/js/cart.js"></script>
	
</body>
</html>