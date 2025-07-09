<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?= ucfirst(basename($_SERVER['PHP_SELF'], '.php')); ?> | Electronic Logbook</title>

<!-- Bootstrap & FontAwesome -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<style>
:root {
  --primary: #6a06dd;
  --primary-dark: #5804c2;
  --bg-light: #f7f8fc;
  --text-color: #333;
  --border-radius: 12px;
  --transition-speed: 0.35s;
  --input-height: 50px;
  --font-base: 16px;
}

body {
  background: var(--bg-light);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: var(--font-base);
  margin: 0;
  padding-top: 70px;
  color: var(--text-color);
}

/* Social Bar */
#social {
  background: var(--primary);
  height: 28px;
  display: flex;
  align-items: center;
  font-size: 0.9rem;
  user-select: none;
}

.social-wrapper .social-icon a {
  color: #fff;
  margin-right: 18px;
  transition: color var(--transition-speed) ease;
  font-size: 1.1rem;
  display: inline-block;
}

.social-wrapper .social-icon a:hover,
.social-wrapper .social-icon a:focus {
  color: var(--primary-dark);
  outline: none;
}

/* Navbar */
.navbar-default {
  background: #fff;
  border: none;
  box-shadow: 0 2px 8px rgba(106, 6, 221, 0.1);
  padding: 0.7rem 1.5rem;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 999;
}

.navbar-header .navbar-brand h3 {
  color: var(--primary);
  margin: 0;
  font-weight: 700;
  font-size: 1.6rem;
  letter-spacing: 1px;
  user-select: none;
  text-transform: uppercase;
}

.navbar-toggle {
  border-color: var(--primary);
}

.navbar-toggle .icon-bar {
  background-color: var(--primary);
}

.navbar-nav > li > a {
  color: var(--primary);
  font-weight: 600;
  font-size: 1rem;
  transition: color var(--transition-speed);
}

.navbar-nav > li.active > a,
.navbar-nav > li > a:hover,
.navbar-nav > li > a:focus {
  color: var(--primary-dark);
  outline: none;
  background: transparent;
}

/* Container & Panel */
.container {
  max-width: 600px;
  background: #fff;
  padding: 2.8rem 3rem;
  border-radius: var(--border-radius);
  box-shadow:
    0 8px 20px rgba(106, 6, 221, 0.1),
    0 15px 40px rgba(0, 0, 0, 0.05);
  margin-bottom: 4rem;
}

.panel-heading h3 {
  margin: 0 0 2rem 0;
  font-weight: 700;
  font-size: 1.8rem;
  color: var(--primary);
  user-select: none;
  text-align: center;
  letter-spacing: 1px;
  text-transform: uppercase;
}

/* Form Styles */
form {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem 2rem;
  justify-content: center;
}

.form-group {
  flex: 1 1 45%;
  min-width: 200px;
}

.form-group select,
.form-group input {
  width: 100%;
  height: var(--input-height);
  padding: 0 1.2rem;
  font-size: 1rem;
  border-radius: 25px;
  border: 1.8px solid #d0d3db;
  transition: border-color var(--transition-speed), box-shadow var(--transition-speed);
  color: #444;
  outline-offset: 3px;
}

.form-group input::placeholder {
  color: #aaa;
  font-weight: 500;
}

.form-group input:focus,
.form-group select:focus {
  border-color: var(--primary);
  box-shadow: 0 0 8px 2px rgba(106, 6, 221, 0.15);
  outline-color: var(--primary);
}

select {
  appearance: none;
  -webkit-appearance: none;
  background-image:
    linear-gradient(45deg, transparent 50%, var(--primary) 50%),
    linear-gradient(135deg, var(--primary) 50%, transparent 50%);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px);
  background-size: 5px 5px, 5px 5px;
  background-repeat: no-repeat;
  padding-right: 3rem;
  cursor: pointer;
}

