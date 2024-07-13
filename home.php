<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home | Selection</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-12 text-center"><h3 style="text-transform: uppercase; color: #6a06dd;">electronic log book for student attachment industrial work scheme</h3></div>
    </div>

    <div class="container mt-5" style="margin-top: 100px">
        <div class="row justify-content-center" style="margin-top: 100px">
            <div class="col-md-4">
                <a href="student-login.php">
                    <div class="card rounded shadow">
                        <div class="card-body text-center">
                            <img src="images/student_image.png" alt="" class="logo p-2" style="box-shadow: 0 1px 5px rgba(2,2,2,.2); border-radius: 200px">
                        </div>
                        <div class="card-body text-center rounded">
                            <button class="btn btn-outline-primary rounded librarian btn-lg w-50" style="border-radius: 20px">Student Area</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="supervisor-login.php">
                    <div class="card rounded shadow">
                        <div class="card-body text-center">
                            <img src="images/supervisor_image.png" alt="" class="logo p-2" style="box-shadow: 0 1px 5px rgba(2,2,2,.2); border-radius: 200px">
                        </div>
                        <div class="card-body text-center rounded">
                            <button class="btn btn-outline-primary rounded librarian btn-lg w-50" style="border-radius: 20px">Supervisor Area</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="admin-login.php">
                    <div class="card rounded shadow">
                        <div class="card-body text-center">
                            <img src="images/admin_image.png" alt="" class="logo p-2" style="box-shadow: 0 1px 5px rgba(2,2,2,.2); border-radius: 200px">
                        </div>
                        <div class="card-body text-center rounded">
                            <button class="btn btn-outline-primary rounded librarian btn-lg w-50" style="border-radius: 20px">Admin Area</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php include('includes/footer.php');?>