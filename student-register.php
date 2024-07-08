<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst(basename($_SERVER['PHP_SELF'], ".php")); ?> | Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- header --> <!-- #280793 -->
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
                <li><a href="student-login.php"><span class="fa fa-user"></span> Login</a></li>
                <li class="active"><a href="student-register.php"><span class="fa fa-user-plus"></span> Register</a></li>
            </ul>
        </div>
    </nav>
    <!-- /header -->

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default login-panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create New Student Account</h3>
                    </div>
                    <div class="panel-body tab-content">
                        <?php include("errors.php");?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>