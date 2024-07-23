<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];

    // Insert company into database
    $sql = "INSERT INTO companies (name, description) VALUES ('$name', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "Company added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
