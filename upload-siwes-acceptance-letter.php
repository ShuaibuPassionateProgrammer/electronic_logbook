<?php 
include('server.php');
include('supervisor_auth.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload SIWES Acceptance Letter</title>
 	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
 	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>

    <div class="row" style="margin-top: 65px;">
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">Upload SIWES Acceptance Letter</h3></div>
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">electronic log book for student attachment industrial work scheme</h3></div>
    </div>

	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1"><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="fa fa-pencil"> Upload SIWES Acceptance Letter</h5>
                    </div>
                    <div class="panel panel-body">
                        <p>To upload the Acceptance Letter, fills in the below form input and click on the 'Submit Letter' Button to proceed.</p>
                        <form action="upload-siwes-acceptance-letter.php" method="post"><br><br>
                            <input type="text" class="form-control" name="title" placeholder="Title of the Letter" style="width: 30%"><br>
                            <textarea class="form-control" name="body" placeholder="Body of the Letter" rows="10" style="width: 70%;"></textarea><br>
                            <button class="btn btn-primary" type="submit" name="upload_acceptance_letter">Submit Letter</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content">
            <div class="col-md-10 col-md-offset-1"><br>
                <a href="supervisor-dashboard.php">Back to Dashboard</a>
            </div>
        </div>
    </div>
</body>
</html>