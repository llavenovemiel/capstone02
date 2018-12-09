const getTotal = () => {
	let total = 0;
	document.querySelectorAll(".subtotal").forEach(subtotal => {
		total += parseFloat(subtotal.innerHTML);
	});
	return total;
}

$(document).ready(function(){
	$(".item-quantity").on("change click", function(e){
		e.preventDefault();
		const itemId = $(this).data("id");
		const itemQuantity = $(this).val();		
		const itemPrice = parseFloat($(this).parent().prev().html());
		let total = 0;

		// update subtotal
		$(this).parent().next().html(itemPrice * itemQuantity);

		// compute and update total
		$("#total").html(getTotal());


		$.ajax({
			url: "../controllers/update_cart.php",
			type: "POST",
			data: {
				itemId: itemId,
				itemQuantity: itemQuantity,
				fromCatalogPage: 0
			},
			success: function(data){
				$("#cart-count").html(data);
			}
		})
	});

	$(".remove-item").on("click", function(e){
		e.preventDefault();
		const itemId = $(this).data("id");
		$(this).parents("tr").remove();

		// compute and update total
		$("#total").html(getTotal());

		$.ajax({
			url: "../controllers/update_cart.php",
			type: "POST",
			data: {
				itemId: itemId,
				itemQuantity: "0",
				fromCatalogPage: 0
			},
			success: function(data){
				$("#cart-count").html(data);
			}
		})
	})



})