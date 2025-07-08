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
    <title>Student Login | Electronic Log Book</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-panel {
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .panel-heading {
            background-color: #6a06dd;
            color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .btn-primary {
            background-color: #6a06dd;
            border: none;
        }

        .btn-primary:hover {
            background-color: #5905bf;
        }

        .input-group-addon {
            background-color: #eee;
        }

        #message li {
            list-style: none;
            color: red;
        }
    </style>
</head>
<body>

    <!-- Top Social Bar -->
    <section style="background: #6a06dd; height: 30px;">
        <div class="container text-right">
            <a href="#" class="text-white me-3"><i class="fa fa-facebook"></i></a>
            <a href="#" class="text-white me-3"><i class="fa fa-twitter"></i></a>
            <a href="#" class="text-white me-3"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="text-white"><i class="fa fa-linkedin"></i></a>
        </div>
    </section>

    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <h3 style="margin-top: -6px; color: #6a06dd;">Electronic Log Book</h3>
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarContent">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/eleclogbook"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active"><a href="student-login.php"><i class="fa fa-user"></i> Login</a></li>
                    <li><a href="student-register.php"><i class="fa fa-user-plus"></i> Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Form -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                
                <?php include('errors.php'); ?>

                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $_SESSION['success']; ?>
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php endif; ?>

                <div class="panel panel-default login-panel">
                    <div class="panel-heading text-center py-3">
                        <h4>Student Sign In</h4>
                    </div>
                    <div class="panel-body p-4">
                        <form action="student-login.php" method="POST">
                            <div class="form-group input-group mb-3">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="st_matricno" class="form-control" placeholder="Matric Number" required>
                            </div>
                            <div class="form-group input-group mb-3">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="st_password" class="form-control" placeholder="Password" required>
                            </div>

                            <!-- Error Message Output Placeholder -->
                            <div id="message"><?php /* echo output_message($error); */ ?></div>

                            <div class="d-flex justify-content-between align-items-center mt-3 mb-4">
                                <a href="student-reset-password.php">Forgot Password?</a>
                                <button type="submit" name="st_login" class="btn btn-primary">
                                    <i class="fa fa-sign-in"></i> Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="text-center mt-3">
                    Don't have an account? <a href="student-register.php"><strong>Register here</strong></a>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>
    
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>