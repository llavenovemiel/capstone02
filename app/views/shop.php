<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once("../partials/header.php") ?>
</head>
<body>
	<main class="container-fluid text-center">
		
		<?php require_once("../partials/navbar.php") ?>

		<div class="section1 row">
			<div class="col-lg-3 left">
				<?php require_once("../controllers/getitems.php"); ?>

				<ul>
					<?php foreach($categories as $category): ?>
						<a id =<?php echo $category["id"]; ?> class="category" href="shop.php?category=<?php echo $category["id"]; ?>">
							<li class="list-group-item">
								<?php echo $category["name"]; ?>
							</li>
						</a>
					<?php endforeach; ?>
				</ul>
				
			</div>
			<div class="col-lg-9 right pr-lg-5 px-4">
				
				<div class="row">
					
					<?php foreach($items as $item): ?>
						<div class="d-inline-block col-lg-3 col-12 px-1 py-1 card-wrapper">
							<div class="card">
								<img class="card-img-top" src=<?php echo "../assets/images/" . $item["image"] ?> alt=<?php echo $item["name"] ?>>
								<div class="card-body">
									<p class="card-title"><?php echo $item["name"] ?></p>
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item"><?php echo $item["brand"] ?></li>
									<li class="list-group-item">&#8369; <?php echo $item["price"] ?></li>
									
								</ul>
							</div>
						</div>
					<?php endforeach; ?>

				</div>




			</div>
		</div>



		


	</main>



	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="../assets/js/script.js"></script>
</body>
</html>