/* Button */
button.btn-primary {
  flex: 1 1 100%;
  background-color: var(--primary);
  border: none;
  font-size: 1.2rem;
  padding: 1rem 1.5rem;
  border-radius: 30px;
  color: #fff;
  font-weight: 700;
  cursor: pointer;
  box-shadow: 0 6px 15px rgba(106, 6, 221, 0.3);
  transition:
    background-color var(--transition-speed),
    box-shadow var(--transition-speed),
    transform var(--transition-speed);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.6rem;
  user-select: none;
}

button.btn-primary .fa-save {
  font-size: 1.1rem;
}

button.btn-primary:hover,
button.btn-primary:focus {
  background-color: var(--primary-dark);
  box-shadow: 0 8px 22px rgba(88, 4, 194, 0.6);
  transform: scale(1.05);
  outline: none;
}

/* Error messages */
<?php /* Assuming errors.php outputs alerts, you can style them here if needed */ ?>

/* Responsive */
@media (max-width: 480px) {
  .form-group {
    flex: 1 1 100%;
  }
  .container {
    padding: 2rem 1.5rem;
    margin-top: 2rem;
  }
  .navbar-header .navbar-brand h3 {
    font-size: 1.3rem;
    padding-left: 10px;
  }
}
</style>
</head>
<body>

<!-- Social Media Bar -->
<section id="social" class="social">
  <div class="container">
    <div class="row">
      <div class="social-wrapper">
        <div class="col-md-6">
          <div class="social-icon">
            <a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" aria-label="Google Plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>       
</section>

<!-- Navbar -->
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeadercollapse" aria-label="Toggle navigation">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php" tabindex="0">
      <h3>Electronic Log Book</h3>
    </a>
  </div>
  <div class="collapse navbar-collapse navHeadercollapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/eleclogbook"><span class="fa fa-home"></span> Home</a></li>
      <li><a href="student-login.php"><span class="fa fa-user"></span> Login</a></li>
      <li class="active"><a href="student-register.php"><span class="fa fa-user-plus"></span> Register</a></li>
    </ul>
  </div>
</nav>

<!-- Registration Form Container -->
<div class="container">

  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="login-panel panel panel-default" style="border:none;">
        <div class="panel-heading">
          <h3 class="panel-title">Create New Student Account</h3>
        </div>
        <div class="panel-body tab-content">
          <?php include("errors.php"); ?>
          <form class="tab-pane fade in active" method="POST" action="student-register.php" novalidate autocomplete="off">
            <div class="form-group col-md-6 has-feedback">
              <input class="form-control" type="text" name="student_fullname" required placeholder="Full Name" autocomplete="off" />
            </div>

            <div class="form-group col-md-6 has-feedback">
              <input class="form-control" type="text" name="student_matricno" required placeholder="Matric Number" autocomplete="off" />
            </div>

            <div class="form-group col-md-6 has-feedback">
              <input class="form-control" type="email" name="student_email" required placeholder="Email" autocomplete="off" />
            </div>

            <div class="form-group col-md-6">
              <select class="form-control" name="student_level" required>
                <option value="" disabled selected>-- Select Level --</option>
                <option>100 Level</option>
                <option>200 Level</option>
                <option>300 Level</option>
                <option>400 Level</option>
                <option>500 Level</option>
              </select>
            </div>

            <div class="form-group col-md-6 has-feedback">
              <input class="form-control" type="password" name="student_password" required placeholder="Password" autocomplete="new-password" />
            </div>

            <div class="form-group col-md-6 has-feedback">
              <input class="form-control" type="password" name="student_cpassword" required placeholder="Confirm Password" autocomplete="new-password" />
            </div>

            <div class="col-md-12 form-group">
              <button class="btn btn-primary pull-right" type="submit" name="newstudent" aria-label="Register new student account">
                Register <span class="fa fa-save"></span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

<?php include('includes/footer.php'); ?>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>