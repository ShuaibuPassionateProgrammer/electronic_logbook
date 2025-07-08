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

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background: linear-gradient(135deg, #f9f9ff, #edf1f7);
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 15px;
        }

        .login-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 40px 35px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            max-width: 450px;
            width: 100%;
        }

        .login-card h4 {
            font-weight: 600;
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            position: relative;
            margin-bottom: 24px;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .form-control {
            height: 48px;
            padding-left: 45px;
            border-radius: 30px;
            border: 1px solid #ced4da;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #6a06dd;
            box-shadow: 0 0 0 0.2rem rgba(106, 6, 221, 0.1);
        }

        .btn-login {
            width: 100%;
            border-radius: 30px;
            background-color: #6a06dd;
            color: white;
            padding: 12px;
            font-weight: 500;
            border: none;
            transition: background 0.3s ease;
        }

        .btn-login:hover {
            background-color: #5804c2;
        }

        .text-link {
            display: inline-block;
            margin-top: 12px;
            font-size: 14px;
            color: #6a06dd;
            text-decoration: none;
        }

        .text-link:hover {
            text-decoration: underline;
        }

        .alert {
            border-radius: 8px;
            font-size: 14px;
        }

        .form-footer {
            margin-top: 20px;
            text-align: center;
        }

        .logo-text {
            font-weight: 600;
            color: #6a06dd;
            font-size: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <div class="login-card">

            <div class="logo-text">Electronic Logbook</div>

            <h4>Student Sign In</h4>

            <!-- Alert Messages -->
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <?= $_SESSION['success']; unset($_SESSION['success']); ?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php endif; ?>

            <?php include('errors.php'); ?>

            <!-- Login Form -->
            <form action="student-login.php" method="POST" novalidate>

                <!-- Matric Number -->
                <div class="form-group">
                    <i class="fa fa-user"></i>
                    <input type="text" name="st_matricno" class="form-control" placeholder="Matric Number" required>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="st_password" class="form-control" placeholder="Password" required>
                </div>

                <!-- Login Button -->
                <button type="submit" name="st_login" class="btn btn-login">
                    <i class="fa fa-sign-in"></i> Login
                </button>
            </form>

            <!-- Footer Links -->
            <div class="form-footer">
                <a href="student-reset-password.php" class="text-link">Forgot Password?</a><br>
                <span style="font-size: 14px;">Don't have an account? 
                    <a href="student-register.php" class="text-link"><strong>Register</strong></a>
                </span>
            </div>
        </div>
    </div>

    <div class="container">
        <a href="index.php" class="text-center">Back to Homepage</a>
    </div>

    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>