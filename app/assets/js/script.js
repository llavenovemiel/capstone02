// window.onscroll = () => {
	
// 	const nav = document.querySelector(".super-nav");
// 	const banner = document.querySelector(".banner");

// 	if (isScrolledUp()) {
// 		if (this.scrollY > 70) {
// 			nav.style.position = "fixed";
// 			nav.style.top = "0";
// 			banner.style.marginTop = "66px";	
			
// 		}


// 	} else {
// 		nav.style.position = "relative";
// 		banner.style.marginTop = "0";
// 	}

// }

// function isScrolledUp (e) {
// 	isTrue = this.oldScroll > this.scrollY;
//   	this.oldScroll = this.scrollY;
//   	return isTrue;
// }


(function(){
	const hamburger = $('.hamburger');
	hamburger.click(()=>{
		// console.log(hamburger.text());
		if (hamburger.text()=="☰") hamburger.text("×");
		else hamburger.text("☰");
	})

})();


$(document).ready(function(){
	
	$.ajax({
		url: "../controllers/get_items.php",
		type: "POST", 
		data: {},
		success: showItems
	});
	

	function showItems(jsondata) {
		const items = JSON.parse(jsondata);
		let listItems = ``;
		items.forEach(item => {
			listItems += `<div class="d-inline-block col-lg-3 col-12 px-1 py-1 card-wrapper">
							<div class="card">
								<img class="card-img-top" src="../assets/images/${item.image}">
								<div class="card-body">
									<p class="card-title">${item.name}</p>
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">${item.brand}</li>
									<li class="list-group-item">&#8369; ${item.price}</li>
								</ul>
							</div>
						</div>`
		})
		$(".items").html(listItems);
	}

	$.ajax({
		url: "../controllers/get_categories.php",
		type: "POST", 
		data: {},
		success: showCategories
	});


	function showCategories(jsondata) {
		const categories = JSON.parse(jsondata);
		let listItems = ``;
		categories.forEach(category => {
			listItems += `<li id=${category.id} class="list-group-item category">
							${category.name}
						</li>`
		})
		$(".categories").html(listItems);
	}

	

})

