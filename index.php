<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Logbook</title>
    <link rel="stylesheet" href="css/bootstrap4.min.css">
    <style>
        header {
            padding: 35px 0;
            text-align: center;
        }
        header img {
            width: 100px;
            height: 100px;
        }
        .carousel-inner img {
            height: 425px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="container">
            <img src="images/student_image.png" alt="Student Logo" class="mb-3">
            <h1 class="text-dark">Electronic Logbook</h1>
            <p class="lead">An electronic logbook for Student Industrial Work Experience Scheme (SIWES)</p>
        </div>
    </header>

    <!-- Carousel Section -->
    <div class="container-fluid">
        <div id="carouselIndicators" class="carousel slide mb-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
                <li data-target="#carouselIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/media/1.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="images/media/3.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="images/media/5.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="images/media/6.jpg" class="d-block w-100" alt="Slide 4">
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

    <!-- Get Started Button -->
    <div class="container text-center mb-5">
        <button class="btn btn-outline-primary btn-lg" id="getStarted">Get Started</button>
    </div>

    <!-- Scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap4.min.js"></script>
    <script>
        document.getElementById("getStarted").addEventListener("click", function () {
            window.location.href = "home.php";
        });
    </script>
</body>
</html>