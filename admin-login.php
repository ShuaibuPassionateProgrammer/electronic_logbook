<?php include("server.php"); ?>
<?php
if (isset($_SESSION['ad_login'])) {
    header('location: admin-dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: #f0f2f5;
        }

        .header-bar {
            background: #6a06dd;
            height: 8px;
        }

        .page-title {
            text-align: center;
            margin-top: 40px;
            color: #6a06dd;
            font-size: 20px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .login-panel {
            margin-top: 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-radius: 6px;
        }

        .panel-heading {
            background-color: #6a06dd;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 6px 6px 0 0;
        }

        .panel-title {
            margin: 0;
            font-size: 20px;
        }

        .panel-body {
            padding: 25px;
            background-color: #ffffff;
        }

        .form-control {
            height: 45px;
            font-size: 15px;
        }

        .btn-primary {
            background-color: #6a06dd;
            border-color: #6a06dd;
            border-radius: 4px;
        }

        .btn-primary:hover {
            background-color: #4f04b3;
        }

        .form-footer {
            margin-top: 15px;
        }

        .back-link {
            margin-top: 25px;
            text-align: center;
        }

        #message li {
            list-style-type: none;
            color: red;
        }
    </style>
</head>
<body>

<div class="header-bar"></div>

<div class="container">
    <h3 class="page-title">Electronic Logbook for Student Industrial Work Scheme</h3>

    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-4">
            <?php include('errors.php'); ?>
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin Login</h3>
                </div>
                <div class="panel-body">
                    <form action="admin-login.php" method="POST">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input 
                                type="text" 
                                class="form-control" 
                                name="ad_username" 
                                placeholder="Username" 
                                required>
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input 
                                type="password" 
                                class="form-control" 
                                name="ad_password" 
                                placeholder="Password" 
                                required>
                        </div>

                        <div class="form-group">
                            <a href="reset-password.php">Forgot Password?</a>
                            <button 
                                type="submit" 
                                name="ad_login" 
                                class="btn btn-primary pull-right">
                                <i class="fa fa-sign-in"></i> Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="back-link">
                <p>Back to Homepage? <a href="/eleclogbook"><strong>Click Here</strong></a></p>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
</body>
</html>