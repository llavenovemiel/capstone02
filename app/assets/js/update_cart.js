// $(document).ready(function(){
// 	const cartBtn = $(".add-cart");

// 	cartBtn.click(function(e) {
// 		// e.stopPropagation();
// 		let item_id = $(e.target).attr("data-id");
// 		let item_quantity = parseInt($(e.target).prev().val());

// 		$.ajax({
// 			url: "../controllers/update_cart.php",
// 			data: {
// 				item_id: item_id,
// 				item_quantity: item_quantity
// 			},
// 			type: "POST",
// 			success: function(dataFromController) {
// 				console.log(dataFromController);

// 				$("#cart-count").html(dataFromController);
// 			}
// 		});
// 	});

// })
