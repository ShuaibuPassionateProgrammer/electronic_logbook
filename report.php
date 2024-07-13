<?php 
	include("server.php");
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logbook | Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
 	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
	<?php include("smenu.php");?>
	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1"><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <h5>Welcome to your Logbook</h5>
                        </div>
                        <div class="alert alert-success alert-dismissable" style="background: #FFF;color: #000;font-size: 15px;border-radius: 0px 0px 5px 5px;">
                            <div class="panel-body tab-content">
		                        	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		                        		<thead>
		                        			<?php
		                        				if (isset($_POST['view'])) {
													$a = mysql_real_escape_string($_POST['weekno']);
													if (empty($a)) {
														array_push($erros, "Please enter a week number");
													}

													if (count($erros) == 0) {
														$query = mysqli_query($db, "SELECT * FROM logbook WHERE weekno = '$a'");
				                        				while ($row=mysqli_fetch_array($query)) {
				                        					echo"<tr>
				                        							<th style='text-align: center;colspan='2'>".'WEEK NUMBER'. ' ' .$row['weekno']."</th>
				                        					</tr>";
				                        				}
				                        			}
												}
		                        			?>
	                                        <tr>
	                                            <th style="text-align: center;">DAY AND DATE</th>
	                                            <th style="text-align: center;">DISCRIPTION WORK DONE</th>
	                                        </tr>
                                    	</thead>
	                                    <tbody>
	                                    	
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
</body>
</html>