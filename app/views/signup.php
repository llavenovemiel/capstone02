<?php $page_title = "Sign Up"; ?>
<?php require_once("../partials/start_body.php"); ?>


	<main class="log-main signup-main container-fluid d-flex flex-column justify-content-center">
		
		<div class="form-container p-4">
			
			<h1 class="font-weight-bold text-center">SIGN UP</h1>
			<p class="text-center">
				<?php 
					if (!isset($_SESSION["display"])) {
						echo "Get moving! Create an account to start shopping.";		
					} else {
						if ($_SESSION["display"] == "page3") {
							echo "Account succesfully created! Log in to start shopping.";
						} else {
							echo "Get moving! Create an account to start shopping.";
						}
					}
				 ?>			
			</p>

			<?php 
				if (!isset($_SESSION["display"])) {
					require("../partials/signup_page1.php");
				} else {
				 	if ($_SESSION["display"] == "page1"){
				 		require("../partials/signup_page1.php");
				 	} else if ($_SESSION["display"] == "page2"){
				 		require("../partials/signup_page2.php");
				 	} else {
				 		require("../partials/signup_page3.php");
				 	}
				 	
				}

			?>
			
		</div>
		
	</main>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
		
	<script src="../assets/js/signup.js"></script>

</body>
</html> 
