<?php 
include('server.php');
include('admin_auth.php');

// Fetch the latest acceptance letter (you can expand to paginate or show more)
$sql = "SELECT * FROM tbl_acceptance_letter ORDER BY id DESC LIMIT 1";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Manage/View SIWES Acceptance Letter</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .header-title {
            text-transform: uppercase;
            color: #6a06dd;
        }
        .letter-body {
            font-family: 'Segoe UI', sans-serif;
            font-size: 15px;
            text-align: justify;
            padding-left: 15px;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="text-center mb-4">
            <h3 class="header-title">Manage/View SIWES Acceptance Letter</h3>
            <h5 class="header-title">Electronic Log Book for Student Attachment Industrial Work Scheme</h5>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h5><i class="fa fa-fw fa-check"></i> SIWES Acceptance Letter</h5>
            </div>

            <div class="panel-body" style="background: #FFF; color: #000;">
                <h4 class="letter-body"><small><?= htmlspecialchars($row['title'] ?? 'Untitled Letter'); ?></small></h4>
                <p class="letter-body">
                    <?= nl2br(htmlspecialchars($row['body'] ?? 'No content available.')); ?>
                </p>

                <div class="letter-body mt-3">
                    <button type="button" class="btn btn-primary" id="loadMoreLetter">
                        <i class="fa fa-folder-open"></i> View More Letters
                    </button>
                </div>
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