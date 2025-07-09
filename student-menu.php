<section id="social" class="social">
  <div class="container">
    <div class="row">
      <div class="col text-right">
        <div class="social-icon">
          <a href="#" class="social-link"><i class="fa fa-facebook"></i></a>
          <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
          <a href="#" class="social-link"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeadercollapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Electronic Log Book</a>
    </div>

    <div class="collapse navbar-collapse navHeadercollapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?= (basename($_SERVER['PHP_SELF'])=='student-dashboard.php') ? 'active' : '' ?>">
          <a href="student-dashboard.php"><i class="fa fa-home"></i> Home</a>
        </li>

        <li class="dropdown <?= (in_array(basename($_SERVER['PHP_SELF']), ['add-report.php','logbook.php'])) ? 'active' : '' ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i> Logbook <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="add-report.php"><i class="fa fa-plus"></i> Add Daily Report</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logbook.php"><i class="fa fa-table"></i> View Your Logbook</a></li>
          </ul>
        </li>

        <li class="dropdown <?= (in_array(basename($_SERVER['PHP_SELF']), ['siwes-letter.php','acceptance-form.php','notice.php'])) ? 'active' : '' ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i> Others <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="siwes-letter.php"><i class="fa fa-download"></i> SIWES Letter</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="acceptance-form.php"><i class="fa fa-upload"></i> Acceptance Form</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="notice.php"><i class="fa fa-table"></i> Notice</a></li>
          </ul>
        </li>

        <li class="dropdown <?= (in_array(basename($_SERVER['PHP_SELF']), ['student-change-password.php','student-logout.php'])) ? 'active' : '' ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="student-change-password.php"><i class="fa fa-lock"></i> Change Password</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="student-logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  /* Social Bar Styling */
  .social {
    background: #5a3fc0;
    padding: 10px 0;
  }

  .social-link {
    color: #fff;
    margin-left: 15px;
    font-size: 18px;
    transition: color 0.3s;
  }

  .social-link:hover {
    color: #d1b3ff;
  }

  /* Navbar Styling */
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
    border: none;
    background: #fff;
    box-shadow: 0 3px 8px rgba(0,0,0,0.05);
  }

  .navbar-brand {
    color: #5a3fc0 !important;
    font-weight: 700;
    font-size: 20px;
    padding-left: 40px;
  }

  .navbar-nav > li > a {
    font-size: 16px;
    color: #333;
    padding: 15px 22px;
    font-weight: 500;
  }

  .navbar-nav > li.active > a,
  .navbar-nav > li > a:hover {
    background: #5a3fc0;
    color: #fff !important;
    border-radius: 4px;
  }

  .dropdown-menu {
    font-size: 15px;
    padding: 8px 0;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
  }

  .dropdown-menu > li > a {
    padding: 10px 20px;
    color: #444;
  }

  .dropdown-menu > li > a:hover {
    background: #f2f2fa;
    color: #5a3fc0;
  }

  .divider {
    margin: 6px 0;
    background-color: #e5e5e5;
  }
</style>