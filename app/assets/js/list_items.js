// this shows all items on page load or refresh

const formatNum = num => num.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");

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

		listItems += 	`<div class="card-wrapper col-lg-12 col-12 px-1 pb-1">
							<div class="item-card w3-card" id="${item.id}">
								<div class="container-fluid px-0 mx-0 row">
									
									<div class="card-top col-3 d-flex flex-row align-items-center justify-content-center px-1">
										<img class="" src="../assets/images/${item.image}">
									</div>

									<div class="card-bottom-list col-9 px-2">
										<div class="item-details">
											<h3>${item.name}</h3>
											<p class="mb-1">${item.brand}</p>
											<p>&#8369; ` + formatNum(item.price) + `</p>
											<p>${item.description}</p>
										</div>
										
										<form method="post" action="../controllers/delete_item.php" class="offset-5 col-2">
											
											<button data-id=${item.id} class="delete btn btn-block mb-2" name="delete" value=${item.id}>Delete</button>	
				 						</form>
										
										<form method="post" action="../views/edit_item.php" class="offset-5 col-2">
				 							
				 							<button data-id=${item.id} class="edit btn btn-block" name="edit" value=${item.id}>Edit</button>	
										</form>
									</div>
								</div>
							</div>
						</div>`		

	})
	$(".item-list").html(listItems);
}


$(document).ready(function(){
	getAllItems();
})