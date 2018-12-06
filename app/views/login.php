<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once("../partials/header.php") ?>
</head>
<body>
	<main class="container-fluid">
		
		<div class="login-container col-lg-8 col-12 px-0 w3-card">
			<div class="login col-lg-6 d-flex flex-column justify-content-center px-5">
				<form>
					<h2 class="text-center">Login to continue</h2>
					<input class="form-control mt-2"type="text" name="username" placeholder="Username">
					<input class="form-control mt-2"type="email" name="username" placeholder="Email">
					<button id="login-btn" class="btn btn-block mt-2" type="submit">Login</button>
				</form>
			</div>
			<div class="banner col-lg-6 d-none d-lg-block d-xl-none">
			</div>
		</div>	
	</main>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="../assets/js/authenticate.js"></script>
</body>
</html>