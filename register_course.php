<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

include "backend/db.php";

$user_id = $_SESSION["user_id"];
$course_id = $_POST["course_id"];

$sql = "INSERT INTO course_registrations (user_id, course_id)
        VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $user_id, $course_id);

if ($stmt->execute()) {
    echo "<script>
            alert('Course registered successfully!');
            window.location.href='courses.php';
          </script>";
} else {
    echo "Registration failed: " . $conn->error;
}

$stmt->close();
$conn->close();

?>