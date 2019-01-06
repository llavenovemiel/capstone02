<div class="d-flex flex-row align-items-center justify-content-center mb-3">
	<div class="step step-active">1</div>
	<div class="step-line"></div>
	<div class="step">2</div>
	<div class="step-line"></div>
	<div class="step">3</div>
</div>

<form class="signup-form d-flex flex-column">

	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control login-input" id="username" name="userName" placeholder="Enter username" autofocus value="<?php 
			if (isset($_SESSION["temp_user"])) {
				echo $_SESSION["temp_user"]["username"];
			}
		 ?>">
		
		<span class="text-danger small"></span>
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control login-input" id="email" name="email" placeholder="Enter email" value="<?php 
			if (isset($_SESSION["temp_user"])) {
				echo $_SESSION["temp_user"]["email"];
			}
		 ?>">
		
		<span class="text-danger small"></span>
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<div class="form-row">
			<div class="col-12 col-lg-6">
				<div class="form-group">
					<input type="password" class="form-control login-input" id="password" name="password" placeholder="Enter password">
					<span class="text-danger small"></span>
				</div>
			</div>

			<div class="col-12 col-lg-6">
				<div class="form-group">
					<input type="password" class="form-control login-input" id="confirm-password" name="confirmPassword" placeholder="Confirm Password">
					<span class="text-danger small"></span>
				</div>
			</div>
		</div>
		
	</div>
	<div class="form-group">
		<div class="form-row">
			
			<div class="col-12 col-lg-6 offset-lg-6">
				<button id="next-page" class="form-control btn btn-block btn-secondary login-input" type="submit">Next</button>	
				
			</div>
		</div>
	</div>	

</form>