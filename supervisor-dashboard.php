<?php 
include('server.php');
include('supervisor_auth.php');

function showAlert($sessionKey, $alertClass = 'alert-info') {
    if (isset($_SESSION[$sessionKey])) {
        $message = htmlspecialchars($_SESSION[$sessionKey]);
        unset($_SESSION[$sessionKey]);
        echo <<<HTML
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="alert {$alertClass} alert-dismissible fade show" role="alert">
                        {$message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
        HTML;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Supervisor Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
        }
        .dashboard-card {
            cursor: pointer;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            border-radius: 10px;
            border: 1px solid #6a06dd;
            background-color: white;
            color: #6a06dd;
            text-align: center;
            padding: 30px 20px;
            font-weight: 600;
            text-transform: uppercase;
            user-select: none;
            box-shadow: 0 0 10px rgba(106, 6, 221, 0.1);
        }
        .dashboard-card i {
            font-size: 2.5rem;
            margin-bottom: 10px;
            display: block;
        }
        .dashboard-card:hover {
            background-color: #6a06dd;
            color: white;
            box-shadow: 0 8px 20px rgba(106, 6, 221, 0.4);
            transform: translateY(-4px);
            text-decoration: none;
        }
        h3, h5 {
            color: #6a06dd;
            text-transform: uppercase;
        }
        .header-section {
            margin-top: 60px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="header-section text-center">
        <h3>Welcome to Supervisor Dashboard</h3>
        <h5>Electronic Log Book for Student Attachment Industrial Work Scheme</h5>
    </div>

    <?php 
        showAlert('uploaded_pics', 'alert-info');
        showAlert('uploaded_acceptance_letter', 'alert-success');
        showAlert('uploaded_notice', 'alert-success');
    ?>

    <div class="row g-4 justify-content-center">

        <div class="col-12 col-md-6 col-lg-4">
            <a href="view-student-activities.php" class="dashboard-card d-block">
                <i class="fa fa-list-alt"></i>
                View Student Activities
            </a>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <a href="upload-siwes-notice.php" class="dashboard-card d-block">
                <i class="fa fa-upload"></i>
                Upload SIWES Notice
            </a>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <a href="upload-siwes-acceptance-form.php" class="dashboard-card d-block">
                <i class="fa fa-upload"></i>
                Upload SIWES Acceptance Form
            </a>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <a href="upload-siwes-acceptance-letter.php" class="dashboard-card d-block">
                <i class="fa fa-upload"></i>
                Upload SIWES Acceptance Letter
            </a>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <a href="supervisor-logout.php" class="dashboard-card d-block">
                <i class="fa fa-sign-out"></i>
                Logout
            </a>
        </div>

    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<?php include('includes/footer.php'); ?>

</body>
</html>