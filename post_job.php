<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_id = $_POST["company_id"];
    $title = $_POST["title"];
    $description = $_POST["description"];

    // Insert job into database
    $sql = "INSERT INTO jobs (company_id, title, description) VALUES ($company_id, '$title', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "Job posted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
vvvv