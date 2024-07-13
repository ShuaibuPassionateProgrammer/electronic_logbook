<?php include('server.php');?>
<?php
if(isset($_SESSION['sp_login']))
{
    header('location: supervisor-dashboard.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Supervisor Login | Page</title>
 	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <section id="social" class="social" style="background: #6a06dd;height: 20px;">
	 <div class="container" style="margin-top: -15px;">
        <div class="row" style="margin-bottom: 65px;">
            <div class="col-md-12 text-center margin-top: 30px;"><h3 style="text-transform: uppercase; color: #6a06dd;">electronic log book for student attachment industrial work scheme</h3></div>
        </div>

        <div class="col-md-4 col-md-offset-4">
            <div class="row justify-content-center" style="margin-bottom: 65px; text-align: center">
                <?php include('errors.php');?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Supervisor Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <!--role="form"-->
                        <form action="supervisor-login.php" method="POST">
                            <fieldset>
                               <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="sp_username" placeholder="Username" required>
                                </div>

                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="sp_password" placeholder="Password" required>
                                </div>
                                
                                <div class="checkbox">
                                    <label>
                                        <div id="message"><?php /*echo output_message($error);*/ ?></div>
                                    </label>
                                    <style>
                                        #message li{
                                            list-style-type:none;
                                            color:red;
                                        }
                                    </style>
                                </div>

                                <div class="form-group">
                                    <a href="reset-password.php">Forget Password?</a>
                                    <button class="btn btn-primary pull-right" type="submit" name="sp_login"><span class="fa fa-user"></span>&nbsp;Login &nbsp;</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 65px;">
            <div class="col-md-12 text-center">Back to Homepage?<a href="/eleclogbook"><b>Click Here</b></a></div>
        </div>
    </section>
<?php include('includes/footer.php');?>