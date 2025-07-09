<?php
include('server.php');
include('student_auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Student Dashboard | SIWES</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="css/style.css" />

  <style>
    /* Body & Container */
    body {
      background-color: #f7f9fc;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      padding-top: 60px; /* for fixed menu */
      padding-bottom: 40px;
    }

    .dashboard-wrapper {
      max-width: 900px;
      margin: 0 auto;
      background: #ffffff;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      padding: 30px 35px;
    }

    /* Panel heading */
    .panel-heading {
      background-color: #5a3fc0;
      color: #fff;
      font-weight: 600;
      font-size: 1.4rem;
      border-radius: 6px 6px 0 0;
      padding: 18px 25px;
      display: flex;
      align-items: center;
      margin: -30px -35px 30px -35px;
      box-shadow: inset 0 -3px 8px rgba(0,0,0,0.15);
    }

    .panel-heading i.fa {
      margin-right: 12px;
      font-size: 1.7rem;
    }

    /* Headings */
    h3 small {
      font-weight: 600;
      color: #5a3fc0;
      font-size: 1.25rem;
      margin-bottom: 12px;
      display: block;
    }

    /* Paragraph styling */
    p {
      font-size: 1rem;
      line-height: 1.7;
      margin-bottom: 24px;
      text-align: justify;
    }

    /* Objectives list */
    ul.objectives-list {
      list-style: none;
      padding-left: 0;
      margin-top: 0;
      margin-bottom: 30px;
    }

    ul.objectives-list li {
      position: relative;
      padding-left: 24px;
      margin-bottom: 14px;
      font-size: 1rem;
      line-height: 1.5;
      color: #444;
    }

    ul.objectives-list li::before {
      content: "✔";
      position: absolute;
      left: 0;
      top: 1px;
      color: #5a3fc0;
      font-weight: bold;
      font-size: 1.1rem;
      line-height: 1;
    }

    /* Responsive tweaks */
    @media (max-width: 576px) {
      .dashboard-wrapper {
        padding: 20px 20px;
        margin: 20px;
      }

      .panel-heading {
        font-size: 1.2rem;
      }
    }
  </style>
</head>
<body>

<?php include("student-menu.php"); ?>

<div class="dashboard-wrapper">
  <div class="panel-heading">
    <i class="fa fa-check"></i>
    Brief Historical Background of (SIWES)
  </div>

  <section>
    <h3><small>Introduction to SIWES</small></h3>
    <p>
      Students Industrial Work Experience Scheme (SIWES) is one of the Industrial Training Fund (ITF) programs.
      It was designed to give Nigerian students studying occupationally related courses in higher institutions the experience
      that would supplement their theoretical learning. SIWES unit in the University Maiduguri was established in the year 1986
      as an industrial coordinating unit catering mostly for science and some art-based students on industrial attachment.
      The foundation staff were four (4) that comprised an industrial coordinator who is responsible to the Vice Chancellor
      for the day-to-day running of the affairs of the office, a secretary/typist, and an office assistant.
      SIWES unit was finally and officially commissioned in July 2006.
    </p>
  </section>

  <section>
    <h3><small>Objectives of SIWES</small></h3>
    <p>The programmes of SIWES are designed to achieve the following objectives:</p>
    <ul class="objectives-list">
      <li>Provision of avenue for students to acquire industrial skills and experience during their course of study.</li>
      <li>To prepare students for the work situation they are likely to meet after graduation.</li>
      <li>To expose students to work methods and techniques in handling equipment and machineries that may not be available in the universities.</li>
      <li>To provide students with an opportunity to apply their theoretical knowledge in real work situations, thereby bridging the gap between theory and practice.</li>
    </ul>
  </section>
</div>

<?php include('includes/footer.php'); ?>

<!-- Optional JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>