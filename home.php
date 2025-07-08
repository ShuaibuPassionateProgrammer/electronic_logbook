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
        }
        .area-card .btn {
            border-radius: 20px;
        }
    </style>
</head>
<body>

    <!-- Page Header -->
    <div class="text-center mt-5">
        <h3 class="text-uppercase text-primary font-weight-bold">Electronic Logbook for Student Attachment Industrial Work Scheme</h3>
    </div>

    <!-- Role Selection Cards -->
    <div class="container my-5">
        <div class="row justify-content-center">
            
            <!-- Student Area -->
            <div class="col-md-4 mb-4">
                <a href="student-login.php" class="text-decoration-none">
                    <div class="card area-card shadow text-center p-4">
                        <img src="images/student_image.png" alt="Student Login">
                        <div class="mt-3">
                            <button class="btn btn-outline-primary btn-lg w-50">Student Area</button>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Supervisor Area -->
            <div class="col-md-4 mb-4">
                <a href="supervisor-login.php" class="text-decoration-none">
                    <div class="card area-card shadow text-center p-4">
                        <img src="images/supervisor_image.png" alt="Supervisor Login">
                        <div class="mt-3">
                            <button class="btn btn-outline-primary btn-lg w-50">Supervisor Area</button>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Admin Area -->
            <div class="col-md-4 mb-4">
                <a href="admin-login.php" class="text-decoration-none">
                    <div class="card area-card shadow text-center p-4">
                        <img src="images/admin_image.png" alt="Admin Login">
                        <div class="mt-3">
                            <button class="btn btn-outline-primary btn-lg w-50">Admin Area</button>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
<?php include('includes/footer'); ?>