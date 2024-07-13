<?php 
include('server.php');
include('admin_auth.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Manage/View SIWES Acceptance Form</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

    <div class="row" style="margin-top: 65px;">
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">Manage/View SIWES Acceptance Form</h3></div>
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">electronic log book for student attachment industrial work scheme</h3></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1"><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <h5><i class="fa fa-fw fa-check"></i> Manage/View SIWES Acceptance Form </h5>
                        </div>
                        <div class="panel-body" style="background: #FFF;color: #000;font-size: 15px;border-radius: 0px 0px 5px 5px;">
                            <h3 style="padding-left: 15px;"><small>Acceptance Form</small></h3>
                            <p style="padding-left:15px;text-align: justify;font-family: Segoe UI;">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur error earum corporis. Natus voluptatem exercitationem nihil earum, eligendi mollitia excepturi at voluptatum vitae, enim praesentium deserunt ab, quibusdam odit aliquid molestias minus commodi sapiente beatae!
                            </p>
                            <p style="padding-left: 15px; text-align: justify; font-family: Segoe UI;">
                            <button type="button" class="btn btn-primary">Download Acceptance Form</button>
                            </p>
                        </div>
                </div>
            </div>
        </div>
        <div class="row justify-content">
            <div class="col-md-10 col-md-offset-1"><br>
                <a href="admin-dashboard.php">Back to Dashboard</a>
            </div>
        </div>
    </div>
<?php include('includes/footer.php');?>