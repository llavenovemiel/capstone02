const signUp = () => {
	
	const firstName = $("#first-name");
	const lastName = $("#last-name");
	const address = $("#address");

	$("#add-user").click((e)=>{
		e.preventDefault();

		if (!firstName.val()) {
			firstName.next().html("Please enter your first name.");
		} else if (!lastName.val()) {
			lastName.next().html("Please enter your last name.");
			firstName.next().html("");
		} else if (!address.val()) {
			address.next().html("Please enter an address.");
			firstName.next().html("");
			lastName.next().html("");
		} else {
			firstName.next().html("");
			lastName.next().html("");
			address.next().html("");

			$.ajax({
				url: "../controllers/create_user.php",
				type: "POST",
				data: {
					firstName: firstName.val(),
					lastName: lastName.val(),
					address: address.val(),
					addUser: true
				},
				success: function(data) {
					window.location.href = "signup.php";	
				}
			})
		}
	})
}

const validatePass = (password) => {
	return /\d/.test(password) && /[a-z]/g.test(password);
}

const goToLogin = () => {
	$("#go-to-login").click((e)=>{
		e.preventDefault();
		
		$.ajax({
				url: "../controllers/create_user.php",
				type: "POST",
				data: {
					goToLogin: true
				},
				success: function() {
					window.location.href = "login.php";
				}
			});
	})
}

const goToNext = () => {
	
	const userName = $("#username");
	const email = $("#email");
	const pword1 = $("#password");
	const pword2 = $("#confirm-password");

	$("#next-page").click((e)=>{
		e.preventDefault();

		if (!userName.val()) {
			userName.next().html("Please enter a username.");
		} else if (!email.val()) {
			email.next().html("Please enter your email address.");
			userName.next().html("");
		} else if (!pword1.val()) {
			pword1.next().html("Please enter a password.");
			userName.next().html("");
			email.next().html("");
		} else if (!validatePass(pword1.val())){
			pword1.next().html("Password must contain at least one number and one letter.");
			userName.next().html("");
			email.next().html("");
		} else if (pword1.val().length < 8) {
			pword1.next().html("Password should be at least 8 characters long.");
			userName.next().html("");
			email.next().html("");
		} else if (!pword2.val()) {
			pword2.next().html("Please enter a password.");
			userName.next().html("");
			email.next().html("");
			pword1.next().html("");
		} else if (pword1.val() !== pword2.val()) {
			pword1.next().html("Please confirm passwords are identical.");
			userName.next().html("");
			email.next().html("");
			pword2.next().html("");
		} else {
			userName.next().html("");
			email.next().html("");
			pword1.next().html("");
			pword2.next().html("");

			$.ajax({
				url: "../controllers/check_user.php",
				type: "POST",
				data: {
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
						window.location.href = "signup.php";
					}
					
				}
			})
		}


	})
}


$(document).ready(function(){
	
	goToNext();
	signUp();
	goToLogin();

})