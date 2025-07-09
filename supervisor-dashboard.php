<?php 
include('server.php');
include('supervisor_auth.php');

function showAlert($sessionKey, $alertClass = 'alert-info') {
    if (isset($_SESSION[$sessionKey])) {
        $message = htmlspecialchars($_SESSION[$sessionKey]);
        unset($_SESSION[$sessionKey]);
        echo <<<HTML
        <div class="container mt-3">
            <div class="alert {$alertClass} alert-dismissible fade show shadow-sm rounded" role="alert">
                {$message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
        /* Base */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f5f7;
            color: #333;
            min-height: 100vh;
        }

        /* Header */
        .header-section {
            padding: 4rem 1rem 2rem;
            text-align: center;
            color: #5a2aab;
        }
        .header-section h3 {
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 0.3rem;
            font-size: 2.25rem;
            text-transform: uppercase;
        }
        .header-section h5 {
            font-weight: 500;
            font-style: italic;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #7b61d1;
        }

        /* Cards Container */
        .dashboard-container {
            max-width: 900px;
            margin: 2rem auto 4rem;
            padding: 0 1rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 2rem;
        }

        /* Cards */
        .dashboard-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(101, 41, 219, 0.15);
            color: #5a2aab;
            padding: 2.5rem 1.5rem;
            text-align: center;
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            cursor: pointer;
            user-select: none;
            border: 2px solid transparent;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .dashboard-card i {
            font-size: 3rem;
            margin-bottom: 1.2rem;
            color: #7b61d1;
            transition: color 0.3s ease;
        }

        .dashboard-card:hover {
            background: #5a2aab;
            color: white;
            box-shadow: 0 12px 25px rgba(90, 42, 171, 0.5);
            border-color: #7b61d1;
            transform: translateY(-8px);
            text-decoration: none;
        }

        .dashboard-card:hover i {
            color: #d9d7ff;
        }

        /* Alerts */
        .alert {
            font-weight: 600;
            font-size: 1rem;
        }

        /* Responsive fixes */
        @media (max-width: 400px) {
            .dashboard-card {
                font-size: 1rem;
                padding: 2rem 1rem;
            }
            .dashboard-card i {
                font-size: 2.5rem;
                margin-bottom: 0.8rem;
            }
        }
    </style>
</head>
<body>

    <header class="header-section">
        <h3>Welcome to Supervisor Dashboard</h3>
        <h5>Electronic Log Book for Student Attachment Industrial Work Scheme</h5>
    </header>

    <?php 
        showAlert('uploaded_pics', 'alert-info');
        showAlert('uploaded_acceptance_letter', 'alert-success');
        showAlert('uploaded_notice', 'alert-success');
    ?>

    <main class="dashboard-container">

        <a href="view-student-activities.php" class="dashboard-card" title="View Student Activities">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            View Student Activities
        </a>

        <a href="upload-siwes-notice.php" class="dashboard-card" title="Upload SIWES Notice">
            <i class="fa fa-upload" aria-hidden="true"></i>
            Upload SIWES Notice
        </a>

        <a href="upload-siwes-acceptance-form.php" class="dashboard-card" title="Upload SIWES Acceptance Form">
            <i class="fa fa-file-upload" aria-hidden="true"></i>
            Upload SIWES Acceptance Form
        </a>

        <a href="upload-siwes-acceptance-letter.php" class="dashboard-card" title="Upload SIWES Acceptance Letter">
            <i class="fa fa-file-alt" aria-hidden="true"></i>
            Upload SIWES Acceptance Letter
        </a>

        <a href="supervisor-logout.php" class="dashboard-card" title="Logout">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            Logout
        </a>

    </main>

<script src="js/bootstrap.bundle.min.js"></script>
<?php include('includes/footer.php'); ?>

</body>
</html>