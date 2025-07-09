<?php 
include('server.php');
include('student_auth.php');    
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Report | Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #f5f7fa;
        }
        .panel {
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .panel-heading {
            background-color: #6a06dd !important;
            color: #fff !important;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            padding: 15px;
        }
        .panel-body {
            background-color: #fff;
            padding: 30px;
        }
        .form-control {
            border-radius: 4px;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #6a06dd;
            border-color: #6a06dd;
            transition: background 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #5a04c5;
            border-color: #5a04c5;
        }
        .contact-info p {
            font-size: 13px;
            margin-bottom: 8px;
        }
        textarea {
            resize: none;
        }
    </style>
</head>
<body>

<?php include("student-menu.php");?>

<div class="container" style="margin-top: 40px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="fa fa-plus"> &nbsp; Welcome to Your Logbook</h4>
                </div>
                <div class="panel-body">
                    <?php include("errors.php");?>
                    <form action="add-report.php" method="POST">
                        <div class="row">
                            <!-- Sidebar Notice -->
                            <div class="col-md-4 col-sm-12">
                                <h4>Important Notice</h4>
                                <div class="contact-info">
                                    <p><i class="fa fa-bookmark"></i> You must submit your daily report within 24 hours. Failing to do so may count as absence.</p>
                                    <p><i class="fa fa-phone"></i> +234 810 535 9871</p>
                                    <p><i class="fa fa-envelope"></i> <a href="mailto:info@mysiwes.com">info@mysiwes.com</a></p>
                                    <p><i class="fa fa-globe"></i> <a href="#">www.mysiwes.com</a></p>
                                </div>
                            </div>

                            <!-- Report Form -->
                            <div class="col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="day">Day</label>
                                        <select name="day" class="form-control" required>
                                            <option value="" disabled selected>-- Select a Day --</option>
                                            <option>SUNDAY</option>
                                            <option>MONDAY</option>
                                            <option>TUESDAY</option>
                                            <option>WEDNESDAY</option>
                                            <option>THURSDAY</option>
                                            <option>FRIDAY</option>
                                            <option>SATURDAY</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="date">Date</label>
                                        <input class="form-control" type="date" name="date" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="weekno">Week Number</label>
                                        <input class="form-control" type="number" name="weekno" placeholder="Week Number" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="report">Report</label>
                                        <textarea name="report" class="form-control" rows="6" placeholder="Write your daily report here..." required></textarea>
                                    </div>
                                    <div class="form-group col-md-12 text-right">
                                        <button type="submit" name="addreport" class="btn btn-primary">
                                            <i class="fa fa-save"></i> Save Report
                                        </button>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </form>
                </div> <!-- /.panel-body -->
            </div> <!-- /.panel -->
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>