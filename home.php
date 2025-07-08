<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Selection</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap4.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .area-card img {
            box-shadow: 0 1px 5px rgba(2, 2, 2, 0.2);
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
        .area-card .btn {
            border-radius: 20px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="text-center mt-5">
        <h1 class="text-uppercase text-primary font-weight-bold">
            Electronic Logbook for Student Attachment Industrial Work Scheme
        </h1>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
        <section class="row justify-content-center">

            <!-- Student Area -->
            <div class="col-md-4 mb-4">
                <a href="student-login.php" class="text-decoration-none" aria-label="Student login area">
                    <div class="card area-card shadow text-center p-4 h-100">
                        <img src="images/student_image.png" alt="Student Icon">
                        <div class="mt-3">
                            <button class="btn btn-outline-primary btn-lg w-50">Student Area</button>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Supervisor Area -->
            <div class="col-md-4 mb-4">
                <a href="supervisor-login.php" class="text-decoration-none" aria-label="Supervisor login area">
                    <div class="card area-card shadow text-center p-4 h-100">
                        <img src="images/supervisor_image.png" alt="Supervisor Icon">
                        <div class="mt-3">
                            <button class="btn btn-outline-primary btn-lg w-50">Supervisor Area</button>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Admin Area -->
            <div class="col-md-4 mb-4">
                <a href="admin-login.php" class="text-decoration-none" aria-label="Admin login area">
                    <div class="card area-card shadow text-center p-4 h-100">
                        <img src="images/admin_image.png" alt="Admin Icon">
                        <div class="mt-3">
                            <button class="btn btn-outline-primary btn-lg w-50">Admin Area</button>
                        </div>
                    </div>
                </a>
            </div>

        </section>
    </main>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>

</body>
</html>