<?php
session_start();
$isValid = true;

// Clear previous errors
$_SESSION['errors'] = [];
$Name = $_POST['Name'];
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$PhoneNumber = $_POST['PhoneNumber'];

// Validate Name
if (!preg_match("/^[a-zA-Z ]+$/", $Name)) {
    $_SESSION['NameError'] = "Invalid Name.";
    $isValid = false;
}

// Validate Username
if (!preg_match("/^[a-zA-Z0-9]+$/", $Username)) {
    $_SESSION['UsernameError'] = "Invalid Username.";
    $isValid = false;
}

// Validate Email
if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['EmailError'] = "Invalid email address.";
    $isValid = false;
}

// Validate Password
if (!preg_match("/^(?=.*[a-zA-Z])(?=.*\d)(?=.*\W).{8,}$/", $Password)) {
    $_SESSION['PasswordError'] = "Password must be at least 8 characters, include letters, numbers, and symbols.";
    $isValid = false;
}

// Validate Phone Number
if (!preg_match("/^9\d{9}$/", $PhoneNumber)) {
    $_SESSION['PhoneNumberError'] = "Invalid phone number.";
    $isValid = false;
}

if ($isValid) {
    $con = mysqli_connect('localhost', 'root', '', 'mindmapproject');
    if (!$con) {
        $_SESSION['msg'] = "Database connection failed.";
        header('Location: ./register.php');
        exit();
    }

    // Check for existing email
    $stmt = $con->prepare("SELECT * FROM registration WHERE Email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $emailCheckResult = $stmt->get_result();

    if ($emailCheckResult->num_rows > 0) {
        $_SESSION['msg'] = "Email already registered.";
        header('Location: ./register.php');
        exit();
    }

    // Insert into database using prepared statements
    $stmt = $con->prepare("INSERT INTO registration (Name, Username, Email, Password, PhoneNumber) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $Name, $Username, $Email, $Password, $PhoneNumber);

    if ($stmt->execute()) {
        $_SESSION['msg'] = "Registration Successful!";
        header("Location: ./login.php");
    } else {
        $_SESSION['msg'] = "Registration Failed: " . $stmt->error;
        header('Location: ./register.php');
    }
    $stmt->close();
    $con->close();
} else {
    header('Location: ./register.php');
}
?>
