<?php 
include('server.php');
include('admin_auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Manage/View SIWES Acceptance Form</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .header-title {
            text-transform: uppercase;
            color: #6a06dd;
        }
        .panel-body p {
            font-family: 'Segoe UI', sans-serif;
            text-align: justify;
            padding-left: 15px;
        }
        .download-btn {
            margin-left: 15px;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="text-center mb-4">
            <h3 class="header-title">Manage/View SIWES Acceptance Form</h3>
            <h5 class="header-title">Electronic Log Book for Student Attachment Industrial Work Scheme</h5>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h5><i class="fa fa-check"></i> SIWES Acceptance Form</h5>
            </div>
            <div class="panel-body" style="background: #FFF; color: #000; font-size: 15px;">
                <h4 style="padding-left: 15px;"><small>Acceptance Form</small></h4>
                
                <p>
                    This acceptance form is a critical part of the SIWES program. It should be duly completed, signed, and submitted by the student and their respective industrial training organization. Ensure all required sections are filled in before submission to avoid rejection or delays in processing.
                </p>

                <p>
                    The form includes sections for student details, organization details, supervisor approval, and confirmation of acceptance by the host company. This documentation ensures proper alignment with SIWES regulatory standards and compliance requirements.
                </p>

                <a href="path/to/acceptance-form.pdf" class="btn btn-primary download-btn" target="_blank">
                    <i class="fa fa-download"></i> Download Acceptance Form
                </a>
            </div>
        </div>

        <div class="mt-4">
            <a href="admin-dashboard.php" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </div>

<?php include('includes/footer.php'); ?>
</body>
</html>