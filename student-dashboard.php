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
        body {
            background-color: #f9f9f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .panel {
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 6px;
            border: none;
            margin-top: 30px;
        }

        .panel-heading {
            background-color: #6a06dd;
            color: #fff;
            font-weight: 600;
            font-size: 1.1rem;
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
            padding: 15px 20px;
            display: flex;
            align-items: center;
        }

        .panel-heading i.fa {
            margin-right: 10px;
            font-size: 1.3rem;
        }

        .panel-body {
            background: #fff;
            color: #222;
            font-size: 1rem;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
            padding: 25px 30px;
            line-height: 1.6;
        }

        h3 small {
            font-weight: 600;
            color: #6a06dd;
        }

        p {
            margin-bottom: 20px;
        }

        .objectives-list span {
            color: #d9534f;
            font-weight: bold;
            font-size: 1.2rem;
            margin-right: 6px;
            vertical-align: middle;
        }
    </style>
</head>
<body>

<?php include("student-menu.php"); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <i class="fa fa-check"></i> Brief Historical Background of (SIWES)
                </div>
                <div class="panel-body">
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
                        <ul class="objectives-list" style="list-style: none; padding-left: 0;">
                            <li><span>*</span> Provision of avenue for students to acquire industrial skills and experience during their course of study.</li>
                            <li><span>*</span> To prepare students for the work situation they are likely to meet after graduation.</li>
                            <li><span>*</span> To expose students to work methods and techniques in handling equipment and machineries that may not be available in the universities.</li>
                            <li><span>*</span> To provide students with an opportunity to apply their theoretical knowledge in real work situations, thereby bridging the gap between theory and practice.</li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

<!-- Bootstrap JS (Optional if you have any JS components) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>