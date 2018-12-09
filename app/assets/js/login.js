const login = () => {

	$("#login").click((e)=>{
		e.preventDefault();
		
		
		const userName = $("#user-name");
		const password = $("#password");

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
						window.location.href = "index.php";
					}
					
				}
			})
		}


	})
}

$(document).ready(function(){
	
	login();

})