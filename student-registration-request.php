<?php 
include('server.php');
include('admin_auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Registered Students</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Segoe UI", sans-serif;
        }
        h3 {
            color: #6a06dd;
            text-transform: uppercase;
        }
        .table th, .table td {
            vertical-align: middle !important;
        }
        .action-btns .btn {
            margin: 2px;
        }
        .status-alert {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="text-center mt-5">
    <h3>Active Registered Students</h3>
    <h4 style="text-transform: uppercase; font-size: 16px;">Electronic Log Book for Student Industrial Work Scheme</h4>
    <p><a href="student-registration-request1.php">View Pending Students</a></p>
</div>

<div class="container">
    <?php foreach (['approve_status', 'deny_status'] as $statusKey): ?>
        <?php if (isset($_SESSION[$statusKey])): ?>
            <div class="row justify-content-center status-alert">
                <div class="col-md-10">
                    <div class="alert alert-success alert-dismissible fade show text-center">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= $_SESSION[$statusKey]; ?>
                    </div>
                </div>
            </div>
            <?php unset($_SESSION[$statusKey]); ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>S/N</th>
                            <th>Full Name</th>
                            <th>Matric No</th>
                            <th>Level</th>
                            <th>Email</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tbl_student WHERE status='active' ORDER BY id DESC";
                        $query = mysqli_query($db, $sql);
                        $sn = 1;

                        if (mysqli_num_rows($query)) {
                            foreach ($query as $row): ?>
                                <tr>
                                    <td><?= $sn++; ?></td>
                                    <td><?= htmlspecialchars($row['fullname']); ?></td>
                                    <td><?= htmlspecialchars($row['matricno']); ?></td>
                                    <td><?= htmlspecialchars($row['level']); ?></td>
                                    <td><?= htmlspecialchars($row['email']); ?></td>
                                    <td class="text-center action-btns">
                                        <a href="student-registration-request.php?stu_upt=<?= $row['id']; ?>" class="btn btn-success btn-sm">
                                            <i class="fa fa-pencil"></i> Update
                                        </a>
                                        <a href="student-registration-request.php?stu_del=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?');">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach;
                        } else {
                            echo '<tr><td colspan="6" class="text-center text-danger">No Active Student Found!</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                <a href="admin-dashboard.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back to Dashboard</a>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
</body>
</html>