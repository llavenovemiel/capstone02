<?php $page_title = "Orders" ?>
<?php require_once("../partials/header.php") ?>
<?php 
	if (!isset($_SESSION["user"]) || (isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 2)) {
		header("Location: error.php");
	}
 ?>


<body>
	<main class="container-fluid text-center">
		
		<?php require_once("../partials/navbar.php") ?>

		<div class="section1">
			<div class="row">
				<h4 class="col-12">Orders Admin Page</h4>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<table class="table table-striped">
						<thead>
							<tr>
								<td>Transaction Code</td>
								<td>Status</td>
								<td colspan="2">Actions</td>
							</tr>
						</thead>
					
						<tbody>
							<?php require("../controllers/connect.php"); ?>
							<?php 
								$order_query = "SELECT o.id, o.transaction_code, s.name AS status FROM orders o JOIN statuses s ON (o.status_id = s.id)";
								$orders = mysqli_query($conn, $order_query) ;
								foreach ($orders as $order) { ?>
									<tr>
										<td><?php echo $order["transaction_code"]; ?></td>
										<td><?php echo $order["status"]; ?></td>
										<td><a href="../controllers/complete_order.php?id=<?php echo $order['id']?>" class="btn btn-success">Complete Order</a></td>
										<td><a href="../controllers/cancel_order.php?id=<?php echo $order['id']?>" class="btn btn-danger">Cancel Order</a></td>
									</tr>

								<?php } ?>
						</tbody>
					</table>
				</div>
			</div>




			
		</div>

	</main>



	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	
</body>
</html>