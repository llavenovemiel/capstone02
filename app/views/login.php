<?php $page_title = "Log In" ?>
<?php require_once("../partials/start_body.php") ?>

	<main class="log-main login-main container-fluid d-flex flex-column justify-content-center">


		<div class="form-container p-4">
			<h1 class="font-weight-bold text-center">LOG IN</h1>
			
			<p class="text-center my-1">
				Log in to your account to start shopping.
			</p>
			<p class="text-center">
				Doesn't have an account? <span class="font-weight-bold">Sign up </span><span class="font-weight-bold here"><a href="signup.php">here</a>.</span>
			</p>
			
			<form class="login-form d-flex flex-column">
		  			
					
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control login-input" id="username" name="username" placeholder="Enter username">
					<span class="text-danger small"></span>
				</div>
					
	  		
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control mb-3 login-input" id="password" name="password" placeholder="Password">
					<span class="text-danger small"></span>
				</div>

				<div class="form-group">
					<div class="form-row">
						
						<div class="offset-3 col-6">
							<button id="login" class="form-control btn btn-block login-input" type="submit" data-destination=
							<?php 
								if (isset($_GET["checkout"])) {
									echo "checkout";
								} else {
									echo "home";
								}
							?>
							>Log In</button>	
						</div>
						
					</div>
				</div>	

			</form>
		</div>



		
	</main>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	
	
	<script src="../assets/js/login.js"></script>

</body>
</html> 
