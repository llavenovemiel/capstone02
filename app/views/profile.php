<?php 
	$page_title = "Profile";
	require_once("../partials/header.php");
	require_once("../controllers/connect.php");
 ?>

<body>

<main class="container-fluid">
	
	<?php require_once("../partials/navbar.php") ?>


	<div class="container section1">
		<div class="row">
			<div class="col-lg-3">
				<div class="list-group" id="list-tab" role="tab-list">
					<a href="#profile" class="list-group-item" data-toggle="list" role="tab">User Information</a>
					<a href="#history" class="list-group-item" data-toggle="list" role="tab">Order History</a>
				</div>
			</div>
			
			<div class="col-lg-7">
				<div class="tab-content">
					<div class="tab-pane" id="profile" role="tabpanel">
						<h3>User Information</h3>
						<span id="update-status"></span>
						<form>
							<div class="form-group">
								<input type="text" name="user_id" id="user-id" class="form-control" value="<?php echo $_SESSION['user']['id']; ?>" hidden readonly>
							</div>
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="text" name="username" id="username" class="form-control" value="<?php echo $_SESSION['user']['username']; ?>">
								<span class="validation text-danger"></span>
							</div>
							<div class="form-group">
								<label for="firstname">First Name:</label>
								<input type="text" name="firstname" id="firstname" class="form-control"value="<?php echo $_SESSION['user']['first_name']; ?>">
								<span class="validation text-danger"></span>
							</div>
							<div class="form-group">
								<label for="lastname">Last Name:</label>
								<input type="text" name="lastname" id="lastname" class="form-control"value="<?php echo $_SESSION['user']['last_name']; ?>">
								<span class="validation text-danger"></span>
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="text" name="email" id="email" class="form-control" value="<?php echo $_SESSION['user']['email']; ?>">
								<span class="validation text-danger"></span>
							</div>
							
							<div class="form-group">
								<label for="old-password">Old Password:</label>
								<input type="password" name="old-password" id="old-password" class="form-control">
								<span class="validation text-danger"></span>
							</div>
							
							<div class="form-group">
								<label for="new-password">New Password:</label>
								<input type="password" name="new-password" id="new-password" class="form-control">
								<span class="validation text-danger"></span>
							</div>

							<div class="form-group">
								<label for="conf-password">Confirm Password:</label>
								<input type="password" name="conf-password" id="conf-password" class="form-control">
								<span class="validation text-danger"></span>
							</div>

							<button type="button" id="update_user" class="btn btn-primary">Update Info</button>

						</form>

					</div>
				</div>
			</div>

		</div>
	</div>	

</main>


	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<script src="../assets/js/update_user.js"></script>

</body>