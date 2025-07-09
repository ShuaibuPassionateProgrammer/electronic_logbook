<?php
session_start();
require_once 'includes/config.php'; // Assumes mysqli connection as $db

$errors = [];
$success = [];

// ===================== STUDENT PASSWORD RESET (Placeholder) =====================
if (isset($_POST['sturespass'])) {
    echo "<script>alert('Initializing Student Password...');</script>";
}

// ===================== STUDENT PASSWORD CHANGE (Placeholder) =====================
if (isset($_POST['cpsswd'])) {
    echo "<script>alert('Initializing Password recovery...');</script>";
}

// ===================== DELETE STUDENT =====================
if (isset($_GET['stu_del'])) {
    $id = intval($_GET['stu_del']);
    $stmt = $db->prepare("DELETE FROM tbl_student WHERE id = ?");
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        $_SESSION['stu_del_status'] = "Student is permanently deleted!";
        header('Location: student-registration-request.php');
        exit();
    }
}

// ===================== DENY STUDENT =====================
if (isset($_GET['deny'])) {
    $id = intval($_GET['deny']);
    $stmt = $db->prepare("DELETE FROM tbl_student WHERE id = ?");
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        $_SESSION['deny_status'] = "Student is deleted!";
        header("Location: student-registration-request.php");
        exit();
    }
}

// ===================== APPROVE STUDENT =====================
if (isset($_GET['approve'])) {
    $id = intval($_GET['approve']);
    $stmt = $db->prepare("UPDATE tbl_student SET status = 'active' WHERE id = ?");
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        $_SESSION['approve_status'] = "Student is now Active";
        header('Location: student-registration-request.php');
        exit();
    }
}

// ===================== STUDENT REGISTRATION =====================
if (isset($_POST['newstudent'])) {
    $fullname = trim($_POST['student_fullname']);
    $matricno = trim($_POST['student_matricno']);
    $email = trim($_POST['student_email']);
    $level = trim($_POST['student_level']);
    $password = $_POST['student_password'];
    $cpassword = $_POST['student_cpassword'];

    if (empty($fullname)) $errors[] = "Fullname is required!";
    if (empty($matricno)) $errors[] = "Matric Number is required!";
    if (empty($email)) $errors[] = "Email is required!";
    if (empty($level)) $errors[] = "Level is required!";
    if (empty($password)) $errors[] = "Password is required!";
    if ($password !== $cpassword) $errors[] = "Passwords do not match!";

    if (empty($errors)) {
        $stmt = $db->prepare("SELECT * FROM tbl_student WHERE email = ? OR matricno = ? LIMIT 1");
        $stmt->bind_param('ss', $email, $matricno);
        $stmt->execute();
        $result = $stmt->get_result();
        $student = $result->fetch_assoc();

        if ($student) {
            if ($student['email'] === $email) $errors[] = "This Email is already registered!";
            if ($student['matricno'] === $matricno) $errors[] = "This Matric Number is already registered!";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $db->prepare("INSERT INTO tbl_student(fullname, matricno, level, email, password, status) VALUES (?, ?, ?, ?, ?, 'inactive')");
            $stmt->bind_param('sssss', $fullname, $matricno, $level, $email, $hashed_password);
            if ($stmt->execute()) {
                $_SESSION['success'] = "Registration successful, pending approval.";
                header('Location: student-login.php');
                exit();
            } else {
                $errors[] = "Registration failed. Try again.";
            }
        }
    }
}

// STUDENT LOGIN
if (isset($_POST['st_login'])) {
    $matricno = trim($_POST['st_matricno']);
    $password = $_POST['st_password'];

    if (empty($matricno)) $errors[] = "Matric Number is required!";
    if (empty($password)) $errors[] = "Password is required!";

    if (empty($errors)) {
        $stmt = $db->prepare("SELECT * FROM tbl_student WHERE matricno = ? LIMIT 1");
        $stmt->bind_param('s', $matricno);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row && password_verify($password, $row['password'])) {
            if ($row['status'] === 'active') {
                $_SESSION['id'] = $row['id'];
                $_SESSION['student'] = $matricno;
                $_SESSION['st_login'] = true;
                header('Location: student-dashboard.php');
                exit();
            } else {
                $errors[] = "Your account is pending approval.";
            }
        } else {
            $errors[] = "Invalid credentials.";
        }
    }

}

