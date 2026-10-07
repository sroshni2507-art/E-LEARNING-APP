<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "student_knowledge_gain";

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database
);

if ($conn->connect_error) {

    die(
        "Database Connection Failed: "
        . $conn->connect_error
    );

}

?>