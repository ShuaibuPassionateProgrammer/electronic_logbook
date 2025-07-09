<?php 
include('server.php');
include('student_auth.php');    
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logbook | Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        body {
            background-color: #f4f6f9;
        }
        .panel {
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        .panel-heading {
            background-color: #6a06dd !important;
            color: #fff !important;
            border-radius: 8px 8px 0 0;
            padding: 15px 20px;
        }
        .panel-body {
            background-color: #fff;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .form-group input {
            border-radius: 4px;
            height: 40px;
        }
        .btn-primary {
            background-color: #6a06dd;
            border-color: #6a06dd;
            border-radius: 4px;
        }
        .btn-primary:hover {
            background-color: #5705b6;
        }
        table {
            margin-top: 30px;
        }
        table th, table td {
            text-align: left;
            vertical-align: top;
        }
        .alert-info {
            background: #e7f3fe;
            border-left: 4px solid #2196F3;
            padding: 10px 15px;
            margin-bottom: 15px;
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
                    <h4 class="fa fa-book">&nbsp; Weekly Logbook View</h4>
                </div>
                <div class="panel-body">
                    <?php include("errors.php"); ?>
                    <form action="logbook.php" method="POST" class="form-inline">
                        <div class="form-group col-md-4">
                            <input type="number" name="weekno" class="form-control" placeholder="Enter Week Number" required>
                        </div>
                        <div class="form-group col-md-4">
                            <button class="btn btn-primary" name="view"><i class="fa fa-eye"></i> View Log</button>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['view'])) {
                        $week = mysqli_real_escape_string($db, $_POST['weekno']);
                        $stuid = $_SESSION['id'];

                        if (empty($week)) {
                            echo '<div class="alert alert-danger">Please enter a valid week number.</div>';
                        } else {
                            $result = mysqli_query($db, "SELECT * FROM logbook WHERE weekno = '$week' AND stuid = $stuid ORDER BY adate ASC");
                            if (mysqli_num_rows($result) > 0) {
                                echo '<table class="table table-bordered table-striped">';
                                echo '<thead>';
                                echo "<tr><th colspan='2' style='text-align:center;'>WEEK $week LOGBOOK ENTRY</th></tr>";
                                echo '<tr>
                                        <th style="width: 30%;">DAY AND DATE</th>
                                        <th>DESCRIPTION OF WORK DONE</th>
                                      </tr>';
                                echo '</thead><tbody>';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo "<td><strong>{$row['day']}</strong><br><small>{$row['adate']}</small></td>";
                                    echo "<td>{$row['report']}</td>";
                                    echo '</tr>';
                                }
                                echo '</tbody></table>';
                            } else {
                                echo '<div class="alert alert-info">No logbook entries found for Week '.$week.'.</div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
</body>
</html>