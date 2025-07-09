<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Student Register | Electronic Logbook</title>

<!-- Bootstrap & FontAwesome -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<style>
  /* Root colors and fonts */
  :root {
    --primary: #6a06dd;
    --primary-dark: #5804c2;
    --background-gradient: linear-gradient(135deg, #f9f9ff, #edf1f7);
    --card-bg: #fff;
    --card-radius: 12px;
    --shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  body {
    margin: 0; padding: 0;
    font-family: var(--font-family);
    background: var(--background-gradient);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
  }

  .register-wrapper {
    background: var(--card-bg);
    max-width: 480px;
    width: 100%;
    border-radius: var(--card-radius);
    box-shadow: var(--shadow);
    padding: 40px 35px;
  }

  .logo-text {
    text-align: center;
    font-weight: 600;
    font-size: 22px;
    color: var(--primary);
    margin-bottom: 20px;
    user-select: none;
  }

  h4 {
    text-align: center;
    font-weight: 600;
    color: #333;
    margin-bottom: 30px;
  }

  form {
    width: 100%;
  }

  .form-group {
    position: relative;
    margin-bottom: 24px;
  }

  .form-group i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
    font-size: 18px;
  }

  .form-control {
    width: 100%;
    height: 48px;
    padding-left: 45px;
    border-radius: 30px;
    border: 1px solid #ced4da;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  .form-control::placeholder {
    color: #aaa;
    font-weight: 500;
  }

  .form-control:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 0.2rem rgba(106, 6, 221, 0.15);
    outline: none;
  }

  select.form-control {
    padding-left: 15px;
    appearance: none;
    background-image:
      linear-gradient(45deg, transparent 50%, var(--primary) 50%),
      linear-gradient(135deg, var(--primary) 50%, transparent 50%);
    background-position:
      calc(100% - 20px) calc(1em + 2px),
      calc(100% - 15px) calc(1em + 2px);
    background-size: 5px 5px, 5px 5px;
    background-repeat: no-repeat;
    cursor: pointer;
  }

  .form-group {
  position: relative;
  margin-bottom: 24px;
}

.form-group i {
  position: absolute;
  left: 15px;
  top: 50%;
  transform: translateY(-50%);
  color: #6c757d;
  font-size: 18px;
  pointer-events: none; /* So icon doesn’t block select clicks */
}

.form-group select.form-control {
  padding-left: 45px; /* same space as inputs with icons */
  height: 48px;
  border-radius: 30px;
  border: 1px solid #ced4da;
  font-size: 16px;
  appearance: none;
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px);
  background-size: 5px 5px, 5px 5px;
  background-repeat: no-repeat;
  transition: all 0.3s ease;
}


  .btn-register {
    width: 100%;
    border-radius: 30px;
    background-color: var(--primary);
    color: white;
    padding: 14px;
    font-weight: 600;
    border: none;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.6rem;
    user-select: none;
  }

  .btn-register:hover,
  .btn-register:focus {
    background-color: var(--primary-dark);
    outline: none;
  }

  .form-footer {
    margin-top: 20px;
    text-align: center;
    font-size: 14px;
  }

  .form-footer a {
    color: var(--primary);
    text-decoration: none;
    font-weight: 600;
  }

  .form-footer a:hover,
  .form-footer a:focus {
    text-decoration: underline;
    outline: none;
  }

  .alert {
    border-radius: 8px;
    font-size: 14px;
  }

  @media (max-width: 520px) {
    .register-wrapper {
      padding: 30px 25px;
    }
    .form-control {
      font-size: 14px;
      height: 44px;
      padding-left: 40px;
    }
    .btn-register {
      font-size: 16px;
      padding: 12px;
    }
  }
</style>
</head>
<body>

  <div class="register-wrapper">
    <div class="logo-text">Electronic Logbook</div>
    <h4>Create New Student Account</h4>

    <!-- Alert Messages -->
    <?php if (isset($_SESSION['success'])): ?>
      <div class="alert alert-success alert-dismissible fade show">
        <?= $_SESSION['success']; unset($_SESSION['success']); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
      </div>
    <?php endif; ?>

    <?php include("errors.php"); ?>

    <form method="POST" action="student-register.php" novalidate autocomplete="off">

      <div class="form-group">
        <i class="fa fa-user"></i>
        <input type="text" name="student_fullname" class="form-control" placeholder="Full Name" required />
      </div>

      <div class="form-group">
        <i class="fa fa-id-card"></i>
        <input type="text" name="student_matricno" class="form-control" placeholder="Matric Number" required />
      </div>

      <div class="form-group">
        <i class="fa fa-envelope"></i>
        <input type="email" name="student_email" class="form-control" placeholder="Email" required />
      </div>

      <div class="form-group">
        <i class="fa fa-graduation-cap"></i>
        <select name="student_level" class="form-control" required>
          <option value="" disabled selected>-- Select Level --</option>
          <option>100 Level</option>
          <option>200 Level</option>
          <option>300 Level</option>
          <option>400 Level</option>
          <option>500 Level</option>
        </select>
      </div>

      <div class="form-group">
        <i class="fa fa-lock"></i>
        <input type="password" name="student_password" class="form-control" placeholder="Password" required />
      </div>

      <div class="form-group">
        <i class="fa fa-lock"></i>
        <input type="password" name="student_cpassword" class="form-control" placeholder="Confirm Password" required />
      </div>

      <button type="submit" name="newstudent" class="btn-register">
        <i class="fa fa-user-plus"></i> Register
      </button>
    </form>

    <div class="form-footer">
      Already have an account? <a href="student-login.php">Sign In</a><br />
      <a href="index.php" style="margin-top: 8px; display: inline-block;">Back to Homepage</a>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>

  <!-- Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>