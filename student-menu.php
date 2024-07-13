<section id="social" class="social" style="background: #6a06dd;height: 20px;">
  <div class="container">
      <!-- Example row of columns -->
      <div class="row">
          <div class="social-wrapper">
              <div class="col-md-6">
                  <div class="social-icon">
                      <a href="#" style="color: #FFF;"><i class="fa fa-facebook"></i></a>
                      <a href="#" style="color: #FFF;"><i class="fa fa-twitter"></i></a>
                      <a href="#" style="color: #FFF;"><i class="fa fa-google-plus"></i></a>
                      <a href="#" style="color: #FFF;"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div> <!-- /container -->       
</section>


<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeadercollapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php"> <h3 style="margin-top: -6px;padding-left: 40px;color: #6a06dd;">Electronic Log Book</h3></a>
 </div>
 <div class="collapse navbar-collapse navHeadercollapse">
   <ul class="nav navbar-nav navbar-right">
     <li class="<?= basename($_SERVER['PHP_SELF'] == 'home')?'active':'';?>"><a href="student-dashboard.php"><span class="fa fa-home"></span> Home</a></li>

     <li class="dropdown <?= basename($_SERVER['PHP_SELF'] == 'Logbook')?'active':'';?>">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-book"></span> Logbook<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="add-report.php"><span class="fa fa-plus"></span> Add Daily Report</a></li>
        <li class="divider"></li>
        <li><a href="logbook.php"><span class="fa fa-table"></span> View Your Logbook</a></li>
      </ul>
    </li>

    <li class="dropdown <?= basename($_SERVER['PHP_SELF'] == 'Others')?'active':'';?>">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-others"></span> Others<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="siwes-letter.php"><span class="fa fa-download"></span> SIWES Letter</a></li>
        <li class="divider"></li>
        <li><a href="acceptance-form.php"><span class="fa fa-upload"></span> Acceptance Form</a></li>
        <li class="divider"></li>
        <li><a href="notice.php"><span class="fa fa-table"></span> Notice</a></li>
      </ul>
    </li>

     <li class="dropdown <?= basename($_SERVER['PHP_SELF'] == 'Account')?'active':'';?>">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span> Account<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="student-change-password.php"><span class="fa fa-lock"></span> Change Password</a></li>
        <li class="divider"></li>
        <li><a href="student-logout.php"><span class="fa fa-sign-out"></span> Logout</a></li>
      </ul>
    </li>
   </ul>
 </div>
</nav>