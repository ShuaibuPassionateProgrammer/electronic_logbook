<?php 
include('server.php');
include('admin_auth.php');

// Fetch the most recent SIWES notice
$sql = "SELECT * FROM tbl_siwes_notice ORDER BY id DESC LIMIT 1";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Manage/View SIWES Notice</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .header-title {
            text-transform: uppercase;
            color: #6a06dd;
        }
        .notice-body {
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
        <h3 class="header-title">Manage/View SIWES Notice</h3>
        <h5 class="header-title">Electronic Log Book for Student Attachment Industrial Work Scheme</h5>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5><i class="fa fa-fw fa-check"></i> SIWES Notice</h5>
        </div>
        <div class="panel-body bg-white text-dark rounded-bottom">
            <?php if ($row): ?>
                <h4 class="notice-body">
                    <small><?= htmlspecialchars($row['title'] ?? 'Untitled Notice'); ?></small>
                </h4>
                <p class="notice-body">
                    <?= nl2br(htmlspecialchars($row['content'] ?? 'No content available.')); ?>
                </p>
                <div class="notice-body mt-3">
                    <button type="button" class="btn btn-primary" id="loadMoreNotice">
                        <i class="fa fa-bullhorn"></i> View More Notices
                    </button>
                </div>
            <?php else: ?>
                <p class="notice-body text-danger">No notice available at the moment.</p>
            <?php endif; ?>
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