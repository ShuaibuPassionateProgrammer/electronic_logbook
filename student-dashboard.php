<?php
include('server.php');
include('student_auth.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        body {
            background-color: #f7f9fc;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            /* Removed top padding to eliminate extra space */
            padding-top: 0;
            padding-bottom: 40px;
        }

        .container {
            max-width: 900px;
            margin: 30px auto; /* Center container vertically with margin */
        }

        .panel-default {
            border: none;
            border-radius: 6px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .panel-heading {
            background: #6a06dd;
            color: white;
            border-radius: 6px 6px 0 0;
            padding: 15px 25px;
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .panel-heading i {
            font-size: 1.3rem;
        }

        .panel-body {
            background: #fff;
            color: #222;
            font-size: 16px;
            border-radius: 0 0 6px 6px;
            padding: 25px;
            line-height: 1.6;
        }

        .panel-body h3 {
            margin-top: 0;
            margin-bottom: 15px;
            font-weight: 600;
            color: #6a06dd;
        }

        .panel-body p {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            text-align: justify;
            margin-bottom: 20px;
        }

        .highlight-list {
            color: #d93636;
            font-weight: 600;
            margin-right: 8px;
        }
    </style>
</head>
<body>

<?php include("student-menu.php");?>

<div class="container">
    <div class="row">
        <div class="col-md-12"><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-fw fa-check"></i> Brief Historical Background of (SIWES)
                </div>
                <div class="panel-body">
                    <h3><small>Introduction to SIWES</small></h3>
                    <p>
                        Students Industrial Work Experience Scheme (SIWES) is one of the industrial training fund (ITF) programs. It was designed to give Nigerian students studying occupationally related courses in higher institutions the experience that would supplement their theoretical learning. SIWES unit in the University Maiduguri was established in the year 1986 as an industrial coordinating unit catering mostly for science and some art based students on industrial attachment. The foundation staff were four (4) comprising an industrial coordinator who is responsible to the Vice Chancellor for the day to day running of the office, a secretary/typist, and an office assistant. SIWES unit was finally and officially commissioned in July 2006.
                    </p>

                    <h3><small>Objectives of SIWES</small></h3>
                    <p>
                        The programmes of SIWES are designed to achieve the following objectives:<br>
                        <span class="highlight-list">*</span> Provision of avenue for students to acquire industrial skills and experience during their course of study.<br>
                        <span class="highlight-list">*</span> To prepare students for the work situation they are likely to meet after graduation.<br>
                        <span class="highlight-list">*</span> To expose students to work methods and techniques in handling equipment and machinery that may not be available in universities.<br>
                        <span class="highlight-list">*</span> To provide students with an opportunity to apply their theoretical knowledge in real work situations, thereby bridging the gap between theory and practice.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>

</body>
</html>