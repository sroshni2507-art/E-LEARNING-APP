<?php

include "db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = trim($_POST["name"]);

    $email = trim($_POST["email"]);

    $password = $_POST["password"];


    // CHECK EMPTY

    if (
        empty($name) ||
        empty($email) ||
        empty($password)
    ) {

        die("Please fill all fields.");

    }


    // CHECK EMAIL

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        die("Invalid email address.");

    }


    // CHECK PASSWORD

    if (strlen($password) < 6) {

        die(
            "Password must contain at least 6 characters."
        );

    }


    // CHECK EXISTING EMAIL

    $check = $conn->prepare(
        "SELECT id FROM users WHERE email = ?"
    );

    $check->bind_param(
        "s",
        $email
    );

    $check->execute();

    $result = $check->get_result();


    if ($result->num_rows > 0) {

        echo "<script>

                alert('Email already registered!');

                window.location.href='../login.php';

              </script>";

        exit();

    }


    // PASSWORD HASH

    $hashedPassword = password_hash(
        $password,
        PASSWORD_DEFAULT
    );


    // INSERT USER

    $stmt = $conn->prepare(
        "INSERT INTO users
        (name, email, password)
        VALUES (?, ?, ?)"
    );


    $stmt->bind_param(
        "sss",
        $name,
        $email,
        $hashedPassword
    );


    if ($stmt->execute()) {

        echo "<script>

                alert('Registration successful!');

                window.location.href='../login.php';

              </script>";

    }

    else {

        echo "Registration failed.";

    }


    $stmt->close();

    $check->close();

    $conn->close();

}

?>