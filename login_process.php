<?php

session_start();

include "db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $email = trim($_POST["email"]);

    $password = $_POST["password"];


    // FIND USER

    $stmt = $conn->prepare(
        "SELECT id, name, email, password
         FROM users
         WHERE email = ?"
    );


    $stmt->bind_param(
        "s",
        $email
    );


    $stmt->execute();


    $result = $stmt->get_result();


    if ($result->num_rows == 1) {


        $user = $result->fetch_assoc();


        // VERIFY PASSWORD

        if (
            password_verify(
                $password,
                $user["password"]
            )
        ) {


            $_SESSION["user_id"] =
                $user["id"];


            $_SESSION["user_name"] =
                $user["name"];


            $_SESSION["user_email"] =
                $user["email"];


            header(
                "Location: ../dashboard.php"
            );

            exit();

        }

        else {

            echo "<script>

                    alert('Incorrect password!');

                    window.location.href='../login.php';

                  </script>";

        }

    }

    else {

        echo "<script>

                alert('Email not registered!');

                window.location.href='../login.php';

              </script>";

    }


    $stmt->close();

    $conn->close();

}

?>