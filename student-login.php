<?php
include("server.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Student Login | Electronic Log Book</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <style>
    body {
      background: #f7f9fc;
    }

    .login-container {
      max-width: 400px;
      margin: 80px auto;
      background: #fff;
      padding: 30px 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(106, 6, 221, 0.3);
    }

    .form-group {
      position: relative;
    }

    .form-group i {
      position: absolute;
      top: 12px;
      left: 15px;
      color: #6a06dd;
      font-size: 18px;
    }

    .form-control {
      padding-left: 40px !important;
      font-size: 16px;
    }

    .btn-primary {
      background-color: #6a06dd;
      border-color: #6a06dd;
    }

    .btn-primary:hover {
      background-color: #5805bb;
      border-color: #5805bb;
    }

    .alert {
      font-size: 14px;
      margin-bottom: 20px;
    }

    a {
      color: #6a06dd;
    }

    a:hover {
      color: #5805bb;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="login-container">
      <h3 class="text-center mb-4" style="color:#6a06dd;">Student Login</h3>

      <!-- Display Errors -->
      <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
          <ul class="mb-0">
            <?php foreach ($errors as $error) : ?>
              <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <!-- Display Success -->
      <?php if (isset($_SESSION['success'])) : ?>
        <div class="alert alert-success">
          <?= htmlspecialchars($_SESSION['success']); 
          unset($_SESSION['success']); ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="student-login.php" novalidate>
        <div class="form-group">
          <i class="fa fa-user"></i>
          <input type="text" name="st_matricno" class="form-control" placeholder="Matric Number" required autocomplete="off" 
          value="<?= isset($_POST['st_matricno']) ? htmlspecialchars($_POST['st_matricno']) : '' ?>" />
        </div>

        <div class="form-group mt-3">
          <i class="fa fa-lock"></i>
          <input type="password" name="st_password" class="form-control" placeholder="Password" required autocomplete="off" />
        </div>

        <button type="submit" name="st_login" class="btn btn-primary btn-block mt-4">
          Login <i class="fa fa-sign-in"></i>
        </button>
      </form>

      <p class="text-center mt-3">
        Don't have an account? <a href="student-register.php">Register Here</a>
      </p>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>