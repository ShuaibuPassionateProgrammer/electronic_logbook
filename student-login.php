<?php
include('server.php');

if (isset($_SESSION['st_login'])) {
    header('Location: student-dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login | Electronic Logbook</title>

    <!-- Bootstrap & Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Custom Styling -->
    <style>
        body {
            background: #f4f7fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .social-bar {
            background: #6a06dd;
            height: 35px;
        }

        .social-bar a {
            color: #fff;
            margin-right: 15px;
            line-height: 35px;
            font-size: 14px;
        }

        .navbar-brand h3 {
            margin: 0;
            font-weight: 600;
            color: #6a06dd;
        }

        .login-wrapper {
            max-width: 480px;
            margin: 60px auto;
            padding: 40px 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
        }

        .login-wrapper h4 {
            color: #333;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .form-control {
            border-radius: 30px;
        }

        .input-group-text {
            border-radius: 30px 0 0 30px;
        }

        .btn-primary {
            background-color: #6a06dd;
            border: none;
            border-radius: 30px;
            padding: 10px 25px;
            transition: 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #5905bf;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .alert {
            border-radius: 8px;
        }

        .login-wrapper a {
            color: #6a06dd;
        }

        @media (max-width: 576px) {
            .login-wrapper {
                margin: 30px 15px;
                padding: 30px 20px;
            }
        }

        .input-group-lg .form-control {
    height: 48px;
    font-size: 1rem;
    border-radius: 0;
}

.input-group-text {
    background-color: #fff;
    border: 1px solid #ced4da;
    border-right: none;
    padding: 10px 15px;
}

.form-control {
    border: 1px solid #ced4da;
    box-shadow: none;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
    border-color: #6a06dd;
    box-shadow: 0 0 0 0.2rem rgba(106, 6, 221, 0.15);
}

button[type="submit"] {
    font-weight: 500;
}

    </style>
</head>
<body>

    <!-- Top Social Bar -->
    <section class="social-bar text-right px-4">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
    </section>

    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <h3>Electronic Logbook</h3>
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarLinks">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarLinks">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/eleclogbook"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active"><a href="student-login.php"><i class="fa fa-user"></i> Login</a></li>
                    <li><a href="student-register.php"><i class="fa fa-user-plus"></i> Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    

        <div class="panel-body p-4">
    <form action="student-login.php" method="POST" novalidate>
        
        <!-- Matric Number -->
        <div class="form-group mb-4">
            <label for="matricno" class="text-muted">Matric Number</label>
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-end-0 rounded-start">
                        <i class="fa fa-user text-secondary"></i>
                    </span>
                </div>
                <input 
                    type="text" 
                    name="st_matricno" 
                    id="matricno"
                    class="form-control border-start-0 rounded-end" 
                    placeholder="Enter your Matric Number" 
                    required
                >
            </div>
        </div>

        <!-- Password -->
        <div class="form-group mb-4">
            <label for="password" class="text-muted">Password</label>
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-end-0 rounded-start">
                        <i class="fa fa-lock text-secondary"></i>
                    </span>
                </div>
                <input 
                    type="password" 
                    name="st_password" 
                    id="password"
                    class="form-control border-start-0 rounded-end" 
                    placeholder="Enter your Password" 
                    required
                >
            </div>
        </div>

        <!-- Extra Space for Messages -->
        <div class="mb-3" id="message" style="min-height: 20px;">
            <?php /* echo output_message($error); */ ?>
        </div>

        <!-- Submit & Forgot -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="student-reset-password.php" class="small">Forgot Password?</a>
            <button type="submit" name="st_login" class="btn btn-primary px-4 rounded-pill">
                <i class="fa fa-sign-in"></i> Login
            </button>
        </div>
    </form>
</div>


    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>