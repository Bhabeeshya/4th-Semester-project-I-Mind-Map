<?php
// Database connection details
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'mindmapproject';

// Create a connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the latest anxiety score
$sql = "SELECT score FROM anxiety_scores ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(['score' => $row['score']]);
} else {
    echo json_encode(['score' => null]);
}

$conn->close();
?>
