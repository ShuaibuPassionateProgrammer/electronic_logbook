<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Page</title>
 	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include('includes/header.php');?>
	<div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                         <form action="reset-password.php" method="POST">
			                <div class="form-group"><br>
			                    <input type="text"  class="form-control" placeholder="Email Address" name="email" required>
			                </div>
			                <a href="reset-password.php" class="btn btn-primary pull-right">Reset Password</a>
			                <div class="clearfix"></div>
			            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php');?>