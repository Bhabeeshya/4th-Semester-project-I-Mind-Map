<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mindmapproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = intval($_POST["score"]);

    $stmt = $conn->prepare("INSERT INTO anxiety_scores (score, created_at) VALUES (?, NOW())");
    $stmt->bind_param("i", $score);

    if ($stmt->execute()) {
        echo "Score successfully saved!";
        header("Location: ./depression.php");
        exit;
        
    } else {
        echo "Error: " . $stmt->error;
        header("Location: ./anxiety.php");
        exit;

    }

    $stmt->close();
}

$conn->close();
?>
