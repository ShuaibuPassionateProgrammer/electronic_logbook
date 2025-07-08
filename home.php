<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Selection</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap4.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .area-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
            background-color: #ffffff;
            border: none;
        }

        .area-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
        }

        .area-card img {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            width: 130px;
            height: 130px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .area-card:hover img {
            transform: scale(1.05);
        }

        .area-card button {
            font-weight: 500;
            font-size: 1.1rem;
        }

        .area-card img {
            box-shadow: 0 1px 5px rgba(2, 2, 2, 0.2);
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
        .area-card .btn {
            border-radius: 20px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="text-center mt-5">
        <h1 class="text-uppercase text-primary font-weight-bold">
            Electronic Logbook for Student Attachment Industrial Work Scheme
        </h1>
    </header>
<!-- Main Content -->
<main class="container my-5">
    <section class="row justify-content-center">

        <!-- Role Card Template (Repeat this block for each role) -->
        <?php
            $roles = [
                ['title' => 'Student Area', 'image' => 'student_image.png', 'link' => 'student-login.php', 'alt' => 'Student Icon'],
                ['title' => 'Supervisor Area', 'image' => 'supervisor_image.png', 'link' => 'supervisor-login.php', 'alt' => 'Supervisor Icon'],
                ['title' => 'Admin Area', 'image' => 'admin_image.png', 'link' => 'admin-login.php', 'alt' => 'Admin Icon'],
            ];

            foreach ($roles as $role) {
        ?>
            <div class="col-md-4 col-sm-6 mb-4 d-flex align-items-stretch">
                <a href="<?= $role['link'] ?>" class="text-decoration-none w-100">
                    <div class="card area-card shadow-sm text-center py-5 px-4 h-100">
                        <div class="role-image mb-4">
                            <img src="images/<?= $role['image'] ?>" alt="<?= $role['alt'] ?>">
                        </div>
                        <button class="btn btn-primary btn-lg rounded-pill px-4"><?= $role['title'] ?></button>
                    </div>
                </a>
            </div>
        <?php } ?>
        
    </section>
</main>


    <!-- Footer -->
    <?php include('includes/footer.php'); ?>

</body>
</html>