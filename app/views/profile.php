<?php 
	session_start();
	$page_title = "Profile";
	require_once("../partials/start_body.php");
	require_once("../controllers/connect.php");
	require_once("../partials/navbar.php");
 ?>

<main id="main" class="container-fluid main py-2">

	<div class="row">
		<div class="col-lg-3">
			<div id="profile-menu" class="list-group" id="list-tab" role="tab-list">
				<a href="#profile" class="list-group-item" data-toggle="list" role="tab">User Information</a>
				<a href="#history" class="list-group-item" data-toggle="list" role="tab">Order History</a>
			</div>
		</div>
		
		<div class="col-lg-7">
			<div class="tab-content">
				<div class="tab-pane" id="profile" role="tabpanel">
					<h1 class="text-center font-weight-bold">User Information</h1>
					<span id="update-status"></span>
					<form>
						<div class="form-group">
							<input type="text" name="user_id" id="user-id" class="form-control" value="<?php echo $_SESSION['user']['id']; ?>" hidden readonly>
						</div>
						<div class="form-group">
							<label for="username">Username:</label>
							<input type="text" name="username" id="username" class="form-control login-input" value="<?php echo $_SESSION['user']['username']; ?>">
							<span class="validation text-danger"></span>
						</div>
						<div class="form-group">
							<label for="firstname">First Name:</label>
							<input type="text" name="firstname" id="firstname" class="form-control login-input"value="<?php echo $_SESSION['user']['first_name']; ?>">
							<span class="validation text-danger"></span>
						</div>
						<div class="form-group">
							<label for="lastname">Last Name:</label>
							<input type="text" name="lastname" id="lastname" class="form-control login-input"value="<?php echo $_SESSION['user']['last_name']; ?>">
							<span class="validation text-danger"></span>
						</div>
						
						<div class="form-group">
							<label for="lastname">Address:</label>
							<input type="text" name="address" id="address" class="form-control login-input"value="<?php echo $_SESSION['user']['address']; ?>">
							<span class="validation text-danger"></span>
						</div>

						<div class="form-group">
							<label for="email">Email:</label>
							<input type="text" name="email" id="email" class="form-control login-input" value="<?php echo $_SESSION['user']['email']; ?>">
							<span class="validation text-danger"></span>
						</div>
						
						<div class="form-group">
							<label for="old-password">Old Password:</label>
							<input type="password" name="old-password" id="old-password" class="form-control login-input">
							<span class="validation text-danger"></span>
						</div>
						
						<div class="form-group">
							<label for="new-password">New Password:</label>
							<input type="password" name="new-password" id="new-password" class="form-control login-input">
							<span class="validation text-danger"></span>
						</div>

						<div class="form-group">
							<label for="conf-password">Confirm Password:</label>
							<input type="password" name="conf-password" id="conf-password" class="form-control login-input">
							<span class="validation text-danger"></span>
						</div>

						<button type="button" id="update_user" class="btn b-offblack login-input col-lg-3 offset-lg-9 col-12">Update Info</button>

					</form>
				</div>
				<div class="tab-pane" id="history">
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
						</tr>
					</thead>
				
					<tbody>
						<?php require("../controllers/connect.php"); ?>
						<?php 
							$id = $_SESSION["user"]["id"];
							$order_query = "SELECT o.id, o.transaction_code, s.name AS status FROM orders o JOIN statuses s ON (o.status_id = s.id) WHERE o.user_id = $id";
							$orders = mysqli_query($conn, $order_query) ;
							foreach ($orders as $order) { ?>
								<tr>
									<td><?php echo $order["transaction_code"]; ?></td>
									<td><?php echo $order["status"]; ?></td>
								</tr>

							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
				</div>
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
	
	<script src="../assets/js/update_user.js"></script>
	<script src="../assets/js/toggle_nav.js"></script>

</body>