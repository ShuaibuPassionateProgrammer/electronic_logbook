<?php 
include('server.php');
include('student_auth.php');    
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWES Acceptance Form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        body {
            background-color: #f4f6f9;
        }
        .panel {
            border-radius: 8px;
            margin-top: 60px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .panel-heading {
            background-color: #6a06dd;
            color: #fff;
            padding: 15px 20px;
            border-radius: 8px 8px 0 0;
        }
        .panel-title {
            font-size: 18px;
            font-weight: 600;
        }
        .panel-body {
            background-color: #fff;
            padding: 30px 25px;
            font-size: 15px;
            border-radius: 0 0 8px 8px;
            line-height: 1.6;
        }
        .panel-body h3 small {
            font-size: 17px;
            font-weight: 600;
            display: block;
            margin-bottom: 20px;
            color: #333;
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
    </style>
</head>
<body>

<?php include("student-menu.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title"><i class="fa fa-check"></i> SIWES Acceptance Form</h5>
                </div>
                <div class="panel-body">
                    <h3><small>Acceptance Form</small></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur error earum corporis. Natus voluptatem exercitationem nihil earum, eligendi mollitia excepturi at voluptatum vitae, enim praesentium deserunt ab, quibusdam odit aliquid molestias minus commodi sapiente beatae!
                    </p>
                    <div class="text-right" style="margin-top: 20px;">
                        <a href="files/acceptance-form.pdf" class="btn btn-primary" download>
                            <i class="fa fa-download"></i> Download Acceptance Form
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
</body>
</html>