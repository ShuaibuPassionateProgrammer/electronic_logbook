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
        body {
            background-color: #f4f7fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .page-header {
            margin-top: 60px;
        }

        .page-header h3 {
            font-weight: 700;
            color: #6a06dd;
        }

        .area-card {
            border: none;
            border-radius: 16px;
            background-color: #ffffff;
            padding: 40px 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .area-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .area-card img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .area-card:hover img {
            transform: scale(1.05);
        }

        .area-card .btn {
            border-radius: 30px;
            font-weight: 500;
            padding: 10px 24px;
        }

        a.text-decoration-none {
            text-decoration: none !important;
        }

        @media (max-width: 767px) {
            .area-card {
                padding: 30px 15px;
            }
        }
    </style>
</head>
<body>

    <!-- Page Header -->
    <div class="container text-center page-header">
        <h3 class="text-uppercase">Electronic Logbook for Student Attachment Industrial Work Scheme</h3>
    </div>

    <!-- Role Selection Cards -->
    <main class="container my-5">
        <div class="row justify-content-center">
            
            <!-- Student Area -->
            <div class="col-md-4 col-sm-6 mb-4 d-flex align-items-stretch">
                <a href="student-login.php" class="text-decoration-none w-100">
                    <div class="card area-card text-center">
                        <img src="images/student_image.png" alt="Student Login">
                        <button class="btn btn-outline-primary btn-lg mt-3">Student Area</button>
                    </div>
                </a>
            </div>

            <!-- Supervisor Area -->
            <div class="col-md-4 col-sm-6 mb-4 d-flex align-items-stretch">
                <a href="supervisor-login.php" class="text-decoration-none w-100">
                    <div class="card area-card text-center">
                        <img src="images/supervisor_image.png" alt="Supervisor Login">
                        <button class="btn btn-outline-primary btn-lg mt-3">Supervisor Area</button>
                    </div>
                </a>
            </div>

            <!-- Admin Area -->
            <div class="col-md-4 col-sm-6 mb-4 d-flex align-items-stretch">
                <a href="admin-login.php" class="text-decoration-none w-100">
                    <div class="card area-card text-center">
                        <img src="images/admin_image.png" alt="Admin Login">
                        <button class="btn btn-outline-primary btn-lg mt-3">Admin Area</button>
                    </div>
                </a>
            </div>

        </div>
    </main>

    <?php include('includes/footer'); ?>
</body>
</html>