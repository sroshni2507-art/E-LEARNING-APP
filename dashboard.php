<?php

session_start();


if (!isset($_SESSION["user_id"])) {

    header("Location: login.php");

    exit();

}


$name =
    $_SESSION["user_name"];


$email =
    $_SESSION["user_email"];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard - StudentInfo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="css/style.css">

</head>

<body>


<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand"
           href="dashboard.php">

            StudentInfo

        </a>


        <div>

            <a href="dashboard.php"
               class="btn btn-outline-light me-2">

                Dashboard

            </a>

            <a href="courses.php"
               class="btn btn-primary me-2">

                Courses

            </a>

            <a href="logout.php"
               class="btn btn-danger">

                Logout

            </a>

        </div>

    </div>

</nav>


<!-- WELCOME -->

<div class="container mt-5">

    <div class="welcome-box">

        <h1>
            Welcome, <?php echo htmlspecialchars($name); ?>!
        </h1>

        <p>
            Email:
            <?php echo htmlspecialchars($email); ?>
        </p>

        <p>
            Welcome to your StudentInfo
            E-Learning Dashboard.
        </p>

    </div>


    <!-- CARDS -->

    <div class="row mt-4">


        <!-- COURSES -->

        <div class="col-md-4">

            <div class="card shadow p-4 text-center h-100">

                <h3>
                    📚 Courses
                </h3>

                <p>
                    Explore available courses.
                </p>

                <a href="courses.php"
                   class="btn btn-primary">

                    View Courses

                </a>

            </div>

        </div>


        <!-- PROFILE -->

        <div class="col-md-4">

            <div class="card shadow p-4 text-center h-100">

                <h3>
                    👨‍🎓 Profile
                </h3>

                <p>
                    View your student information.
                </p>

                <button class="btn btn-success"
                        onclick="showProfile()">

                    View Profile

                </button>

            </div>

        </div>


        <!-- PROGRESS -->

        <div class="col-md-4">

            <div class="card shadow p-4 text-center h-100">

                <h3>
                    📈 Progress
                </h3>

                <p>
                    Track your learning progress.
                </p>

                <button class="btn btn-warning"
                        onclick="showProgress()">

                    View Progress

                </button>

            </div>

        </div>

    </div>

</div>


<script src="js/script.js"></script>

</body>

</html>