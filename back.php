<?php
session_start();
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'mindmapproject');
if (!$con) {
    // $_SESSION['msg'] = "Registration Failed: Unable to connect to database.";
    // header('Location: register.php');
    // exit();
    echo "failed";
}

// Collect data from form
$name = $_POST['Name'];
$username = $_POST['Username'];
$password = $_POST['Password'];
$email = $_POST['Email'];
$phone_number = $_POST['PhoneNumber'];

// Initialize an array to hold error messages
$errors = [];

// Name validation
if (empty($name)) {
    array_push($errors, "Full Name is required.");
} elseif (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
    array_push($errors, "Full Name should only contain letters and spaces.");
}
//Username validation
if (empty($username)) {
    array_push($errors, "Username is required.");
} elseif (!preg_match("/^[a-zA-Z0-9_]+$/", $username)) {
    array_push($errors, "Username should only contain letters, numbers, and underscores.");
} elseif (strlen($username) < 3 || strlen($username) > 15) {
    array_push($errors, "Username must be between 3 and 15 characters long.");
}

// Password validation
if (empty($password)) {
    array_push($errors, "Password is required.");
} elseif (strlen($password) < 6) {
    array_push($errors, "Password must be at least 6 characters long.");
}
// Email validation
if (empty($email)) {
    array_push($errors, "Email is required.");
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($errors, "Invalid email format.");
}
// Phone validation
if (empty($phone_number)) {
    array_push($errors, "Phone number is required.");
} elseif (!preg_match("/^[0-9]{10}$/", $phone_number)) {
    array_push($errors, "Invalid phone number. Must be 10 digits.");
}
// if (empty($phone_number)) {
//     array_push($errors, "Phone number is required.");
// } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
//     array_push($errors, "Invalid phone number. Must be 10 digits.");
// }
// Insert data into the database
if (empty($errors)) {
$sql = "INSERT INTO registration(Name, Username, Password, Email, PhoneNumber) VALUES('$name','$username', '$password', '$email', '$phone_number')";

if (mysqli_query($con, $sql)) {
    // Redirect to login page after successful registration
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . mysqli_error($con);
} 
  // Close the connection
  mysqli_close($con);
}else {
    // Store errors in session and redirect back to the registration page
    session_start();
    $_SESSION['errors'] = $errors;
    header('Location: login.php');
    exit();
}
// $res= (mysqli_query($con, $sql));
// if(!$res) {
//     $_SESSION['msg'] = "Registration Failed: " . mysqli_error($con);
// } else {
//     $_SESSION['msg'] = "Registration Successful!";
// }

// Redirect back to the registration page
// header('Location: login.php');
?>