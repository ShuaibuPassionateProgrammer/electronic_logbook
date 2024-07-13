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
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<?php include("student-menu.php");?>
	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1"><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <h5>Welcome to your Logbook</h5>
                        </div>
                        <div class="panel-body" style="background: #FFF;color: #000;font-size: 15px;border-radius: 0px 0px 5px 5px;">
                            <div class="panel-body tab-content">
                       			<form role="form" action="logbook.php" method="POST">
		                            <div class="form-group col-md-4 has-feedback">
		                                <input type="number" class="form-control" placeholder="Week Number" name="weekno" required>
		                            </div>

		                        	<div class="form-group col-md-4 has-feedback">
		                            	<button class="btn btn-primary pull-left" name="view">&nbsp;View&nbsp;</button>
		                        	</div><br>

		                        	<table class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-top: 40px;">
		                        		<thead>
		                        			<?php
		                        				if (isset($_POST['view'])) {
													global $db;
													$a = mysqli_real_escape_string($db, $_POST['weekno']);
													if (empty($a)) {
														array_push($errors, "Please enter a week number");
													}

													if (count($errors) == 0) {
														global $a;
														?>
														<tr>
															<th style="text-align: center;" colspan="2">WEEK <?= $a; ?> LOGBOOK ENTRY</th>
														</tr>
														<?php
				                        			}
												}
		                        			?>
	                                        <tr>
	                                            <th style="text-align: center;">DAY AND DATE</th>
	                                            <th style="text-align: center;">DISCRIPTION WORK DONE</th>
	                                        </tr>
                                    	</thead>
	                                    <tbody>
	                                    	<?php
		                        				if (isset($_POST['view'])) {
													global $db;
													$a = mysqli_real_escape_string($db, $_POST['weekno']);
													$stuid = $_SESSION['id'];
													if (empty($a)) {
														array_push($errors, "Please enter a week number");
													}

													if (count($errors) == 0) {
														$query = mysqli_query($db, "SELECT * FROM logbook WHERE weekno = '$a' AND stuid = $stuid");
				                        				if($query) {
															while ($row=mysqli_fetch_array($query)) {
																echo"<tr>
																		<td style='padding-left:20px;'>".$row['day'].' <br>'.$row['adate']."</td>
																		<td style='padding-left:20px;'>".$row['report']."</td>
																</tr>";
															}
														}
														else {
															?>
															<script>
																alert('No record saved on that particular day!');
															</script>
															<?php
														}
				                        			}
												}
		                        			?>
	                                    </tbody>
		                        	</table>
                        		</form>
                        	</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php');?>