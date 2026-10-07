<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Register - StudentInfo</title>

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

            <a href="login.php"
               class="btn btn-success">

                Login

            </a>

        </div>

    </div>

</nav>


<!-- REGISTER FORM -->

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow p-4">

                <h2 class="text-center mb-4">
                    Create Account
                </h2>


                <form action="backend/register_process.php"
                      method="POST"
                      onsubmit="return validateRegister()">


                    <!-- NAME -->

                    <div class="mb-3">

                        <label class="form-label">
                            Full Name
                        </label>

                        <input type="text"
                               name="name"
                               id="regName"
                               class="form-control"
                               placeholder="Enter your name"
                               required>

                    </div>


                    <!-- EMAIL -->

                    <div class="mb-3">

                        <label class="form-label">
                            Email Address
                        </label>

                        <input type="email"
                               name="email"
                               id="regEmail"
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
                               id="regPass"
                               class="form-control"
                               placeholder="Minimum 6 characters"
                               required>

                    </div>


                    <!-- REGISTER -->

                    <button type="submit"
                            class="btn btn-primary w-100">

                        Register

                    </button>

                </form>


                <p class="text-center mt-3">

                    Already have an account?

                    <a href="login.php">
                        Login here
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