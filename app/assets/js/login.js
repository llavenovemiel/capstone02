const login = () => {

	const userName = $("#username");
	const password = $("#password");
	const destination = $("#login").data("destination");

	$("#login").click((e)=>{
		e.preventDefault();
		

		if (!userName.val()) {
			userName.next().html("Please enter your username.");
		} else if (!password.val()) {
			password.next().html("Please enter your password.");
			userName.next().html("");
		} else {
			userName.next().html("");
			password.next().html("");

			$.ajax({
				url: "../controllers/authenticate.php",
				type: "POST",
				data: {
					userName: userName.val(),
					password : password.val()
				},
				success: function(data) {
					console.log(data);
					if (data == "Incorrect password."){
						userName.next().html("");
						password.next().html(data);
					} else if (data == "Unregistered user.") {
						password.next().html("");
						userName.next().html(data);
					} else {
						if (destination == "checkout") {
							window.location.href = "checkout.php";
						} else {
							window.location.href = "index.php";
						}
					}
					
				}
			})
		}


	})
}

$(document).ready(function(){
	
	login();

})