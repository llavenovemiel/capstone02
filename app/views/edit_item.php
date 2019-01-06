<?php 
	session_start();
	if (!isset($_SESSION["user"]) || (isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 2)) {
		header("Location: error.php");
	}
	$page_title = "Edit Item";
	require_once("../partials/start_body.php");
	require_once("../partials/navbar.php");
	require("../controllers/connect.php");
	$id = $_POST["edit"];
	
	$sql = "SELECT * FROM items where id = $id";
	$result = mysqli_query($conn, $sql);

	$item = mysqli_fetch_assoc($result);
 ?>
	<main id="main" class="container-fluid main pb-2">
		

		<div class="row">
			<div class="offset-lg-2 col-lg-8">
				<h1 class="font-weight-bold text-center">Edit Item</h1>

				<form method="post" action="../controllers/process_edit_item.php"  enctype="multipart/form-data">
			  			
						
					<div class="form-group">
						<label for="item-name">Item</label>
						<input type="text" class="form-control login-input" id="item-name" name="item-name" placeholder="Item Name" value="<?php echo $item["name"] ?>">
						<span class="text-danger small"></span>
					</div>
					
					<div class="form-group">
						<label for="item-price">Price</label>
						<input type="number" class="form-control login-input" id="item-price" name="item-price"placeholder="Item Price" value=<?php echo $item["price"] ?>>
						<span class="text-danger small"></span>
					</div>
					
					<div class="form-group">
						<label for="item-brand">Brand</label>
						<input type="text" class="form-control login-input" id="item-brand" name="item-brand" placeholder="Item Brand" value="<?php echo $item["brand"] ?>">
						<span class="text-danger small"></span>
					</div>
					
					<div class="form-group">
						<label for="description">Description</label>
						<textarea id="description" class="form-control" rows="5"  name="item-description" placeholder="Item Description"><?php echo $item["description"] ?></textarea>
					</div>

					<div class="form-group">
						<label for="item-category">Category</label>
						<select id="item-category" class="form-control" name="item-category">
							<?php require_once("../controllers/get_categories_refactor_edit_item.php") ?>
						</select>
					</div>

					<div class="form-group">
						<label for="item-img">Image</label>
						<input type="file" class="form-control" id="item-img" name="item-img">
					</div>


		    		<button id="update-item" class="btn btn-block b-offblack login-input" type="submit" name="id" value=<?php echo $item["id"] ?>>Update Item</button>

				</form>
				
			</div>
			




			
		</div>

	</main>



	<?php require_once("../partials/footer.php") ?>
	<?php require_once("../partials/end_body.php") ?>
	
</body>
</html>