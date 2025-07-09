<?php 
include('server.php');
include('student_auth.php');    
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        body {
            background-color: #f4f6f9;
        }
        .panel {
            border-radius: 8px;
            margin-top: 80px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }
        .panel-heading {
            background-color: #6a06dd;
            color: white;
            padding: 15px 20px;
            border-radius: 8px 8px 0 0;
        }
        .panel-title {
            font-size: 18px;
            font-weight: 600;
            margin: 0;
        }
        .panel-body {
            padding: 30px 25px;
            background-color: #ffffff;
            border-radius: 0 0 8px 8px;
        }
        .form-control {
            border-radius: 4px;
            height: 42px;
            font-size: 14px;
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
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<?php include("student-menu.php"); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title"><i class="fa fa-lock"></i> Change Your Password</h5>
                </div>
                <div class="panel-body">
                    <form action="student-change-password.php" method="POST">
                        <?php include("errors.php"); ?>
                        <div class="form-group">
                            <label for="old_password">Old Password</label>
                            <input class="form-control" name="old_password" type="password" placeholder="Enter old password" required>
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password</label>
                            <input class="form-control" name="new_password" type="password" placeholder="Enter new password" required>
                        </div>
                        <div class="form-group">
                            <label for="c_password">Confirm New Password</label>
                            <input class="form-control" name="c_password" type="password" placeholder="Confirm new password" required>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" name="cpsswd" class="btn btn-primary">
                                <i class="fa fa-refresh"></i> Change Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
</body>
</html>