<?php
session_start();
if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
    unset($_SESSION['errors']); // Clear errors after displaying
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mind Map Login</title>
  <link rel="stylesheet" href="./register.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <span class="logo">
        
         <img style="height: 40px; width: 40px;" src="output-onlinepngtools.png" alt="">
      </span>
      <h1>Mind Map</h1>
    </div>
    <div class="content">
        <!-- <img src="mental health images.jpg" alt=""> -->
      
        <div class="login-form" style="margin-top: -30px;">


        <form action="back.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="Name" placeholder="Enter name">
        <label for="username">Username:</label>
        <input type="text" id="username" name="Username" placeholder="Enter username">
        <label for="password">Password:</label>
        <input type="text" id="password" name="Password" placeholder="Enter password">
        <label for="password">Email:</label>
        <input type="text" id="email" name="Email" placeholder="Enter email">
        <label for="password">Phone Number:</label>
        <input type="text" id="number" name="PhoneNumber" placeholder="Enter phone number">

        <button type="submit">Register</button>
        </form>
      </div>
    </div>
  </div>     
      
</body>
</html>
