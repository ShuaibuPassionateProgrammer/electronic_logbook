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

    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .social-bar {
            background: #6a06dd;
            height: 35px;
            line-height: 35px;
            text-align: right;
            padding: 0 20px;
        }

        .social-bar a {
            color: #fff;
            margin-left: 12px;
            font-size: 14px;
        }

        .navbar-brand h3 {
            color: #6a06dd;
            font-weight: 600;
            margin: 0;
        }

        .login-card {
            max-width: 480px;
            margin: 70px auto;
            padding: 40px 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
        }

        .login-card h4 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .form-control {
            border-radius: 30px;
            height: 46px;
            padding-left: 45px;
        }

        .input-group-text {
            border-radius: 30px 0 0 30px;
            background-color: #fff;
            border-right: none;
        }

        .input-group .form-control {
            border-left: none;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.15rem rgba(106, 6, 221, 0.2);
            border-color: #6a06dd;
        }

        .btn-primary {
            background-color: #6a06dd;
            border: none;
            border-radius: 30px;
            padding: 10px 24px;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #5905bf;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .text-link {
            font-size: 14px;
            color: #6a06dd;
        }

        .text-link:hover {
            text-decoration: underline;
        }

        .alert {
            border-radius: 8px;
        }

        @media (max-width: 576px) {
            .login-card {
                margin: 40px 15px;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Top Social Bar -->
    <div class="social-bar">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <h3>Electronic Logbook</h3>
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navLinks">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navLinks">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/eleclogbook"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active"><a href="student-login.php"><i class="fa fa-user"></i> Login</a></li>
                    <li><a href="student-register.php"><i class="fa fa-user-plus"></i> Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Card -->
    <div class="login-card">
        <h4>Student Sign In</h4>

        <?php include('errors.php'); ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['success']; ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>

        <form action="student-login.php" method="POST" novalidate>

            <!-- Matric Number -->
            <div class="form-group mb-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user text-muted"></i></span>
                    </div>
                    <input 
                        type="text" 
                        name="st_matricno" 
                        class="form-control" 
                        placeholder="Matric Number" 
                        required
                    >
                </div>
            </div>

            <!-- Password -->
            <div class="form-group mb-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock text-muted"></i></span>
                    </div>
                    <input 
                        type="password" 
                        name="st_password" 
                        class="form-control" 
                        placeholder="Password" 
                        required
                    >
                </div>
            </div>

            <!-- Footer Actions -->
            <div class="form-footer mb-4">
                <a href="student-reset-password.php" class="text-link">Forgot Password?</a>
                <button type="submit" name="st_login" class="btn btn-primary">
                    <i class="fa fa-sign-in"></i> Login
                </button>
            </div>
        </form>

        <div class="text-center">
            Don't have an account? <a href="student-register.php" class="text-link"><strong>Register here</strong></a>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>