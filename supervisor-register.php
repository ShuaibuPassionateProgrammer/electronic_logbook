<?php 
include('server.php');
include('admin_auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor Registration</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <style>
        h3 {
            text-transform: uppercase;
            color: #6a06dd;
        }
        .panel-heading h5 {
            margin: 0;
        }
        .form-group input, .form-group select {
            height: 45px;
        }
        .form-group label {
            font-weight: 500;
        }
        .submit-btn {
            float: right;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h3>Supervisor Registration Page</h3>
        <h5>Electronic Log Book for Student Industrial Work Scheme</h5>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5><i class="fa fa-pencil"></i> SIWES Supervisor Registration Form</h5>
        </div>

        <form action="supervisor-register.php" method="POST" enctype="multipart/form-data">
            <div class="panel-body">
                <?php include("errors.php"); ?>

                <!-- Personal Information -->
                <h5>Personal Information</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                            <input type="text" class="form-control" name="regno" placeholder="Registration Number" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="surname" placeholder="Surname" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="othersname" placeholder="Other Names" required>
                        </div>
                    </div>
                </div>

                <!-- Password Section -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="sppassword" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="spcpassword" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
                            <select class="form-control" name="gender" required>
                                <option value="">Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Contact & Location -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                            <input type="text" class="form-control" name="nationality" placeholder="Nationality" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input type="text" class="form-control" name="state" placeholder="State" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                            <input type="text" class="form-control" name="lga" placeholder="Local Government" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                            <input type="text" class="form-control" name="saddress" placeholder="Permanent Address" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="number" class="form-control" name="sphoneno" placeholder="Telephone Number" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" name="semail" placeholder="Email Address" required>
                        </div>
                    </div>
                </div>

                <!-- Academic Info -->
                <h5>Academic Information</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                            <input type="text" class="form-control" name="program" placeholder="Program of Study" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                            <input type="text" class="form-control" name="stream" placeholder="Stream" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Upload Picture</label>
                        <input type="file" name="picture" class="form-control">
                    </div>
                </div>

                <!-- Bank Info -->
                <h5>Bank Information</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                            <input type="text" class="form-control" name="bank" placeholder="Bank Name" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                            <input type="text" class="form-control" name="branch" placeholder="Branch" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                            <input type="text" class="form-control" name="acctno" placeholder="Account Number" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-credit-card-alt"></i></span>
                            <input type="text" class="form-control" name="bvn" placeholder="BVN" required>
                        </div>
                    </div>
                </div>

                <!-- Next of Kin -->
                <h5>Next of Kin</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input type="text" class="form-control" name="nextofkin" placeholder="Name of Next of Kin" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                            <input type="text" class="form-control" name="address" placeholder="Next of Kin Address" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                            <input type="number" class="form-control" name="phoneno" placeholder="Next of Kin Phone" required>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" name="spregister" class="btn btn-primary submit-btn">
                            <i class="fa fa-check"></i> Register
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="mt-4">
        <a href="admin-dashboard.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back to Dashboard</a>
    </div>
</div>

</body>
</html>