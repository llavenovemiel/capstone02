const addToCart = () => {
	const cartBtn = $(".add-cart");

	//refactor/update this sub-function
	cartBtn.prev().keydown(function(e){
		if (e.keyCode == 69 || e.keyCode == 109 || e.keyCode == 189) {
			e.preventDefault();
		}

		if ($(this).val() < 0){
			$(this).val(0);
		}
	});

	cartBtn.click(function(e) {
		e.stopPropagation();
		
		let item_id = $(this).attr("data-id");	

		let item_quantity = parseInt($(this).prev().val());
		
		$.ajax({
			url: "../controllers/update_cart.php",
			type: "POST",
			data: {
				item_id: item_id,
				item_quantity: item_quantity
			},
			
			success: function(dataFromController) {
				$("#cart-count").html(dataFromController);
			}
		});
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
		// listItems += `<div class="col-lg-3 col-12 px-1 py-1 card-wrapper">
		// 				<a href="product.php?id=${item.id}">
		// 				<div class="d-inline-block card">
							
		// 						<img class="card-img-top" src="../assets/images/${item.image}">
		// 						<div class="card-body">
		// 							<p class="card-title">${item.name}</p>
		// 						</div>
		// 						<ul class="list-group list-group-flush">
		// 							<li class="list-group-item">${item.brand}</li>
		// 							<li class="list-group-item">&#8369; ` + formatNum(item.price) + `</li>
		// 						</ul>
							
		// 				</div>
		// 				</a>
		// 				<input type="number">
		// 				<button data-id=${item.id} class="add-cart">Add To Cart</button>
		// 			</div>`
		
		listItems += `<div class="col-lg-3 col-12 px-1 py-1 card-wrapper">
						<div>
						<div class="d-inline-block card">
							
								<img class="card-img-top" src="../assets/images/${item.image}">
								<div class="card-body">
									<p class="card-title">${item.name}</p>
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">${item.brand}</li>
									<li class="list-group-item">&#8369; ` + formatNum(item.price) + `</li>

								</ul>
								<div class="input-group px-1">
									<input class="form-control" type="number">
									<button data-id=${item.id} class="add-cart btn"><i class="fas fa-shopping-cart"></i></button>	
								</div>
						</div>
						</div>
						
					</div>`							

	})
	$(".items").html(listItems);
	addToCart();

}


// run all needed functions when document is ready
$(document).ready(function(){

	toggleNavIcon();
	assignFilterItems();
	assignSearchItem();
	addToCart();	

})



