<?php
include('server.php');

// Redirect if already logged in
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

    <!-- External Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Custom Styles -->
    <style>
        :root {
            --primary: #6a06dd;
            --primary-dark: #5804c2;
            --bg-light: #f3f4f8;
            --text-color: #333;
            --border-radius: 12px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: var(--bg-light);
            font-family: 'Segoe UI', sans-serif;
            color: var(--text-color);
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            background: linear-gradient(to bottom right, #f5f7fa, #edf0f9);
        }

        .login-card {
            background-color: #fff;
            border-radius: var(--border-radius);
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
            max-width: 420px;
            width: 100%;
            padding: 3rem 2rem;
            transition: box-shadow 0.3s ease;
        }

        .login-card:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
        }

        .logo-text {
            font-size: 1.5rem;
            color: var(--primary);
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .login-card h4 {
            font-weight: 600;
            font-size: 1.25rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-group i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .form-control {
            height: 48px;
            padding-left: 45px;
            border-radius: 30px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
            font-size: 0.95rem;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(106, 6, 221, 0.1);
        }

        .btn-login {
            width: 100%;
            padding: 0.75rem;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 30px;
            background-color: var(--primary);
            color: white;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: var(--primary-dark);
        }

        .alert {
            font-size: 0.875rem;
            border-radius: 8px;
        }

        .form-footer {
            text-align: center;
            margin-top: 1.75rem;
        }

        .form-footer a {
            color: var(--primary);
            font-weight: 500;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.875rem;
            color: #666;
        }

        .back-link:hover {
            text-decoration: underline;
            color: var(--primary);
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">

        <div class="logo-text">Electronic Logbook</div>
        <h4>Student Sign In</h4>

        <!-- Success Alert -->
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    &times;
                </button>
            </div>
        <?php endif; ?>

        <!-- Error Messages -->
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

            <!-- Submit Button -->
            <button type="submit" name="st_login" class="btn btn-login">
                <i class="fa fa-sign-in"></i> Login
            </button>
        </form>

        <!-- Footer Links -->
        <div class="form-footer">
            <a href="student-reset-password.php">Forgot Password?</a><br>
            <span>Don't have an account? 
                <a href="student-register.php"><strong>Register</strong></a>
            </span>
        </div>

        <a href="index.php" class="back-link">← Back to Homepage</a>

    </div>
</div>

<?php include('includes/footer.php'); ?>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>