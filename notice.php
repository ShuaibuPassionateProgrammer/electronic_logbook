<?php 
include('server.php');
include('student_auth.php');    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWES Notice</title>
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        .panel-heading {
            background-color: #6a06dd;
            color: #fff;
            padding: 15px 20px;
            border-radius: 8px 8px 0 0;
        }
        .panel-heading h5 {
            margin: 0;
            font-size: 18px;
            font-weight: 600;
        }
        .panel-body {
            background-color: #fff;
            padding: 30px 25px;
            font-size: 15px;
            border-radius: 0 0 8px 8px;
            line-height: 1.6;
            color: #333;
        }
        .panel-body h3 small {
            font-size: 17px;
            font-weight: 600;
            display: block;
            margin-bottom: 20px;
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

<?php
$sql = "SELECT * FROM tbl_siwes_notice";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);
?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5><i class="fa fa-check"></i> SIWES Notice</h5>
                </div>
                <div class="panel-body">
                    <h3><small><?php echo htmlspecialchars($row['title']); ?></small></h3>
                    <p style="text-align: justify;">
                        <?php echo nl2br(htmlspecialchars($row['content'])); ?>
                    </p>
                    <div class="text-right" style="margin-top: 20px;">
                        <button type="button" class="btn btn-primary" id="moreNotice">
                            <i class="fa fa-bell"></i> More Notices
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
</body>
</html>