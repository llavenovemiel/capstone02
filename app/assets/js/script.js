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
		if (hamburger.text()=="☰") hamburger.text("×");
		else hamburger.text("☰");
	})

})();


function searchItem() {
	$("#searchIcon").click(function(e){
		e.preventDefault();
		const searchVal = $("#search").val();
		console.log(searchVal);

		$.ajax({
			url: "../controllers/search_product.php",
			type: "POST", 
			data: {
				searchVal: searchVal
			},
			success: showItems
		});


	})

}

function showItems(jsondata) {
	console.log(jsondata);
	const items = JSON.parse(jsondata);
	let listItems = ``;
	items.forEach(item => {
		listItems += `<a href="product.php?id=${item.id}" class="col-lg-3 col-12 px-1 py-1 card-wrapper"><div class="d-inline-block">
						<div class="card">
							<img class="card-img-top" src="../assets/images/${item.image}">
							<div class="card-body">
								<p class="card-title">${item.name}</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">${item.brand}</li>
								<li class="list-group-item">&#8369; ${item.price}</li>
								<li class="list-group-item">Add To Cart</li>
							</ul>
						</div>
					</div></a>`
	})
	$(".items").html(listItems);
}


$(document).ready(function(){

	searchItem();

})



