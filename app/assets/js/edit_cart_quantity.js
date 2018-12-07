$(document).ready(function(){
	$(".item_quantity > input").on("input", function(e){
		let item_id = $(e.target).data("id");
		let new_quantity = parseInt($(e.target).val());
		let price = parseFloat($(e.target).parents("tr").find(".item_price").text());
		// find the ancestor tr of the selected element and find the children with class named item_price
		// console.log("Item to edit" + item_id);
		// console.log("New Quantity" + new_quantity);
		// console.log("Price" + price);
		// console.log("New Subtotal" + price * new_quantity);
		let subtotal = price * new_quantity;
		$(e.target).parents("tr").find(".item_subtotal").text(subTotal);
		$.ajax({
			url:"../controllers/edit_cart_quantity.php",
			type: "POST",
			data: {
				item_id: item_id,
				item_quantity: new_quantity,
				ifFromCatalogPage: 0;
			},
			success: function(data){
				//update the cart quantity in the badge
				$("#cart-count").text(data);
			}
		});
	})
})
