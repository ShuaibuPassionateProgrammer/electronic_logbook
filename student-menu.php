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
/* Navbar Base */
.navbar {
  margin-bottom: 0;
  border: none;
  border-radius: 0;
  background: #ffffff;
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}

/* Brand */
.navbar-brand {
  color: #5a3fc0 !important;
  font-weight: 600;
  font-size: 18px;
  padding-left: 25px;
}

/* Nav Items */
.navbar-nav > li > a {
  font-size: 15px;
  color: #333;
  padding: 10px 16px; /* Reduced vertical & horizontal padding */
  font-weight: 500;
  transition: all 0.2s ease-in-out;
  border-radius: 4px;
}

/* Active & Hover States */
.navbar-nav > li.active > a,
.navbar-nav > li > a:hover {
  background: #f1edfc;
  color: #5a3fc0 !important;
  border-radius: 4px;
  box-shadow: inset 0 0 2px rgba(90, 63, 192, 0.1);
}

/* Dropdown Menu */
.dropdown-menu {
  font-size: 14.5px;
  padding: 4px 0;
  border-radius: 4px;
  border: none;
  box-shadow: 0 6px 12px rgba(0,0,0,0.08);
}

/* Dropdown Item */
.dropdown-menu > li > a {
  padding: 8px 18px;  /* Less bulky dropdown items */
  color: #444;
  transition: background 0.2s ease-in-out;
}

/* Dropdown Hover */
.dropdown-menu > li > a:hover {
  background: #f6f3fc;
  color: #5a3fc0;
  border-radius: 3px;
}

/* Divider Line */
.divider {
  margin: 4px 0;
  background-color: #e5e5e5;
}


</style>