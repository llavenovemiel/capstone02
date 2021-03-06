const addToCart = () => {
	const cartBtn = $(".add-cart");

	$(".item-decrease").on("click", function(){
		let quantity = $(this).next().val();
		if (quantity - 1 > 0) {
			quantity--;
		};
		$(this).next().val(quantity);

	});

	$(".item-increase").on("click", function(){
		let quantity = $(this).prev().val();
		quantity++;
		$(this).prev().val(quantity);
	});

	$(".item-decrease").unbind().click(function(){
		let quantity = $(this).next().val();
		if (quantity - 1 > 0) {
			quantity--;
		};
		$(this).next().val(quantity);

	});

	$(".item-increase").unbind().click(function(){
		let quantity = $(this).prev().val();
		quantity++;
		$(this).prev().val(quantity);
	});



	$(".item-quantity-input-shop").on("keypress", function(e){
		
		if (e.keyCode < 48 || e.keyCode > 57) {
			e.preventDefault();
		}
	});

	cartBtn.click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		
		let itemId = $(this).attr("data-id");	
		let itemQuantity = $(this).prev().children("input").val();
		if (itemQuantity > 0) {
			
			$(this).parents(".item-card").children(".notification").fadeIn('slow').delay(2000).fadeOut('slow');
			$(this).html("<i class=\"fas fa-check\"></i>");
			
			let that = $(this);
			setTimeout (function(){
				that.html("<i class=\"fas fa-cart-plus\"></i>");
			},2000);
			
			$(".notif-prod").fadeIn('slow').delay(2000).fadeOut('slow');

			
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

	cartBtn.unbind().click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		
		let itemId = $(this).attr("data-id");	
		let itemQuantity = $(this).prev().children("input").val();
		if (itemQuantity > 0) {
			
			$(this).parents(".item-card").children(".notification").fadeIn('slow').delay(2000).fadeOut('slow');
			$(this).html("<i class=\"fas fa-check\"></i>");
			
			let that = $(this);
			setTimeout (function(){
				that.html("<i class=\"fas fa-cart-plus\"></i>");
			},2000);
			
			$(".notif-prod").fadeIn('slow').delay(2000).fadeOut('slow');
			
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

// const toggleAddToCart = () => {
// 	$(".add-cart-cont").on("click",
// 		function(){
// 			$(this).child().css("display","inline-block");
// 			console.log("in");
// 		}
// 		// , 
// 		// function(){
// 		// 	$(this).child().css("display","none");
// 		// 	$(this).child().next().css("width","50%");
// 		// 	console.log("out");
// 		// }
// 	)
// }

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
	$(".item-name-shop").click(function(){
		const itemId = $(this).attr("id");	
		window.location.href=`product.php?id=${itemId}`;
	})
}


// this function changes number to comma format
const formatNum = num => num.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");

// this shows items resulting from search and filter functions
const showItems = (jsondata) => {
	const items = JSON.parse(jsondata);
	let listItems = ``;
	items.forEach(item => {	

		listItems += 	`<div class="card-wrapper col-lg-4 col-md-6 col-12 pb-2">
							<div class="item-card w3-card container-fluid py-2" id="${item.id}">
								<div class="notification b-offblack">ADDED TO CART</div>
								
									<div class="card-top container-fluid d-flex flex-row align-items-center justify-content-center px-1">
										<img class="img-fluid" src="../assets/images/${item.image}">
									</div>
									<div class="card-bottom container-fluid px-2">
										<div class="item-details">
											<h3 class="item-name-shop" id="${item.id}">${item.name}</h3>
											<p class="mb-1">${item.brand}</p>
											<p>&#8369; ` + formatNum(item.price) + `</p>
										</div>
										<form class="add-cart-form">
											<div class="form-row add-cart-cont align-items-center">
												<div class="quantity-cont-shop">
													<span class="item-decrease b-offblack"><</span>
													<input class="text-center number item-quantity-input-shop" type="text" size="1" value=1>
													<span class="item-increase b-offblack">></span>
												</div>
												
												<button data-id=${item.id} class="add-cart login-input b-offblack mx-0"><i class="fas fa-cart-plus"></i>
												</button>
												
											</div>
										</form>	
									
								</div>
							</div>
						</div>`		

									// <form class="form-group input-group col-12">
									// 		<input class="form-control" type="number">
									// 		<div class="input-group-append">
					 			// 				<button data-id=${item.id} class="add-cart btn"><i class="fas fa-shopping-cart"></i></button>	
									// 		</div>
									// 	</form>	

	})
	$(".items").html(listItems);
	addToCart();
	goToProduct();
}


// run all needed functions when document is ready
$(document).ready(function(){
	
	getAllItems();
	assignFilterItems();
	assignSearchItem();
	addToCart();
	// toggleAddToCart();
		
})




