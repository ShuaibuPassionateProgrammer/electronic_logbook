<?php 
include('server.php');
include('admin_auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: "Segoe UI", sans-serif;
        }

        .dashboard-heading {
            margin-top: 60px;
            text-align: center;
            color: #6a06dd;
            text-transform: uppercase;
        }

        .panel-link {
            background-color: #6a06dd;
            border: none;
            border-radius: 6px;
            margin-bottom: 15px;
            transition: background 0.3s ease;
        }

        .panel-link:hover {
            background-color: #4c05a5;
        }

        .panel-link a {
            display: block;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
        }

        .alert-success {
            font-weight: 500;
            font-size: 14px;
        }

        @media screen and (max-width: 576px) {
            .panel-link a {
                padding: 15px;
                font-size: 15px;
            }
        }
    </style>
</head>
<body>

    <h3 class="dashboard-heading">Welcome to Admin Dashboard</h3>
    <h4 class="dashboard-heading" style="font-size: 16px;">Electronic Log Book for Student Industrial Work Scheme</h4>

    <?php if (isset($_SESSION['adspregstatus'])): ?>
        <div class="container mt-3">
            <div class="alert alert-success alert-dismissible fade in text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?= $_SESSION['adspregstatus']; ?>
            </div>
        </div>
        <?php unset($_SESSION['adspregstatus']); ?>
    <?php endif; ?>

    <div class="container mt-4">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <div class="panel-link">
                    <a href="student-registration-request.php">
                        <i class="fa fa-users"></i> Manage Student Registration Requests
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="panel-link">
                    <a href="supervisor-register.php">
                        <i class="fa fa-user-plus"></i> Register a Supervisor
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="panel-link">
                    <a href="view-siwes-acceptance-form.php">
                        <i class="fa fa-file-text"></i> View SIWES Acceptance Form
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="panel-link">
                    <a href="view-siwes-acceptance-letter.php">
                        <i class="fa fa-envelope-open"></i> View SIWES Acceptance Letter
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="panel-link">
                    <a href="view-siwes-notice.php">
                        <i class="fa fa-bullhorn"></i> View SIWES Notices
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="panel-link">
                    <a href="admin-logout.php">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </div>
            </div>

        </div>
    </div>

<?php include('includes/footer.php'); ?>
</body>
</html>