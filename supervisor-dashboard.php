<?php 
include('server.php');
include('supervisor_auth.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Supervisor Dashboard</title>
 	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div class="row" style="margin-top: 65px;">
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">Welcome to Supervisor Dashboard</h3></div>
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">electronic log book for student attachment industrial work scheme</h3></div>
    </div>

    <?php
    if(isset($_SESSION['uploaded_pics'])) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <span class="text-center"><?php echo $_SESSION['uploaded_pics']?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php
        unset($_SESSION['uploaded_pics']);
    }
    ?>

    <?php
    if(isset($_SESSION['uploaded_acceptance_letter'])) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <span class="text-center"><?php echo $_SESSION['uploaded_acceptance_letter']?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php
        unset($_SESSION['uploaded_acceptance_letter']);
    }
    ?>

    <?php
    if(isset($_SESSION['uploaded_notice'])) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <p class="text-center"><?php echo $_SESSION['uploaded_notice']?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        unset($_SESSION['uploaded_notice']);
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1"><br>

                <div class="panel panel-default" style="background-color: #6a06dd;">
                    <a href="view-student-activities.php" style="color: white">
                        <div class="panel-heading text-center">
                            View Student Activities
                        </div>
                    </a>
                </div>

                <div class="panel panel-default" style="background-color: #6a06dd;">
                    <a href="upload-siwes-notice.php" style="color: white">
                        <div class="panel-heading text-center">
                            Upload SIWES Notice
                        </div>
                    </a>
                </div>

                <div class="panel panel-default" style="background-color: #6a06dd;">
                    <a href="upload-siwes-acceptance-form.php" style="color: white;">
                        <div class="panel-heading text-center">
                            Upload SIWES Acceptance Form
                        </div>
                    </a>
                </div>

                <div class="panel panel-default" style="background-color: #6a06dd;">
                    <a href="upload-siwes-acceptance-letter.php" style="color: white;">
                        <div class="panel-heading text-center">
                            Upload SIWES Acceptance Letter
                        </div>
                    </a>
                </div>
            
                <div class="panel panel-default" style="background-color: #6a06dd;">
                    <a href="supervisor-logout.php" style="color: white;">
                        <div class="panel-heading text-center">
                            Logout
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php');?>