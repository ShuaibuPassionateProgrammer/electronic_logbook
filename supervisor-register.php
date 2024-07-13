<?php 
include('server.php');
include('admin_auth.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Supervisor Registration Page</title>
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
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">Supervisor Registration Page</h3></div>
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">electronic log book for student attachment industrial work scheme</h3></div>
    </div>

	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1"><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="fa fa-pencil"> SIWES Supervisor Registration Form</h5>
                    </div>
                    <form action="supervisor-register.php" method="POST">
                        <div class="row" style="padding-left: 15px;">
                            <?php include("errors.php"); ?>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="regno" placeholder="Registration Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="surname" placeholder="Surname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="othersname" placeholder="Others Name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="sppassword" placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="spcpassword" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                            </div>
                        <div class="row" style="padding-left: 15px;">
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-chevron-circle-down"></i></span>
                                        <select class="form-control" name="gender" required>
                                            <option>Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa  fa-university"></i></span>
                                        <input type="text" class="form-control" name="nationality" placeholder="Nationality" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa  fa-university"></i></span>
                                        <input type="text" class="form-control" name="state" placeholder="State" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa  fa-university"></i></span>
                                        <input type="text" class="form-control" name="lga" placeholder="Local Govrnment" required>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="saddress" placeholder="Permanent Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                        <input type="number" class="form-control" name="sphoneno" placeholder="Telphone Number" required>
                                    </div>
                                </div>
                            </div>
                         </div>

                        <div class="row" style="padding-left: 15px;">
                             <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa  fa-envelope"></i></span>
                                        <input type="text" class="form-control" name="semail" placeholder="Email Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="program" placeholder="Program of Study" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="stream" placeholder="Stream" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-left: 15px;">
                            
                             <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label style="float: left;">Upload your picture&nbsp;&nbsp;</label>
                                        <input type="file" name="picture">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                
                            </div>
                        </div>
                        <h5 style="padding-left: 35px; font-family: Segoe UI;font-size: 15px;">Personal Account Details:-(Names of Account should tally with name used in school and account should be active)</h5>
                        <div class="row" style="padding-left: 15px;">
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="bank" placeholder="Name of the Bank" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="branch" placeholder="Branch" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-left: 15px;">
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="acctno" placeholder="Account Number" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="bvn" placeholder="BVN" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <h5 style="padding-left: 35px;font-family: Segoe UI;font-size: 15px;">Next of Kin:-</h5>
                        <div class="row" style="padding-left: 15px;">
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="nextofkin" placeholder="Name of Next of Kin" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="address" placeholder="Permanent Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                        <input type="number" class="form-control" name="phoneno" placeholder="Telphone Number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-left: 15px;">
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" name="email" placeholder="Email Address" >
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 text-center">
                                
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="panel-body">
                                   <button type="submit" name="spregister" class="btn btn-primary" style="float: right;border: 1px solid #FFF;"> Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content">
            <div class="col-md-10 col-md-offset-1"><br>
                <a href="admin-dashboard.php">Back to Dashboard</a>
            </div>
        </div>
    </div>
</body>
</html>