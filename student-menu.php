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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeadercollapse" aria-expanded="false">
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-book"></i> Logbook <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="add-report.php"><i class="fa fa-plus"></i> Add Daily Report</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logbook.php"><i class="fa fa-table"></i> View Your Logbook</a></li>
          </ul>
        </li>

        <li class="dropdown <?= (in_array(basename($_SERVER['PHP_SELF']), ['siwes-letter.php','acceptance-form.php','notice.php'])) ? 'active' : '' ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-h"></i> Others <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="siwes-letter.php"><i class="fa fa-download"></i> SIWES Letter</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="acceptance-form.php"><i class="fa fa-upload"></i> Acceptance Form</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="notice.php"><i class="fa fa-table"></i> Notice</a></li>
          </ul>
        </li>

        <li class="dropdown <?= (in_array(basename($_SERVER['PHP_SELF']), ['student-change-password.php','student-logout.php'])) ? 'active' : '' ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i> Account <span class="caret"></span>
          </a>
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
  /* Social bar styling */
  .social {
    background: #5a3fc0;
    padding: 8px 0;
  }
  .social-icon .social-link {
    color: #fff;
    margin-left: 12px;
    font-size: 18px;
    transition: color 0.3s;
  }
  .social-icon .social-link:first-child {
    margin-left: 0;
  }
  .social-icon .social-link:hover {
    color: #d1b3ff;
  }

  /* Navbar styling */
  .navbar {
    border: none;
    border-radius: 0;
    margin-bottom: 0;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  }
  .navbar .navbar-brand {
    color: #5a3fc0;
    font-weight: 700;
    font-size: 1.6rem;
    padding-left: 40px;
    transition: color 0.3s;
  }
  .navbar .navbar-brand:hover {
    color: #451d99;
    text-decoration: none;
  }
  .navbar-nav > li > a {
    font-size: 1rem;
    color: #444;
    padding: 15px 20px;
    transition: color 0.3s;
  }
  .navbar-nav > .active > a {
    color: #fff;
    background: #5a3fc0;
    border-radius: 4px;
  }
  .navbar-nav > li > a:hover,
  .navbar-nav > li > a:focus {
    color: #5a3fc0;
    background: transparent;
  }
  .dropdown-menu {
    border-radius: 4px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  }
  .dropdown-menu > li > a {
    color: #444;
    font-size: 0.95rem;
    padding: 10px 20px;
  }
  .dropdown-menu > li > a:hover {
    background: #f1eefd;
    color: #5a3fc0;
  }
  .divider {
    margin: 6px 0;
    background-color: #e5e5e5;
  }
</style>