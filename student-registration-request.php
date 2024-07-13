<?php 
include('server.php');
include('admin_auth.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Active Registered Students</title>
 	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="row" style="margin-top: 65px;">
    <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">Active Registered Students</h3></div>
    <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">electronic log book for student attachment industrial work scheme</h3></div>
    <div class="col-md-12 text-center"><a href="student-registration-request1.php">View Pending Students</a></div>
</div>

<?php
if(isset($_SESSION['approve_status']))
{
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p class="text-center"><?= $_SESSION['approve_status']; ?></p>
            </div>
            </div>
        </div>
    </div>
    
    <?php
    unset($_SESSION['approve_status']);
}
?>

<?php
if(isset($_SESSION['deny_status']))
{
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p class="text-center"><?= $_SESSION['deny_status']; ?></p>
            </div>
            </div>
        </div>
    </div>
    
    <?php
    unset($_SESSION['deny_status']);
}
?>

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
                    $sql = "SELECT * FROM tbl_student WHERE status='active' ORDER BY id DESC";
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
                                    <a href="student-registration-request.php?stu_del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                    <a href="student-registration-request.php?stu_upt=<?php echo $row['id']; ?>" class="btn btn-success">Update</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                        <tr>
                            <td colspan="7" class="text-center text-danger">No Active Student Found!</td>
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