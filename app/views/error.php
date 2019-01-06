<?php 
	$page_title = "Error";
	require_once("../partials/start_body.php");
?>
<?php require_once("../partials/navbar.php") ?>
<body>

<main class="container-fluid main text-center d-flex flex-column justify-content-center">
	<div class="row">
		<div class="offset-lg-2 col-lg-8">
			<h3>You don't have permission to view this page.</h3>
			<a class="btn b-offblack login-input" href="index.php">Return Home</a>
		</div>
	</div>

</main>


	<?php require_once("../partials/footer.php") ?>
	<?php require_once("../partials/end_body.php") ?>

</body>
</html>
