<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Register | Electronic Log Book</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <style>
        body {
            background: #f7f9fc;
        }
        .register-panel {
            margin-top: 40px;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.1);
        }
        .form-icon {
            position: absolute;
            left: 15px;
            top: 12px;
            color: #6a06dd;
            font-size: 18px;
        }
        .form-control {
            padding-left: 40px !important;
            font-size: 16px;
        }
        .btn-primary {
            background-color: #6a06dd;
            border-color: #6a06dd;
        }
        .btn-primary:hover {
            background-color: #5805bb;
            border-color: #5805bb;
        }
        .position-relative {
            position: relative;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="register-panel">
                <h3 class="text-center mb-4" style="color:#6a06dd;">Create New Student Account</h3>

                <?php if(!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach($errors as $error): ?>
                            <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <form method="POST" action="student-register.php" novalidate>
                    <div class="form-row">
                        <div class="form-group col-md-6 position-relative">
                            <i class="fa fa-user form-icon"></i>
                            <input
                                type="text"
                                name="student_fullname"
                                class="form-control"
                                placeholder="Full Name"
                                required
                                autocomplete="off"
                                value="<?= isset($_POST['student_fullname']) ? htmlspecialchars($_POST['student_fullname']) : '' ?>"
                            />
                        </div>
                        <div class="form-group col-md-6 position-relative">
                            <i class="fa fa-id-badge form-icon"></i>
                            <input
                                type="text"
                                name="student_matricno"
                                class="form-control"
                                placeholder="Matric Number"
                                required
                                autocomplete="off"
                                value="<?= isset($_POST['student_matricno']) ? htmlspecialchars($_POST['student_matricno']) : '' ?>"
                            />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 position-relative">
                            <i class="fa fa-envelope form-icon"></i>
                            <input
                                type="email"
                                name="student_email"
                                class="form-control"
                                placeholder="Email"
                                required
                                autocomplete="off"
                                value="<?= isset($_POST['student_email']) ? htmlspecialchars($_POST['student_email']) : '' ?>"
                            />
                        </div>

                        <div class="form-group col-md-6 position-relative">
                            <i class="fa fa-graduation-cap form-icon"></i>
                            <select name="student_level" class="form-control" required>
                                <option value="" disabled <?= !isset($_POST['student_level']) ? 'selected' : '' ?>>-- Select Level --</option>
                                <?php
                                $levels = ['100 Level', '200 Level', '300 Level', '400 Level', '500 Level'];
                                foreach ($levels as $level) {
                                    $selected = (isset($_POST['student_level']) && $_POST['student_level'] === $level) ? 'selected' : '';
                                    echo "<option $selected>$level</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 position-relative">
                            <i class="fa fa-lock form-icon"></i>
                            <input
                                type="password"
                                name="student_password"
                                class="form-control"
                                placeholder="Password"
                                required
                                autocomplete="off"
                            />
                        </div>
                        <div class="form-group col-md-6 position-relative">
                            <i class="fa fa-lock form-icon"></i>
                            <input
                                type="password"
                                name="student_cpassword"
                                class="form-control"
                                placeholder="Confirm Password"
                                required
                                autocomplete="off"
                            />
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" name="newstudent" class="btn btn-primary">
                            Register &nbsp;<i class="fa fa-user-plus"></i>
                        </button>
                    </div>
                </form>

                <p class="text-center mt-3">
                    Already have an account? <a href="student-login.php">Login Here</a>
                </p>
            </div>

        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>