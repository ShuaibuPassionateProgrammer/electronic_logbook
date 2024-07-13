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

    $password = md5($password);
    $result = mysqli_query($db, "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' AND `type` = '$role'");

    if (mysqli_num_rows($result) >= 1 ) {
        return true;
    } else {
        return false;
    }
}

function user_active($username) {
    global $db;
    $result = mysqli_query($db, "SELECT * FROM `users` WHERE `username` = '$username' AND `status` = 'Active'");

    if (mysqli_num_rows($result) >= 1) {
        return true;
    } else {
        return false;
    }
}

//ADD REPORT OR FILL LOGBOOK
if (isset($_POST['addreport'])) {
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $wno = mysqli_real_escape_string($db, $_POST['weekno']);
    $report = mysqli_real_escape_string($db, $_POST['report']);
    $day = mysqli_real_escape_string($db, $_POST['day']);
    $stuid = $_SESSION['id'];

    if (empty($stuid) || empty($date) || empty($wno) || empty($report) || empty($day)) {
        array_push($errors, "All the fields are compulsory");
    }

    if (count($errors) == 0) {
        $report = "INSERT INTO logbook(stuid, adate, weekno, report, day) VALUES($stuid, '$date', '$wno', '$report', '$day')";
        $result = mysqli_query($db, $report);

        if($result) {
            ?>
			<script>
				alert('Log book report for the day has been Added successfully!');
			</script>
			<?php
        }
        else {
            ?>
			<script>
				alert('Failed to add Logbook report!');
			</script>
			<?php
        }
    }
}

//Upload SIWES Notice
if(isset($_POST['upload_notice'])) {
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $content = mysqli_real_escape_string($db, $_POST['content']);

    $sql = "INSERT INTO tbl_siwes_notice (title, content) VALUES ('$title', '$content')";
    $query = mysqli_query($db, $sql);

    if($query) {
        $_SESSION['uploaded_notice'] = "Acceptance Letter Uploaded successfuly!";
        header("location: supervisor-dashboard.php");
    } else {
        $_SESSION['uploaded_notice'] = "Failed to Upload Acceptance Letter";
        header("location: supervisor-dashboard.php");
    }
}

//Upload SIWES Acceptance Letter
if(isset($_POST['upload_acceptance_letter'])) {
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $body = mysqli_real_escape_string($db, $_POST['body']);

    $sql = "INSERT INTO tbl_acceptance_letter(title, body) VALUES ('$title', '$body')";
    $query = mysqli_query($db, $sql);

    if($query) {
        $_SESSION['uploaded_acceptance_letter'] = "Acceptance Letter Uploaded successfuly!";
        header("location: supervisor-dashboard.php");
    }
}