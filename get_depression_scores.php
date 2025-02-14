<?php
// Database Configuration
$servername = "localhost";
$username = "root"; // Change if different
$password = ""; // Change if different
$database = "mindmapproject";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all depression scores
$sql = "SELECT score FROM depression_scores";
$result = $conn->query($sql);

$scores = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $scores[] = $row['score'];
    }
}

// Return scores as JSON
header('Content-Type: application/json');
echo json_encode($scores);

// Close the connection
$conn->close();
?>
