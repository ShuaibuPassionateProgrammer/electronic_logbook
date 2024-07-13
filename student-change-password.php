<?php 
include('server.php');
include('student_auth.php');	
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home | Page</title>
 	<link href="css/bootstrap.min.css" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">    
</head>
<body>
	<?php include("student-menu.php");?>
	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="margin-top: 50px;">
                    <div class="panel-heading">
                        <h5 class="panel-title">Change Your Password</h5>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="student-change-password.php" method="POST">
                            <?php include("errors.php");?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Old Password" name="old_password" required type="password" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="New Password" name="new_password" type="password"required>
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="New Password Again" name="c_password" type="password"required>
                                </div>
                                <div class="col-md-12 form-group">
                                	<button class="btn btn-primary pull-right" type="submit" name="cpsswd"><span class="fa fa-lock"></span>&nbsp;Change&nbsp;</button>
                            	</div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php');?>