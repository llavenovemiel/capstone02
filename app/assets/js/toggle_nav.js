const toggleAccountMenu = () => {
	$(".account").hover(() => {
		$(".account-menu").removeClass("d-none");
	},() => {
		$(".account-menu").addClass("d-none");
	})
}


// this toggles hamburger icon between ☰ and ×
const toggleNavIcon = () => {
	const hamburger = $('.hamburger');
	hamburger.click(()=>{
		if (hamburger.text()=="☰") {
			hamburger.text("×");
			hamburger.css("font-size", "40px");
		} else {
			hamburger.text("☰");
			hamburger.css("font-size", "30px");
		}	
	})
}

// this sets height of main
const setHeight = () => {
	
	const navHt = $("nav").height();
	const footHt = $("footer").height();
	const windowHt = $(window).height();
	let mainMinHt = windowHt - navHt - footHt;
	$("main").css("min-height", mainMinHt);

	if ($(".cart-banner")) {
		$(".container").css("min-height", mainMinHt - $(".cart-banner").height());
	}

	if ($(".banner-2")) {
		
		$(".banner-2").css("min-height", mainMinHt - $(".home-banner").height());
	}


}

$(document).ready(function(){
	toggleNavIcon();
	toggleAccountMenu();
	setHeight();

})

$(window).resize(function() {
	setHeight();
})

$(window).scroll(function() {

   if($(window).scrollTop() >= 1.5 * $(window).height()) {
       $(".back-to-top").addClass("back-to-top-shown");
   } else if  ($(".back-to-top").hasClass("back-to-top-shown")) {
   		$(".back-to-top").removeClass("back-to-top-shown");
   }
   
});
