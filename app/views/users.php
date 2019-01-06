<?php 
	session_start();
	if (!isset($_SESSION["user"]) || (isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] == 2)) {
		header("Location: error.php");
	}
	$page_title = "Users";
	require_once("../partials/start_body.php");
	require_once("../partials/navbar.php");
 ?>
	<main id="main" class="container-fluid main pb-2">
		
		<h1 class="text-center font-weight-bold">Users</h1>	
		
		<div class="table-responsive">
			<table id="users-table" class="table table-striped">
				<thead>
					<tr>
						<td>User Name</td>
						<td>First Name</td>
						<td>Last Name</td>
						<td>Email</td>
						<td>Role</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					<?php require_once("../controllers/connect.php"); ?>
					<?php 
						
						$get_user_details_query
						="SELECT u.id, u.first_name, u.last_name, u.username, u.email, r.name AS role FROM users u JOIN roles r ON (r.id = u.role_id)";
						
						$user_details = mysqli_query($conn, $get_user_details_query); ?>
					
						<?php foreach($user_details as $user) { ?>
						<tr>
							<td><?php echo $user["username"]; ?></td>
							<td><?php echo $user["first_name"]; ?></td>
							<td><?php echo $user["last_name"]; ?></td>
							<td><?php echo $user["email"]; ?></td>
							<td><?php echo $user["role"]; ?></td>
							<td>
								<?php 
									$id = $user["id"];
									if ($user["role"] == "Admin") {
										if ($id == $_SESSION["user"]["id"]) {
								?>
											<span>N/A</span>
								<?php 
										} else {
								 ?>
											<a href="../controllers/grant_admin.php?id=<?php echo $id; ?>" class="btn b-offblack login-input">Revoke Admin</a>
								<?php 
										}
									} else { 
								 ?>	

										<a href="../controllers/grant_admin.php?id=<?php echo $id; ?>" class="btn login-input btn-secondary">Make Admin</a>
								<?php
									} 
								?>
								
								
							</td>
						</tr>

					<?php } ?>
					
				</tbody>
			</table>
		</div>
			
	</main>
	<?php require_once("../partials/footer.php") ?>
	<?php require_once("../partials/end_body.php") ?>
	
	
</body>
</html>