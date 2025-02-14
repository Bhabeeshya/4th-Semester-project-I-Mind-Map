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

// Get the POST data
$data = json_decode(file_get_contents('php://input'), true);
$score = isset($data['score']) ? $data['score'] : 0;

// Store the score in the database
$sql = "INSERT INTO depression_scores (score) VALUES ('$score')";
$response = [];

if ($conn->query($sql) === TRUE) {
    $response['success'] = true;
} else {
    $response['success'] = false;
    $response['error'] = $conn->error;
}

// Close the connection
$conn->close();

// Send response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
