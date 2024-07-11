<?php
session_start();
error_reporting(0);
include('includes/config.php');

$errors = array();
$success = array();
$s_msg = array();

//Reset Student Password
if(isset($_POST['sturespass']))
{
	?>
	<script>
		alert("Initializing Student Password...");
	</script>
	<?php
}

//Change Student Password
if(isset($_POST['cpsswd']))
{
	?>
	<script>
		alert("Initializing Password recovery...");
	</script>
	<?php
}

//Delete Student completely
if(isset($_GET['stu_del']))
{
    $del_stu = $_GET['stu_del'];
    $query = "DELETE FROM tbl_student WHERE id=$del_stu";
    $query_run = mysqli_query($db, $query);

    if($query_run)
	{
        $_SESSION['stu_del_status'] = "Student is permanently deleted!";
        header('location: student-registration-request.php');
    }
}

//Deny or Delete Student
if(isset($_GET['deny']))
{
    $denial_id = $_GET['deny'];
    $query = "DELETE FROM tbl_student WHERE id=$denial_id";
    $query_run = mysqli_query($db, $query);

    if($query_run)
	{
        $_SESSION['deny_status'] = "Student is Deleted!";
        header("location: student-registration-request.php");
    }
}

//Make Student Active
if(isset($_GET['approve']))
{}