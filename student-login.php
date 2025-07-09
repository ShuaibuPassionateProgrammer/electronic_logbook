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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Login | Electronic Logbook</title>

    <!-- External -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <style>
        :root {
            --primary: #6a06dd;
            --primary-dark: #5804c2;
            --bg-light: #f7f8fc;
            --text-color: #333;
            --border-radius: 14px;
            --transition-speed: 0.35s;
        }

        html {
            font-size: 16px; /* Base font size */
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #eef1fb 0%, #dfe4f7 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
            overflow-x: hidden;
        }

        .login-card {
            background: #fff;
            border-radius: var(--border-radius);
            box-shadow:
                0 10px 15px rgba(0, 0, 0, 0.07),
                0 20px 40px rgba(0, 0, 0, 0.05);
            max-width: 500px; /* Wider */
            width: 100%;
            padding: 3.5rem 3rem; /* More padding */
            transform: scale(0.95);
            opacity: 0;
            animation: zoomFadeIn 0.6s ease forwards;
            transition: box-shadow var(--transition-speed) ease;
        }

        @keyframes zoomFadeIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .login-card:hover {
            box-shadow:
                0 14px 20px rgba(0, 0, 0, 0.1),
                0 25px 60px rgba(0, 0, 0, 0.08);
        }

        .logo-text {
            font-size: 2rem; /* Bigger logo text */
            font-weight: 700;
            color: var(--primary);
            text-align: center;
            margin-bottom: 2rem;
            letter-spacing: 1.5px;
            user-select: none;
            text-transform: uppercase;
            text-shadow: 0 2px 4px rgba(106, 6, 221, 0.2);
        }

        h4 {
            font-weight: 600;
            font-size: 1.5rem; /* Bigger heading */
            text-align: center;
            margin-bottom: 3rem;
            color: var(--text-color);
        }

        .form-group {
            position: relative;
            margin-bottom: 1.6rem;
        }

        .form-group i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #a3a8bb;
            font-size: 1.1rem;
            pointer-events: none;
            transition: color var(--transition-speed) ease;
        }

        .form-control {
            width: 100%;
            height: 52px; /* Taller inputs */
            padding-left: 50px; /* Adjusted padding */
            border-radius: 30px;
            border: 1.8px solid #d0d3db;
            font-size: 1.1rem; /* Larger font */
            color: #444;
            transition:
                border-color var(--transition-speed) ease,
                box-shadow var(--transition-speed) ease;
            outline-offset: 3px;
            outline-color: transparent;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 8px 2px rgba(106, 6, 221, 0.15);
            outline-color: var(--primary);
        }

        .form-control:focus + i,
        .form-group input:not(:placeholder-shown) + i {
            color: var(--primary);
        }

        .btn-login {
            width: 100%;
            padding: 1rem; /* Bigger padding */
            font-size: 1.2rem; /* Bigger font */
            font-weight: 600;
            color: #fff;
            background: var(--primary);
            border: none;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(106, 6, 221, 0.3);
            transition:
            background-color var(--transition-speed) ease,
            box-shadow var(--transition-speed) ease,
            transform var(--transition-speed) ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-login i {
            font-size: 1.2rem;
        }

        .btn-login:hover,
        .btn-login:focus {
            background-color: var(--primary-dark);
            box-shadow: 0 6px 14px rgba(88, 4, 194, 0.5);
            transform: scale(1.03);
            outline: none;
        }

        .alert {
            font-size: 0.95rem;
            border-radius: 10px;
            padding: 0.75rem 1rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 8px rgba(106, 6, 221, 0.1);
            animation: fadeInAlert 0.6s ease forwards;
        }

        @keyframes fadeInAlert {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-footer {
            text-align: center;
            margin-top: 2.5rem;
            font-size: 1rem; /* Bigger footer text */
            color: #555;
        }

        .form-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: color var(--transition-speed) ease;
        }

        .form-footer a:hover,
        .form-footer a:focus {
            text-decoration: underline;
            color: var(--primary-dark);
            outline: none;
        }

        .back-link {
            display: block;
            margin-top: 3rem; /* More margin */
            text-align: center;
            font-size: 1rem; /* Larger */
            color: #777;
            text-decoration: none;
            transition: color var(--transition-speed) ease;
            user-select: none;
        }

        .back-link:hover,
        .back-link:focus {
            color: var(--primary);
            text-decoration: underline;
            outline: none;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 2.5rem 1.75rem;
            }

            .btn-login {
                font-size: 1.1rem;
                padding: 0.85rem;
            }
        }
    </style>
</head>
<body>

<div class="login-wrapper">
    <main class="login-card" role="main" aria-label="Student Login Form">
        <div class="logo-text" aria-label="Application logo">Electronic Logbook</div>
        <h4>Student Sign In</h4>

        <!-- Success Alert -->
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert" tabindex="0">
                <?= htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
            </div>
        <?php endif; ?>

        <!-- Error Messages -->
       <?php if(!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
            <?php foreach($errors as $err): ?>
                <li><?= htmlspecialchars($err) ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>


        <!-- Login Form -->
        <form action="student-login.php" method="POST" novalidate>
            <div class="form-group">
                <input type="text" id="st_matricno" name="st_matricno" class="form-control" placeholder="Matric Number" required autocomplete="username" aria-label="Matric Number" />
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>

            <div class="form-group">
                <input type="password" id="st_password" name="st_password" class="form-control" placeholder="Password" required autocomplete="current-password" aria-label="Password" />
                <i class="fa fa-lock" aria-hidden="true"></i>
            </div>

            <button type="submit" name="st_login" class="btn-login" aria-label="Log in to student account">
                <i class="fa fa-sign-in"></i> Login
            </button>
        </form>

        <div class="form-footer">
            <a href="student-reset-password.php">Forgot Password?</a><br />
            <span>Don't have an account? <a href="student-register.php"><strong>Register</strong></a></span>
        </div>

        <a href="index.php" class="back-link">← Back to Homepage</a>
    </main>
</div>

<?php include('includes/footer.php'); ?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>