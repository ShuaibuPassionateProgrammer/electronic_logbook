
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.min.css">
</head>
<body>
	
    <header>
		<div class="container" style="padding: 35px">
			<img src="images/student_image.png" style="width: 100px; height: 100px;">
			<h1 class="text-center" style="color: #000">Electronic Logbook</h1>
			<p class="text-center">An electronic log book for student attachment industrial work scheme</p>
		</div>
	</header>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				
				<div id="carouselIndicators" class="carousel slide mb-3" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselIndicators" data-slide-to="1"></li>
						<li data-target="#carouselIndicators" data-slide-to="2"></li>
						<li data-target="#carouselIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/media/1.jpg" class="d-block w-100" style="width:100%; height:425px;">
						</div>
						<div class="carousel-item">
							<img src="images/media/3.jpg" class="d-block w-100" style="width:100%; height:425px;">
						</div>
						<div class="carousel-item">
							<img src="images/media/5.jpg" class="d-block w-100" style="width:100%; height:425px;">
						</div>
						<div class="carousel-item">
							<img src="images/media/6.jpg" class="d-block w-100" style="width:100%; height:425px;">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
		</div>
	</div>

	<div class="container pt-5 mb-5">
		<center>
			<button class="btn btn-outline-primary" style="width: 30%;" id="getStarted" name="getStarted">Get Started</button>
		</center>
	</div>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap4.min.js"></script>
	<script>
		var btnGetStarted = document.getElementById("getStarted");
		btnGetStarted.addEventListener("click", function() {
			window.location.href="home.php";
		});
	</script>
</body>
</html>