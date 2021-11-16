<?

require('dataArray.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
	
	<?

	require('config/style.php');
	require('config/script.php');

	?>
	
</head>
<body>
	
	<?

	require('komponen/navbar.php');

	?>

	<!--carousel indicator-->
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		
		<!--carousel indicator-->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>

		<!--carousel inner-->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/sun.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Carousel Slide Pertama</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
			</div>

			<div class="carousel-item">
				<img src="img/flow.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Carousel Slide Kedua</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
			</div>

			<div class="carousel-item">
				<img src="img/img.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Carousel Slide Ketiga</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
			</div>
		</div>

		<!--carousel navigation-->
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>

		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<?

	// include : jalan terus walau error
	// require : berhenti ketika error

	require('komponen/fitur.php');

	require('komponen/blog.php');
	?>
	
</body>
</html>
