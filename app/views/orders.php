<?php 
	session_start();
	if (!isset($_SESSION["user"]) || (isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 2)) {
		header("Location: error.php");
	}
	$page_title = "Orders";
	require_once("../partials/start_body.php");
	require_once("../partials/navbar.php");
 ?>
	<main id="main" class="container-fluid main pb-2">
		
		<div class="row">
			<h1 class="col-12 text-center font-weight-bold">Orders</h1>
		</div>
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<table id="orders" class="table table-striped">
					<thead>
						<tr>
							<td>Transaction Code</td>
							<td>Status</td>
							<td>Actions</td>
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
									<td class="o-buttons">
										<span class="mb-1 mb-md-0">
											<a href="../controllers/complete_order.php?id=<?php echo $order['id']?>" class="btn btn-secondary login-input">Complete</a>
										</span>
										<span>
											<a href="../controllers/cancel_order.php?id=<?php echo $order['id']?>" class="btn b-offblack login-input">Cancel</a>
										</span>
									</td>
								</tr>

							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

	</main>



	<?php require_once("../partials/footer.php") ?>
	<?php require_once("../partials/end_body.php") ?>
	
	
</body>
</html>