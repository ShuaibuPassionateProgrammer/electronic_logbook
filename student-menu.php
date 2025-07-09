<section id="social" class="social" style="background: #6a06dd; padding: 8px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-right">
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

<nav class="navbar navbar-default" role="navigation" style="margin-bottom:0;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeadercollapse" aria-expanded="false" aria-controls="navHeadercollapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="color: #6a06dd; font-weight: 700; font-size: 1.5rem; padding-left: 40px;">
        Electronic Log Book
      </a>
    </div>

    <div class="collapse navbar-collapse navHeadercollapse">
      <ul class="nav navbar-nav navbar-right">

        <li class="<?= (basename($_SERVER['PHP_SELF']) == 'student-dashboard.php') ? 'active' : ''; ?>">
          <a href="student-dashboard.php"><span class="fa fa-home"></span> Home</a>
        </li>

        <li class="dropdown <?= (in_array(basename($_SERVER['PHP_SELF']), ['add-report.php', 'logbook.php'])) ? 'active' : ''; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-book"></span> Logbook <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="add-report.php"><span class="fa fa-plus"></span> Add Daily Report</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logbook.php"><span class="fa fa-table"></span> View Your Logbook</a></li>
          </ul>
        </li>

        <li class="dropdown <?= (in_array(basename($_SERVER['PHP_SELF']), ['siwes-letter.php', 'acceptance-form.php', 'notice.php'])) ? 'active' : ''; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-ellipsis-h"></span> Others <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="siwes-letter.php"><span class="fa fa-download"></span> SIWES Letter</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="acceptance-form.php"><span class="fa fa-upload"></span> Acceptance Form</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="notice.php"><span class="fa fa-table"></span> Notice</a></li>
          </ul>
        </li>

        <li class="dropdown <?= (in_array(basename($_SERVER['PHP_SELF']), ['student-change-password.php', 'student-logout.php'])) ? 'active' : ''; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-user"></span> Account <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="student-change-password.php"><span class="fa fa-lock"></span> Change Password</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="student-logout.php"><span class="fa fa-sign-out"></span> Logout</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>

<style>
  /* Social icons styling */
  .social-icon a.social-link {
    color: #fff;
    margin-left: 12px;
    font-size: 18px;
    transition: color 0.3s ease;
  }

  .social-icon a.social-link:first-child {
    margin-left: 0;
  }

  .social-icon a.social-link:hover {
    color: #c2a6ff;
    text-decoration: none;
  }

  /* Navbar brand hover */
  .navbar-brand:hover {
    text-decoration: none;
    color: #4a04b8;
  }
</style>