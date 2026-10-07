<?php

session_start();


if (!isset($_SESSION["user_id"])) {

    header("Location: login.php");

    exit();

}


include "backend/db.php";


$result =
    $conn->query(
        "SELECT * FROM courses"
    );

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Courses - StudentInfo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="css/style.css">

</head>

<body>


<!-- NAVBAR -->

<nav class="navbar navbar-dark bg-dark">

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

            <a href="logout.php"
               class="btn btn-danger">

                Logout

            </a>

        </div>

    </div>

</nav>


<!-- COURSES -->

<div class="container mt-5">

    <h1 class="text-center mb-5">
        Available Courses
    </h1>


    <div class="row">


        <?php

        while (
            $course =
            $result->fetch_assoc()
        ) {

        ?>

        <div class="col-md-4 mb-4">

            <div class="card shadow course-card h-100">

                <div class="card-body">

                    <h3 class="card-title">

                        <?php

                        echo htmlspecialchars(
                            $course["course_name"]
                        );

                        ?>

                    </h3>


                    <p>

                        <strong>
                            Duration:
                        </strong>

                        <?php

                        echo htmlspecialchars(
                            $course["duration"]
                        );

                        ?>

                    </p>


                    <p>

                        <?php

                        echo htmlspecialchars(
                            $course["description"]
                        );

                        ?>

                    </p>


                    <form action="register_course.php" method="POST">
    <input type="hidden" name="course_id"
           value="<?php echo $course['id']; ?>">

    <button type="submit" class="btn btn-primary">
        Register Course
    </button>
</form>

                </div>

            </div>

        </div>


        <?php

        }

        ?>

    </div>

</div>


<script src="js/script.js"></script>

</body>

</html>