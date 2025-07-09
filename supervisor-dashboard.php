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
        .dashboard-panel {
            background-color: #6a06dd;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 20px 0;
            text-align: center;
            font-weight: 600;
            text-transform: uppercase;
            user-select: none;
        }
        .dashboard-panel:hover {
            background-color: #5705b9;
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="row mb-4">
        <div class="col-12 text-center">
            <h3 class="text-uppercase text-primary" style="color: #6a06dd;">Welcome to Supervisor Dashboard</h3>
            <h5 class="text-uppercase text-primary" style="color: #6a06dd;">Electronic Log Book for Student Attachment Industrial Work Scheme</h5>
        </div>
    </div>

    <?php 
        showAlert('uploaded_pics', 'alert-info');
        showAlert('uploaded_acceptance_letter', 'alert-success');
        showAlert('uploaded_notice', 'alert-success');
    ?>

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">

            <a href="view-student-activities.php" class="dashboard-panel d-block mb-3">
                <i class="fa fa-list-alt"></i> View Student Activities
            </a>

            <a href="upload-siwes-notice.php" class="dashboard-panel d-block mb-3">
                <i class="fa fa-upload"></i> Upload SIWES Notice
            </a>

            <a href="upload-siwes-acceptance-form.php" class="dashboard-panel d-block mb-3">
                <i class="fa fa-upload"></i> Upload SIWES Acceptance Form
            </a>

            <a href="upload-siwes-acceptance-letter.php" class="dashboard-panel d-block mb-3">
                <i class="fa fa-upload"></i> Upload SIWES Acceptance Letter
            </a>

            <a href="supervisor-logout.php" class="dashboard-panel d-block mb-3">
                <i class="fa fa-sign-out"></i> Logout
            </a>

        </div>
    </div>

</div>

<script src="js/bootstrap.bundle.min.js"></script>
<?php include('includes/footer.php'); ?>

</body>
</html>