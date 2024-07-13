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

    if($student)
	{
        if($student['email'] === $student_email)
		{
			array_push($errors, "This E-Mail is already registered!");
		}

        if(count($errors) == 0)
	    {
            $hash_password = md5($student_password);
            $sql = "INSERT INTO tbl_student(fullname, matricno, level, email, password, status) VALUES ('$student_fullname', '$student_matricno', '$student_level', '$student_email', '$hash_password', 'inactive')";
            mysqli_query($db, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Registration is successful and your account is now pending for approval!";
            header('location: student-login.php');
        }
    }
}

// Student Login
if(isset($_POST['st_login'])) {
    $st_matricno = mysqli_real_escape_string($db, $_POST['st_matricno']);
    $st_password = mysqli_real_escape_string($db, $_POST['st_password']);

    //Form validation
    if(empty($st_matricno)) {
        array_push($errors, "Matric Number is required!");
    }

    if(empty($st_password)) {
        array_push($errors, "Password is required!");
    }

    if(count($errors) == 0) {
        $st_hpassword = md5($st_password);
        $query1 = "SELECT * FROM tbl_student WHERE matricno='$st_matricno' AND password='$st_hpassword' LIMIT 1";
        $result1 = mysqli_query($db, $query1);
        $row = mysqli_fetch_assoc($result1);

        $status = $row['status'];
        if($status == 'active') {
            $_SESSION['id'] = $row['id'];
            $_SESSION['student'] = $st_matricno;
            $_SESSION['st_login'] = true;
            header('location: student-dashboard.php');
            exit();
        }
        elseif($status == 'inactive') {
			array_push($errors, "Your account is still pending for approval!");
		}
        else {
            array_push($errors, "Invalid Username or Password, try again!");
        }
    }
}

function login($username, $password, $role) {
    global $db;
}