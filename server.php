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
{
    $approval_id = $_GET['approve'];
    $query = "UPDATE tbl_student SET status = 'active' WHERE id=$approval_id";
    $query_run = mysqli_query($db, $query);

    if($query_run)
	{
        $_SESSION['approve_status'] = "Student is now Active";
        header('location: student-registration-request.php');
    }
}

//student register
if(isset($_POST['newstudent']))
{
    $student_fullname = mysqli_real_escape_string($db, $_POST['student_fullname']);
    $student_matricno = mysqli_real_escape_string($db, $_POST['student_matricno']);
    $student_email = mysqli_real_escape_string($db, $_POST['student_email']);
    $student_level = mysqli_real_escape_string($db, $_POST['student_level']);
    $student_password = mysqli_real_escape_string($db, $_POST['student_password']);

    //Form validation
    if(empty($student_fullname)) {array_push($errors, "Fullname is required!");}
    if(empty($student_matricno)) {array_push($errors, "Matric Number is required!");}
    if(empty($student_email)) {array_push($errors, "E-Mail is required!");}
    if(empty($student_level)) {array_push($errors, "Please select your level");}
    if(empty($student_password)) {array_push($errors, "Password is required!");}
    if($student_password != $student_cpassword) {array_push($errors, "Passwords not match!");}

    //check the db for existing user with same username
	$student_check_query = "SELECT * FROM tbl_student WHERE email='$student_email' OR matricno='$student_matricno' LIMIT 1";
    $student_check = mysqli_query($db, $student_check_query);
    $student = mysqli_fetch_assoc($student_check);
}