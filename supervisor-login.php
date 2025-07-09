<?php 
include('server.php');
if (isset($_SESSION['sp_login'])) {
    header('location: supervisor-dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor Login | Electronic Logbook</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .header-strip {
            background-color: #6a06dd;
            height: 20px;
        }
        .title-section {
            padding: 30px 0 20px 0;
            text-align: center;
        }
        .title-section h3 {
            text-transform: uppercase;
            font-size: 18px;
            color: #6a06dd;
            font-weight: 600;
        }
        .login-panel {
            margin-top: 30px;
            border-radius: 6px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }
        .panel-heading {
            background-color: #6a06dd;
            color: #fff;
            border-radius: 6px 6px 0 0;
            padding: 15px;
            text-align: center;
        }
        .panel-title {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
        }
        .panel-body {
            padding: 25px;
        }
        .form-group .input-group-addon {
            background-color: #eee;
        }
        .btn-primary {
            background-color: #6a06dd;
            border-color: #6a06dd;
            border-radius: 4px;
        }
        .btn-primary:hover {
            background-color: #5305b5;
            border-color: #5305b5;
        }
        .form-footer {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .error-message {
            color: red;
            list-style-type: none;
            padding-left: 0;
        }
        .footer-link {
            margin-top: 25px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="header-strip"></div>

    <div class="container">
        <div class="title-section">
            <h3>Electronic Log Book for Student Industrial Work Experience Scheme</h3>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php include('errors.php'); ?>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Supervisor Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form action="supervisor-login.php" method="POST">
                            <fieldset>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="sp_username" placeholder="Username" required>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="sp_password" placeholder="Password" required>
                                </div>

                                <?php if (!empty($errors)) : ?>
                                    <ul class="error-message">
                                        <?php foreach ($errors as $error) : ?>
                                            <li><?php echo $error; ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                <?php endif; ?>

                                <div class="form-footer">
                                    <a href="reset-password.php">Forgot Password?</a>
                                    <button type="submit" name="sp_login" class="btn btn-primary">
                                        <i class="fa fa-sign-in"></i> Login
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="footer-link">
                    <p>Back to Homepage? <a href="/eleclogbook"><b>Click Here</b></a></p>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>