// ===================== ADD LOGBOOK REPORT =====================
if (isset($_POST['addreport'])) {
    $date = $_POST['date'];
    $weekno = $_POST['weekno'];
    $report = $_POST['report'];
    $day = $_POST['day'];
    $stuid = $_SESSION['id'] ?? null;

    if (!$stuid || !$date || !$weekno || !$report || !$day) {
        $errors[] = "All fields are compulsory.";
    } else {
        $stmt = $db->prepare("INSERT INTO logbook (stuid, adate, weekno, report, day) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param('issss', $stuid, $date, $weekno, $report, $day);
        if ($stmt->execute()) {
            echo "<script>alert('Logbook report added successfully!');</script>";
        } else {
            echo "<script>alert('Failed to add logbook report!');</script>";
        }
    }
}

// ===================== UPLOAD SIWES NOTICE =====================
if (isset($_POST['upload_notice'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $db->prepare("INSERT INTO tbl_siwes_notice (title, content) VALUES (?, ?)");
    $stmt->bind_param('ss', $title, $content);
    if ($stmt->execute()) {
        $_SESSION['uploaded_notice'] = "Notice uploaded successfully!";
    } else {
        $_SESSION['uploaded_notice'] = "Failed to upload notice.";
    }
    header("Location: supervisor-dashboard.php");
    exit();
}

// ===================== UPLOAD ACCEPTANCE LETTER =====================
if (isset($_POST['upload_acceptance_letter'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];

    $stmt = $db->prepare("INSERT INTO tbl_acceptance_letter (title, body) VALUES (?, ?)");
    $stmt->bind_param('ss', $title, $body);
    if ($stmt->execute()) {
        $_SESSION['uploaded_acceptance_letter'] = "Acceptance letter uploaded!";
    } else {
        $_SESSION['uploaded_acceptance_letter'] = "Failed to upload acceptance letter.";
    }
    header("Location: supervisor-dashboard.php");
    exit();
}

// ===================== UPLOAD ACCEPTANCE FORM (IMAGE) =====================
if (isset($_POST['upload_acceptance_form']) && isset($_FILES['image']['name'])) {
    $imagefile = $_FILES['image']['name'];
    $imagetemp = $_FILES['image']['tmp_name'];
    $upload = move_uploaded_file($imagetemp, "uploaded-pics/" . $imagefile);

    if ($upload) {
        $regno = $_SESSION['supervisor'];
        $stmt = $db->prepare("INSERT INTO tbl_acceptance_form(regno, acceptform) VALUES (?, ?)");
        $stmt->bind_param('ss', $regno, $imagefile);
        if ($stmt->execute()) {
            $_SESSION['uploaded_pics'] = "Acceptance form uploaded!";
        } else {
            $_SESSION['uploaded_pics'] = "Failed to upload acceptance form.";
        }
    } else {
        echo "<script>alert('Upload failed. Try again.');</script>";
    }
    header("Location: supervisor-dashboard.php");
    exit();
}

// ===================== SUPERVISOR LOGIN =====================
if (isset($_POST['sp_login'])) {
    $username = $_POST['sp_username'];
    $password = $_POST['sp_password'];

    if (empty($username)) $errors[] = "Username is required!";
    if (empty($password)) $errors[] = "Password is required!";

    if (empty($errors)) {
        $stmt = $db->prepare("SELECT * FROM tbl_supervisor WHERE surname = ? LIMIT 1");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row && password_verify($password, $row['password'])) {
            $_SESSION['supervisor'] = $username;
            $_SESSION['sp_login'] = true;
            header("Location: supervisor-dashboard.php");
            exit();
        } else {
            $errors[] = "Invalid credentials.";
        }
    }
}

// ===================== ADMIN LOGIN =====================
if (isset($_POST['ad_login'])) {
    $username = $_POST['ad_username'];
    $password = $_POST['ad_password'];

    if (empty($username)) $errors[] = "Username is required!";
    if (empty($password)) $errors[] = "Password is required!";

    if (empty($errors)) {
        $stmt = $db->prepare("SELECT * FROM tbl_admin WHERE adusername = ? LIMIT 1");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row && password_verify($password, $row['adpassword'])) {
            $_SESSION['admin'] = $username;
            $_SESSION['ad_login'] = true;
            header('Location: admin-dashboard.php');
            exit();
        } else {
            $errors[] = "Invalid credentials.";
        }
    }
}
?>