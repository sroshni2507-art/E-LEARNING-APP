<?php

header("Content-Type: application/json");

include "db.php";

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

$students = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}

echo json_encode($students);

$conn->close();

?>