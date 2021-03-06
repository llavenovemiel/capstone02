$(document).ready(function(){
	$(document).on("click",".item-remove", function(e){
		e.stopPropagation();
		let item_id = $(e.target).data("id");
		// console.log("Item to be deleted " + item_id);
		$.ajax({
			url: "../controllers/update_cart.php",
			type: "POST",
			data: {
				item_id: item_id,
				item_quantity: 0,
				ifFromCatalogPage: 0
			},
			success: function(dataFromController) {
				$(e.target).parents('tr').remove();
				// removes the parent of the target element (entire row)
				$("#cart-count").text(dataFromController);
			}
		});
	});
})

// this is for reference only