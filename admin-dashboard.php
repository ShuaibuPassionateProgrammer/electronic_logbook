<?php 
include('server.php');
include('admin_auth.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard | Page</title>
 	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div class="row" style="margin-top: 65px;">
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">Welcome to Admin Dashboard</h3></div>
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">electronic log book for student attachment industrial work scheme</h3></div>
    </div>

    <?php
    if(isset($_SESSION['adspregstatus']))
    {
        ?>
        <div class="container" style="margin-top: 15px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible">
                        <button class="close" data-dismiss="alert">&times;</button>
                        <span class="text-center"><?= $_SESSION['adspregstatus'];?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php
        unset($_SESSION['adspregstatus']);
    }
    ?>

    <div class="container ">
        <div class="row" style="margin-top: 20px;">

                <div class="panel panel-default" style="background-color: #6a06dd;">
                    <a href="student-registration-request.php" style="color: white;">
                        <div class="panel-heading text-center">
                            Manage Student's Account Registration
                        </div>
                    </a>
                </div>

                <div class="panel panel-default" style="background-color: #6a06dd;">
                    <a href="supervisor-register.php" style="color: white;">
                        <div class="panel-heading text-center">
                            Register a Supervisor's
                        </div>
                    </a>
                </div>

                <div class="panel panel-default" style="background-color: #6a06dd;">
                    <a href="view-siwes-acceptance-form.php" style="color: white;">
                        <div class="panel-heading text-center">
                            View SIWES Acceptance Form
                        </div>
                    </a>
                </div>

                <div class="panel panel-default" style="background-color: #6a06dd;">
                    <a href="view-siwes-acceptance-letter.php" style="color: white;">
                        <div class="panel-heading text-center">
                            View SIWES Acceptance Letter
                        </div>
                    </a>
                </div>

                <div class="panel panel-default" style="background-color: #6a06dd;">
                    <a href="view-siwes-notice.php" style="color: white;">
                        <div class="panel-heading text-center">
                            View SIWES Notice
                        </div>
                    </a>
                </div>

                <div class="panel panel-default" style="background-color: #6a06dd;">
                    <a href="admin-logout.php" style="color: white;">
                        <div class="panel-heading text-center">
                            Logout
                        </div>
                    </a>
                </div>
            
            </div>
        </div>
    </div>
<?php include('includes/footer.php');?>