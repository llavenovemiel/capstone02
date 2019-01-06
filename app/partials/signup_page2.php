<div class="d-flex flex-row align-items-center justify-content-center mb-3">
	<div class="step">1</div>
	<div class="step-line"></div>
	<div class="step step-active">2</div>
	<div class="step-line"></div>
	<div class="step">3</div>
</div>

<form class="signup-form d-flex flex-column" method="post" action="../controllers/check_user.php">

	<div class="form-group">
		<label for="first-name">First Name</label>
		<input type="text" class="form-control login-input" id="first-name" name="firstName" placeholder="Enter your first name" autofocus>
		<span class="text-danger small"></span>
	</div>

	<div class="form-group">
		<label for="last-name">Last Name</label>
		<input type="text" class="form-control login-input" id="last-name" name="lastName" placeholder="Enter your last name">
		<span class="text-danger small"></span>
	</div>

	<div class="form-group">
		<label for="address">Address</label>
		<div class="form-row">
			<div class="col-12">
				<div class="form-group">
					<input type="text" class="form-control login-input" id="address" name="address" placeholder="Enter your address">
					<span class="text-danger small"></span>
				</div>
			</div>
		</div>
	</div>


	<div class="form-group">
		<div class="form-row">
			
			<div class="col-12 col-lg-6">
				<button id="prev-page" class="form-control btn btn-block btn-secondary login-input" type="submit" name="prevPage">Previous</button>	
			</div>
			
			<div class="col-12 col-lg-6 mt-lg-0 mt-2">
				<button id="add-user" class="form-control btn btn-block login-input" type="submit">Submit</button>	
			</div>
			

		</div>
	</div>	

</form>