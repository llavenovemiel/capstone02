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

const formatNum = num => num.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");

// this shows all items on page load or refresh
const getAllItems = () => {
	$.ajax({
		url: "../controllers/get_items.php",
		type: "POST",
		data: {},
		success: showItems
	});
}

const showItems = (jsondata) => {
	const items = JSON.parse(jsondata);
	let listItems = ``;
	items.forEach(item => {	

		// listItems += 	`<div class="card-wrapper col-lg-4 col-md-6 col-12 pb-2">
		// 					<div class="item-card w3-card" id="${item.id}">
		// 						<div class="container-fluid px-0 mx-0 row">
									
		// 							<div class="card-top col-3 d-flex flex-row align-items-center justify-content-center px-1">
		// 								<img class="" src="../assets/images/${item.image}">
		// 							</div>

		// 							<div class="card-bottom-list col-9 p-3">
		// 								<div class="item-details">
		// 									<h3>${item.name}</h3>
		// 									<p class="mb-1">${item.brand}</p>
		// 									<p>&#8369; ` + formatNum(item.price) + `</p>
											
		// 								</div>
										
										// <form method="post" action="../controllers/delete_item.php" class="offset-5 col-2">
											
										// 	<button data-id=${item.id} class="delete btn btn-block mb-2" name="delete" value=${item.id}>Delete</button>	
				 					// 	</form>
										
										// <form method="post" action="../views/edit_item.php" class="offset-5 col-2">
				 							
				 					// 		<button data-id=${item.id} class="edit btn btn-block" name="edit" value=${item.id}>Edit</button>	
										// </form>
		// 							</div>
		// 						</div>
		// 					</div>
		// 				</div>`		

		listItems += 	`<div class="card-wrapper col-lg-4 col-md-6 col-12 pb-2">
							<div class="item-card w3-card container-fluid py-2" id="${item.id}">
								
								<div class="card-top container-fluid d-flex flex-row align-items-center justify-content-center px-1">
									<img class="img-fluid" src="../assets/images/${item.image}">
								</div>
								<div class="card-bottom-items container-fluid px-2">
									<div class="item-details-items">
										<h3 class="item-name-shop" id="${item.id}">${item.name}</h3>
										<p class="mb-1">${item.brand}</p>
										<p>&#8369; ` + formatNum(item.price) + `</p>
									</div>

									<div class="update-items">
										<form method="post" action="../controllers/delete_item.php" class="">
											
											<button data-id=${item.id} class="delete btn btn-block mb-2 login-input b-offblack" name="delete" value=${item.id}>Delete</button>	
				 						</form>
										
										<form method="post" action="../views/edit_item.php" class="">
				 							
				 							<button data-id=${item.id} class="edit btn btn-block login-input" name="edit" value=${item.id}>Edit</button>	
										</form>
									</div>

									
								</div>
							</div>
						</div>`	


	})
	$(".items").html(listItems);
}


$(document).ready(function(){
	getAllItems();
	assignFilterItems();
	assignSearchItem();
})