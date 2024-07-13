<?php 
include('server.php');
include('supervisor_auth.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Student Activities</title>
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
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">View Student Activites</h3></div>
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">electronic log book for student attachment industrial work scheme</h3></div>
    </div>

	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1"><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="fa fa-pencil"> Student Activities</h5>
                    </div>
                    <div class="panel panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Full Name</th>
                                    <th>Matric No</th>
                                    <th>A Date</th>
                                    <th>Week No</th>
                                    <th>Report</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $view = "SELECT * FROM logbook INNER JOIN tbl_student ON logbook.stuid = tbl_student.id";
                                $view_run = mysqli_query($db, $view);
                                $cnt = 1;
                                if(mysqli_num_rows($view_run) > 0) {
                                    while($row = mysqli_fetch_assoc($view_run)) {
                                        ?>
                                        <tr>
                                            <td><?= $cnt++;?></td>
                                            <td><?= $row['fullname'];?></td>
                                            <td><?= $row['matricno'];?></td>
                                            <td><?= $row['adate'];?></td>
                                            <td><?= $row['weekno'];?></td>
                                            <td><?= $row['report'];?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        
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