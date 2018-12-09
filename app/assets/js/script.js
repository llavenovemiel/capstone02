const addToCart = () => {
	const cartBtn = $(".add-cart");

	//refactor/update theses sub-functions
	// this prevents input of e and -
	cartBtn.parent().prev().keydown(function(e){
		if (e.keyCode == 69 || e.keyCode == 109 || e.keyCode == 189) {
			e.preventDefault();
		}
	});

	// this prevents negative input to cart
	cartBtn.parent().prev().change(function(){
		if ($(this).val()<0) {
			$(this).val("");
		}
	});

	//this prevents ajax fire from parent item card on click
	cartBtn.parent().prev().click(function(e){
		e.stopPropagation();
	});

	cartBtn.click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		let itemId = $(this).attr("data-id");	
		let itemQuantity = parseInt($(this).parent().prev().val());
		if (itemQuantity) {
			$.ajax({
				url: "../controllers/update_cart.php",
				type: "POST",
				data: {
					itemId: itemId,
					itemQuantity: itemQuantity,
					fromCatalogPage: 1,
				},
				
				success: function(dataFromController) {
					$("#cart-count").html(dataFromController);
				}
			})
		}
		
	});
}

// this assigns filter items function
const assignFilterItems = () => {
	$(".category").each(function(){

		$(this).click(function(e) {
			e.preventDefault();
			const categoryId = $(this).attr("id");
			
			$.ajax({
				url: "../controllers/filter_items.php",
				type: "POST", 
				data: {
					category_id: categoryId
				},
				success: showItems
			});
		})
	})
}

// this assigns search item function
const assignSearchItem = () => {
	$("#search-icon").click(function(e){
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

// this shows all items on page load or refresh
const getAllItems = () => {
	$.ajax({
		url: "../controllers/get_items.php",
		type: "POST",
		data: {},
		success: showItems
	});
}

const goToProduct = () => {
	$(".item-card").click(function(){
		const itemId = $(this).attr("id");	
		window.location.href=`product.php?id=${itemId}`;
	})
}


// this toggles hamburger icon between ☰ and ×
const toggleNavIcon = () => {
	const hamburger = $('.hamburger');
	hamburger.click(()=>{
		if (hamburger.text()=="☰") hamburger.text("×");
		else hamburger.text("☰");
	})
}

// this function changes number to comma format
const formatNum = num => num.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");

// this shows items resulting from search and filter functions
const showItems = (jsondata) => {
	const items = JSON.parse(jsondata);
	let listItems = ``;
	items.forEach(item => {	

		listItems += 	`<div class="card-wrapper col-lg-3 col-12 px-1 pb-1">
							<div class="item-card w3-card" id="${item.id}">
								<div class="container-fluid px-0 mx-0 row">
									<div class="card-top col-12 d-flex flex-row align-items-center justify-content-center px-1">
										<img class="" src="../assets/images/${item.image}">
									</div>
									<div class="card-bottom col-12 px-2">
										<div class="item-details">
											<h3>${item.name}</h3>
											<p class="mb-1">${item.brand}</p>
											<p>&#8369; ` + formatNum(item.price) + `</p>
										</div>
										<form class="form-group input-group col-12">
											<input class="form-control" type="number">
											<div class="input-group-append">
					 							<button data-id=${item.id} class="add-cart btn"><i class="fas fa-shopping-cart"></i></button>	
											</div>
										</form>	
									</div>
								</div>
							</div>
						</div>`		



	})
	$(".items").html(listItems);
	addToCart();
	goToProduct();
}


// run all needed functions when document is ready
$(document).ready(function(){
	
	toggleNavIcon();
	getAllItems();
	assignFilterItems();
	assignSearchItem();
	addToCart();
		
})




