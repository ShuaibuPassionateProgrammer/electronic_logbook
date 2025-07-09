<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #f8f9fc;
        }

        .login-panel {
            margin-top: 60px;
            border-radius: 6px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
        }

        .panel-heading {
            background-color: #6a06dd;
            color: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 6px 6px 0 0;
        }

        .panel-title {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
        }

        .panel-body {
            padding: 25px;
            background: #fff;
        }

        .form-group input {
            height: 45px;
            font-size: 15px;
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

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Reset Password</h3>
                </div>
                <div class="panel-body">
                    <form action="reset-password.php" method="POST">
                        <div class="form-group">
                            <label for="email">Enter your email address</label>
                            <input 
                                type="email" 
                                class="form-control" 
                                name="email" 
                                placeholder="e.g. johndoe@example.com" 
                                required>
                        </div>
                        <button type="submit" name="reset_request" class="btn btn-primary btn-block">
                            <i class="fa fa-refresh"></i> Reset Password
                        </button>
                    </form>
                </div>
            </div>

            <div class="text-center" style="margin-top: 15px;">
                <a href="index.php"><i class="fa fa-arrow-left"></i> Back to Login</a>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
</body>
</html>