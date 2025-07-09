<?php
include('server.php');

// Redirect logged-in students to their dashboard
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
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 1rem;
        }

        .login-card {
            background-color: #fff;
            border-radius: 12px;
            padding: 2.5rem 2rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            max-width: 450px;
            width: 100%;
        }

        .logo-text {
            font-weight: 600;
            color: #6a06dd;
            font-size: 1.25rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        h4 {
            font-weight: 600;
            text-align: center;
            margin-bottom: 2rem;
            color: #333;
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
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
            transition: border-color 0.3s ease;
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

        .form-footer {
            text-align: center;
            margin-top: 1.5rem;
        }

        .text-link {
            font-size: 0.9rem;
            color: #6a06dd;
            text-decoration: none;
        }

        .text-link:hover {
            text-decoration: underline;
        }

        .alert {
            font-size: 0.9rem;
            border-radius: 8px;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <div class="login-card">

            <div class="logo-text">Electronic Logbook</div>
            <h4>Student Sign In</h4>

            <!-- Success Message -->
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                </div>
            <?php endif; ?>

            <!-- Error Messages -->
            <?php include('errors.php'); ?>

            <!-- Login Form -->
            <form action="student-login.php" method="POST" novalidate>
                <div class="form-group">
                    <i class="fa fa-user"></i>
                    <input type="text" name="st_matricno" class="form-control" placeholder="Matric Number" required>
                </div>

                <div class="form-group">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="st_password" class="form-control" placeholder="Password" required>
                </div>

                <button type="submit" name="st_login" class="btn btn-login">
                    <i class="fa fa-sign-in"></i> Login
                </button>
            </form>

            <div class="form-footer">
                <a href="student-reset-password.php" class="text-link">Forgot Password?</a><br>
                <span>Don't have an account? 
                    <a href="student-register.php" class="text-link"><strong>Register</strong></a>
                </span>
            </div>

            <a href="index.php" class="back-link">Back to Homepage</a>

        </div>
    </div>

    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>