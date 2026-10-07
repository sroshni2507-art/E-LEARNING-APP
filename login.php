<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login - StudentInfo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="css/style.css">

</head>

<body class="bg-light">


<!-- NAVBAR -->

<nav class="navbar navbar-dark bg-dark shadow">

    <div class="container">

        <a class="navbar-brand fw-bold"
           href="index.html">

            StudentInfo

        </a>

        <div>

            <a href="index.html"
               class="btn btn-outline-light me-2">

                Home

            </a>

            <a href="register.php"
               class="btn btn-primary">

                Register

            </a>

        </div>

    </div>

</nav>


<!-- LOGIN -->

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-4">

            <div class="card shadow p-4">

                <h2 class="text-center mb-4">
                    Student Login
                </h2>


                <form action="backend/login_process.php"
                      method="POST"
                      onsubmit="return validateLogin()">


                    <!-- EMAIL -->

                    <div class="mb-3">

                        <label class="form-label">
                            Email
                        </label>

                        <input type="email"
                               name="email"
                               id="logEmail"
                               class="form-control"
                               placeholder="Enter your email"
                               required>

                    </div>


                    <!-- PASSWORD -->

                    <div class="mb-3">

                        <label class="form-label">
                            Password
                        </label>

                        <input type="password"
                               name="password"
                               id="logPass"
                               class="form-control"
                               placeholder="Enter your password"
                               required>

                    </div>


                    <button type="submit"
                            class="btn btn-success w-100">

                        Login Now

                    </button>

                </form>


                <p class="text-center mt-3">

                    Don't have an account?

                    <a href="register.php">
                        Register here
                    </a>

                </p>


                <p class="text-center">

                    <a href="index.html">
                        ← Back to Home
                    </a>

                </p>

            </div>

        </div>

    </div>

</div>


<script src="js/script.js"></script>

</body>

</html>