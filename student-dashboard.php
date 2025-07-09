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
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .dashboard-container {
            max-width: 900px;
            width: 100%;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            padding: 30px 40px;
            box-sizing: border-box;
        }

        .panel-heading {
            background-color: #6a06dd;
            color: #fff;
            font-weight: 600;
            font-size: 1.3rem;
            border-radius: 6px 6px 0 0;
            padding: 15px 25px;
            display: flex;
            align-items: center;
            margin: -30px -40px 20px -40px;
        }

        .panel-heading i.fa {
            margin-right: 12px;
            font-size: 1.6rem;
        }

        h3 small {
            font-weight: 600;
            color: #6a06dd;
            font-size: 1.2rem;
        }

        p {
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 22px;
            text-align: justify;
        }

        ul.objectives-list {
            list-style: none;
            padding-left: 0;
            margin-top: 0;
        }

        ul.objectives-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 14px;
            font-size: 1rem;
            line-height: 1.5;
        }

        ul.objectives-list li::before {
            content: '•';
            position: absolute;
            left: 0;
            top: 2px;
            color: #d9534f; /* Bootstrap danger red */
            font-size: 1.3rem;
            line-height: 1;
        }
    </style>
</head>
<body>

<?php include("student-menu.php"); ?>

<div class="dashboard-container">
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
            for the day-to-day running of the affairs of the office, a secretary/typist, and an office assistant. SIWES unit was 
            finally and officially commissioned in July 2006.
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