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
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include("student-menu.php");?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1"><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="fa fa-plus"> Welcome to your Logbook</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="padding-left: 15px;">
                             <div class="col-md-3">
                                <form action="add-report.php" method="POST">
                                    <?php include("errors.php");?>
                                    <h4 style="margin-top: 30px;text-align: justify; margin-left:14px;">Important Notice</h4>
                                            <ul class="contact-info col-md-12">
                                                <p style="font-size: 12px;"><i class="fa fa-bookmark"></i>&nbsp;Make sure that everyday you should add your daily report within 24hrs otherwise you will be absence for that day.
                                                </p>
                                                <p><i class="fa fa-phone"></i> + 2348105359871</p>
                                                <p><i class="fa fa-envelope"></i><a href="#"> info@mysiwes.com</a></p>
                                                <p><i class="fa fa-globe"></i><a href="#"> www.mysiwes.com</a></p>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0" style="margin-top: 30px;">
                                            <div class="row">
                                               <div class="form-group col-md-6 has-feedback">
                                                    <select class="form-control" type="text" name="day" id=""  required="required" autocomplete="off">
                                                        <option selected disabled>--Select a Day--</option>
                                                        <option>SUNDAY</option>
                                                        <option>MONDAY</option>
                                                        <option>TUESDAY</option>
                                                        <option>WEDNESDAY</option>
                                                        <option>THURSDAY</option>
                                                        <option>FRIDAY</option>
                                                        <option>SARTUDAY</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Date" type="date" name="date">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Week Number" type="number" name="weekno">
                                                    </div>
                                                </div>



                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="report" class="form-control" id="" cols="30" rows="7" placeholder="Report" ></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="addreport" class="btn btn-primary" style="float: right;border: 1px solid #FFF;">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php');?>