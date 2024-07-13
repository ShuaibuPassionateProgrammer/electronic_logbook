<?php 
include('server.php');
include('admin_auth.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Manage Student Registration Request</title>
 	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="row" style="margin-top: 65px;">
    <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">Student Registration Request</h3></div>
    <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">electronic log book for student attachment industrial work scheme</h3></div>
    <div class="col-md-12 text-center"><a href="student-registration-request.php">View Active Students</a></div>
</div>

    <div class="container mt-5" style="margin-top: 60px">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Full Name</th>
                            <th>Matric No</th>
                            <th>Level </th>
                            <th>Email</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tbl_student WHERE status='inactive' ORDER BY id DESC";
                        $query = mysqli_query($db, $sql);

                        $sn=1;
                        if(mysqli_num_rows($query))
                        {
                            foreach($query as $row) {
                                ?>
                                <tr>
                                    <td><?= $sn++; ?></td>
                                    <td><?= $row['fullname']; ?></td>
                                    <td><?= $row['matricno']; ?></td>
                                    <td><?= $row['level']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td class="text-center">
                                        <a onclick="return confirm('Are you sure you want to deny the student!');" href="student-registration-request1.php?deny=<?php echo $row['id']; ?>" class="btn btn-danger">Deny</a>
                                        <a href="student-registration-request1.php?approve=<?php echo $row['id']; ?>" class="btn btn-info">Approve</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                            <tr>
                                <td colspan="7" class="text-center text-danger">No Pending Student Found!</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content">
            <div class="col-md-10"><br>
                <a href="admin-dashboard.php">Back to Dashboard</a>
            </div>
        </div>
    </div>
<?php include('includes/footer.php');?>