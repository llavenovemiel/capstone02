const getTotal = () => {
	let total = 0;
	document.querySelectorAll(".item-subtotal").forEach(subtotal => {
		total += parseFloat(subtotal.dataset.sub);
	});
	return "&#8369; " + formatNum(total + "");
}

// this function changes number to comma format
const formatNum = num => num.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");

//this applies all necessary changes related with cart item quantity update
const updateCartDetails = (item) => {
	const itemId = item.data("id");		
	const itemQuantity = parseFloat(item.val());	
	const itemPrice = parseFloat(item.data("price"));

	// update subtotal
	const subT = "&#8369; " + formatNum(itemPrice * itemQuantity + "");
	const sub = itemPrice * itemQuantity;

	item.parent().parent().next().html(subT);
	item.parent().parent().next().attr("data-sub", sub);

	// compute and update total
	$("#cart-total").html(getTotal());

	$.ajax({
		url: "../controllers/update_cart.php",
		type: "POST",
		data: {
			itemId: itemId,
			itemQuantity: itemQuantity,
			fromCatalogPage: 0
		},
		success: function(data){
			if (data*1 > 0) {
				$("#cart-count").html(data);					
			} else {
				$("#cart-count").html("");					
			}

		}
	})
}


$(document).ready(function(){
	$(".item-quantity-input").on("change keypress", function(e){
		
		if (e.keyCode < 48 || e.keyCode > 57) {
			e.preventDefault();
		}

		// if ($(this).val() < 1) {
		// 	$(this).val(1);
		// }
		
		const itemId = $(this).data("id");	
		const itemQuantity = parseFloat($(this).val());				
		const itemPrice = parseFloat($(this).data("price"));

		// update subtotal
		const subT = "&#8369; " + formatNum(itemPrice * itemQuantity + "");
		const sub = itemPrice * itemQuantity;

		$(this).parent().parent().next().html(subT);
		$(this).parent().parent().next().attr("data-sub", sub);

		// compute and update total
		$("#cart-total").html(getTotal());

		$.ajax({
			url: "../controllers/update_cart.php",
			type: "POST",
			data: {
				itemId: itemId,
				itemQuantity: itemQuantity,
				fromCatalogPage: 0
			},
			success: function(data){
				if (data*1 > 0) {
					$("#cart-count").html(data);					
				} else {
					$("#cart-count").html("");					
				}

			}
		})

	});

	
	$(".item-decrease").on("click", function(){
		let quantity = $(this).next().val();
		if (quantity - 1 > 0) {
			quantity--;
		};
		$(this).next().val(quantity);

		updateCartDetails($(this).next());
	});
	
	$(".item-increase").on("click", function(){
		let quantity = $(this).prev().val();
		quantity++;
		$(this).prev().val(quantity);

		updateCartDetails($(this).prev());
	});

	$(".remove-item-btn").on("click", function(e){
		e.preventDefault();
		const itemId = $(this).parent().data("id");
		$(this).parents("tr").remove();

		// compute and update total
		$("#cart-total").html(getTotal());

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
				if (data==0) {
					window.location.href = "cart.php";
				}
			}
		})
	})

})