$(document).ready(function(){
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
	

	function showItems(jsondata) {
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

})