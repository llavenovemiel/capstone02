const signUp = () => {

	$("#add-user").click((e)=>{
		e.preventDefault();
		
		const firstName = $("#first-name");
		const lastName = $("#last-name");
		const userName = $("#username");
		const email = $("#email");
		const pword1 = $("#password");
		const pword2 = $("#confirm-password");


		if (!firstName.val()) {
			firstName.next().html("Please enter your first name.");
		} else if (!lastName.val()) {
			lastName.next().html("Please enter your last name.");
			firstName.next().html("");
		} else if (!userName.val()) {
			userName.next().html("Please enter a username.");
			firstName.next().html("");
			lastName.next().html("");
		} else if (!email.val()) {
			email.next().html("Please enter an email.");
			firstName.next().html("");
			lastName.next().html("");
			userName.next().html("");
		} else if (!pword1.val()) {
			pword1.next().html("Please enter a password.");
			firstName.next().html("");
			lastName.next().html("");
			userName.next().html("");
			email.next().html("");
		} else if (!pword2.val()) {
			pword2.next().html("Please enter a password.");
			firstName.next().html("");
			lastName.next().html("");
			userName.next().html("");
			email.next().html("");
			pword1.next().html("");
		} else if (pword1.val() !== pword2.val()) {
			console.log('yes');
			pword1.next().html("Please confirm passwords are identical.");
			firstName.next().html("");
			lastName.next().html("");
			userName.next().html("");
			email.next().html("");
			pword2.next().html("");
		} else {
			firstName.next().html("");
			lastName.next().html("");
			userName.next().html("");
			email.next().html("");
			pword1.next().html("");
			pword2.next().html("");

			$.ajax({
				url: "../controllers/create_user.php",
				type: "POST",
				data: {
					firstName: firstName.val(),
					lastName: lastName.val(),
					userName: userName.val(),
					email: email.val(),
					password : pword1.val()
				},
				success: function(data) {
					
					if (data[0] == "U"){
						userName.next().html(data);
					} else if (data[0] == "E") {
						userName.next().html("");
						email.next().html(data);
					} else {
						window.location.href = "login.php";
					}
					
				}
			})
		}


	})
}

$(document).ready(function(){
	
	signUp();

})