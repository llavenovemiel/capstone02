<?php $page_title = "Log In" ?>
<?php require_once("../partials/header.php") ?>

<body>

	<main class="login-form-container container-fluid d-flex align-items-center justify-content-center flex-column">

		<h1 class="font-weight-bold">Log In</h1>

		<form class="login-form">
	  			
				
			<div class="form-group">
				<input type="text" class="form-control " id="user-name" name="userName" placeholder="User Name">
				<span class="text-danger small"></span>
			</div>
				
  		
			<div class="form-group">
				<input type="password" class="form-control mb-3" id="password" name="password" placeholder="Password">
				<span class="text-danger small"></span>
			</div>


    		<button id="login" class="btn btn-block" type="submit">Log In</button>

		</form>
		
	</main>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	
	<script src="../assets/js/login.js"></script>

</body>
</html> 
