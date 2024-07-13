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
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<?php include("student-menu.php");?>

    <?php
    $sql = "SELECT * FROM tbl_acceptance_letter";
    $query = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($query);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1"><br>
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h5><i class="fa fa-fw fa-check"></i> SIWES Letter</h5>
                    </div>
                    <div class="panel-body" style="background: #FFF;color: #000;font-size: 15px;border-radius: 0px 0px 5px 5px;">
                        <h3 style="padding-left: 15px;"><small><?php echo $row['title'];?></small></h3>
                        <p style="padding-left:15px;text-align: justify;font-family: Segoe UI;">
                            <?php echo $row['body'];?>
                        </p>
                        <p style="padding-left: 15px; text-align: justify; font-family: Segoe UI;">
                        <button type="button" class="btn btn-primary" id="moreLetter">More Letter</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    ?>

<?php include('includes/footer.php');?>