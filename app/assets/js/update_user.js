

$(document).ready(function(){
	
	$("#update_user").click( function() {
		
		let user_id = $("#user-id").val();
		let username = $("#username").val();
		let firstname = $("#firstname").val();
		let lastname = $("#lastname").val();
		let email = $("#email").val();
		let address = $("#address").val();
		let old_password = $("#old-password").val();
		let new_password = $("#new-password").val();
		let conf_password = $("#conf-password").val();

		function validateUpdateForm(){

			let errors = 0;
			if (!username.length) {
				$("#username").next().text("Provide valid username");
				errors++;
			} else {
				$("#username").next().text("");
			}

			if (!firstname) {
				$("#firstname").next().text("Provide a valid firstname");
				errors++;
			} else {
				$("#firstname").next().text("");
			}

			if (!lastname) {
				$("#lastname").next().text("Provide a valid lastname");
				errors++;
			} else {
				$("#lastname").next().text("");
			}
			
			if (!email) {
				$("#email").next().text("Provide a valid email");
				errors++;
			} else {
				$("#email").next().text("");
			}
			
			if (!$.trim(address)) {
				$("#address").next().text("Provide a valid address");
				errors++;
			} else {
				$("#address").next().text("");
			}

			if (new_password != conf_password) {
				$("#conf-password").next().text("Ensure passwords match.");
				errors++;
			} else if(new_password == old_password) {
				$("#new-password").next().text("New password same as old password.");
				errors++;
			} else {
				$("#conf-password").next().text("");
				$("#new-password").next().text("");
			}

			if (!errors) {
				return true;
			} else {
				return false;
			}

		}


		if (validateUpdateForm()) {
			$.ajax({
				url: "../controllers/update_user.php",
				type: "POST",
				data: {
					user_id: user_id,
					username: username,
					firstname: firstname,
					lastname: lastname,
					email: email,
					address: address,
					old_password: old_password,
					password: new_password
				},
				success: function(data){
					if (data == "Success") {
						$("#update-status").text("Profile updated.")
					} else {
						$("#old-password").next().text("Incorrect password");
					}
				}
			})

			
		}
	}
		

	);

});