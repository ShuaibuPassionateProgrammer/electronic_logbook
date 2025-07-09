<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Login | Electronic Log Book</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <style>
        body {
            background: #f7f9fc;
        }
        .login-panel {
            margin-top: 70px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.1);
            border-radius: 10px;
            padding: 30px;
            background: #fff;
        }
        .form-icon {
            position: absolute;
            left: 15px;
            top: 10px;
            color: #6a06dd;
        }
        .form-control {
            padding-left: 40px !important;
            font-size: 16px;
        }
        .btn-primary {
            background-color: #6a06dd;
            border-color: #6a06dd;
        }
        .btn-primary:hover {
            background-color: #5805bb;
            border-color: #5805bb;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="login-panel">
                <h3 class="text-center mb-4" style="color:#6a06dd;">Student Login</h3>

                <?php if(!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach($errors as $error): ?>
                            <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <?= htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="student-login.php" novalidate>
                    <div class="form-group position-relative">
                        <i class="fa fa-user form-icon"></i>
                        <input
                            type="text"
                            name="st_matricno"
                            class="form-control"
                            placeholder="Matric Number"
                            required
                            autocomplete="off"
                            value="<?= isset($_POST['st_matricno']) ? htmlspecialchars($_POST['st_matricno']) : '' ?>"
                        />
                    </div>
                    <div class="form-group position-relative">
                        <i class="fa fa-lock form-icon"></i>
                        <input
                            type="password"
                            name="st_password"
                            class="form-control"
                            placeholder="Password"
                            required
                            autocomplete="off"
                        />
                    </div>
                    <button type="submit" name="st_login" class="btn btn-primary btn-block">
                        Login &nbsp;<i class="fa fa-sign-in"></i>
                    </button>
                </form>

                <p class="text-center mt-3">
                    Don't have an account? <a href="student-register.php">Register Here</a>
                </p>
            </div>

        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>