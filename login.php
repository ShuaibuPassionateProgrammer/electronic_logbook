<?php 
    include('server.php');

    if(isset($_SESSION['slogin']))
    {
        header('location: student-page.php');
    }

    //login to page
    if (isset($_POST['login'])) {
        $username = $_POST['username'] ;
        $password = $_POST['password'] ;
        $role = $_POST['role'];
        
        if (empty($username) === true || empty($password) === true || empty($role) === true){
            $errors[] = 'You need to enter a username, password and a user type' ;
        }elseif(login($username, $password, $role) === false){
            $errors[] = 'That username, password and user type combination is not correct' ;
        }elseif(user_active($username) === false){ 
            $errors[] = 'Sorry, Your Account is not active, Contact the Admin' ;
        }elseif(login($username, $password, $role) === true) {
            // switch($role) {
            //     case "Admin":
            //         header('location: admin-dashboard.php');
            //         break;
            //     case "Supervisor":
            //         header('location: supervisor-dashboard.php');
            //         break;
            //     case "Student":
            //         header('location: student-page.php');
            //         break;
            //     default:
            //         $errors[] = "None of the role selected!";
            // }
            if($role === 'Admin')
            {
                header('location: admin-dashboard.php');
            }
            elseif($role === 'Supervisor')
            {
                header('location: supervisor-dashboard.php');
            }
            elseif($role === 'Student')
            {
                header('location: student-page.php');
            }
            else
            {
                header('location: None of the role selected!');
            }
        }else{
            $_SESSION['slogin'] = true;
            $_SESSION['username'] = $username;
            //$_SESSION['role'] = $_POST['Student'];
            $_SESSION['role'] = $role;
            header('location: student-page.php'); 
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Page</title>
 	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <section id="social" class="social" style="background: #6a06dd;height: 20px;">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="social-wrapper">
                <div class="col-md-6">
                    <div class="social-icon">
                        <a href="#" style="color: #FFF;"><i class="fa fa-facebook"></i></a>
                        <a href="#" style="color: #FFF;"><i class="fa fa-twitter"></i></a>
                        <a href="#" style="color: #FFF;"><i class="fa fa-google-plus"></i></a>
                        <a href="#" style="color: #FFF;"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->       
    </section>


    <nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeadercollapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"> <h3 style="margin-top: -6px;padding-left: 40px;color: #6a06dd;">Electronic Log Book</h3></a>
    </div>

    <div class="collapse navbar-collapse navHeadercollapse">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="/eleclogbook"><span class="fa fa-home"></span> Home</a></li>
        <li class="active"><a href="login.php"><span class="fa fa-user"></span> Login</a></li>
        <li><a href="user-account.php"><span class="fa fa-user-plus"></span> Register</a></li>
    </ul>
    </div>
    </nav>

	 <div class="container" style="margin-top: 65px;">
        <div class="col-md-4 col-md-offset-4">
            <div class="row justify-content-center" style="margin-bottom: 65px; text-align: center">
                <?php include('errors.php');?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <!--role="form"-->
                        <form action="login.php" method="POST">
                            <fieldset>
                               <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                                </div>

                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" type="text" name="role" id=""  required="required" autocomplete="off">
                                        <option style="padding-left: 20px;">--User Type--</option>
                                        <option>Admin</option>
                                        <option>Supervisor</option>
                                        <option>Industrial Supervisor</option>
                                        <option>Student</option>
                                    </select>
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
                                    <button class="btn btn-primary pull-right" type="submit" name="login"><span class="fa fa-user"></span>&nbsp;Login &nbsp;</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php');?>