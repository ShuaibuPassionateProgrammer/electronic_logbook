<?php 
include('server.php');
include('student_auth.php');    
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWES Letter</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        body {
            background-color: #f8f9fa;
        }
        .panel {
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            margin-top: 40px;
        }
        .panel-heading {
            background-color: #6a06dd;
            color: white;
            padding: 15px 25px;
            border-radius: 8px 8px 0 0;
        }
        .panel-body {
            background-color: #fff;
            color: #333;
            padding: 30px;
            border-radius: 0 0 8px 8px;
            font-size: 15px;
            font-family: 'Segoe UI', sans-serif;
            line-height: 1.8;
        }
        h3 small {
            color: #6a06dd;
            font-size: 20px;
        }
        .btn-primary {
            background-color: #6a06dd;
            border-color: #6a06dd;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 4px;
        }
        .btn-primary:hover {
            background-color: #5405b0;
            border-color: #5405b0;
        }
    </style>
</head>
<body>

<?php include("student-menu.php"); ?>

<?php
$sql = "SELECT * FROM tbl_acceptance_letter LIMIT 1";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-file-text-o"></i> SIWES Letter</h4>
                </div>
                <div class="panel-body">
                    <h3><small><?= htmlspecialchars($row['title']) ?></small></h3>
                    <p><?= nl2br(htmlspecialchars($row['body'])) ?></p>
                    <button type="button" class="btn btn-primary" id="moreLetter">
                        <i class="fa fa-plus"></i> More Letter
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>