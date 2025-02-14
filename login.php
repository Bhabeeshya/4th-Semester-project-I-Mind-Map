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
        <?php
            if (isset($_SESSION['msg'])) {
                echo '<p class="message" style="color:green;">' . htmlspecialchars($_SESSION['msg']) . '</p>';
                unset($_SESSION['msg']);
            }
            ?>
      <form action="./loginbackend.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter username">
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" placeholder="Enter password">
        
      <button type="submit">Login</button>
      <!-- <div class="text">
        <h2>Do you have an account? Register</h2>
      </div> -->
      </form>
      </div>
     
      </div>
    </div>
  </div>
</body>
</html>
