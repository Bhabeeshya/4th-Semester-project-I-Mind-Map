<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mind Map Registration</title>
  <link rel="stylesheet" href="./register.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <span class="logo">
         <img style="height: 40px; width: 40px;" src="output-onlinepngtools.png" alt="Logo">
      </span>
      <h1>Mind Map</h1>
    </div>
    <div class="content">
        <div class="login-form" style="margin-top: -30px;">
            <?php
            if (isset($_SESSION['msg'])) {
                echo '<p class="message" style="color:green;">' . htmlspecialchars($_SESSION['msg']) . '</p>';
                unset($_SESSION['msg']);
            }
            ?>
            <form action="back.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="Name" placeholder="Enter name" required>
                <span>
                    <?php
                    if (isset($_SESSION['NameError'])) {
                        echo "<br><p style='color: red; margin-top: -1.1rem;'>" . htmlspecialchars($_SESSION['NameError']) . "</p>";
                        unset($_SESSION['NameError']);
                    }
                    ?>
                </span>

                <label for="username">Username:</label>
                <input type="text" id="username" name="Username" placeholder="Enter username" required>
                <span>
                    <?php
                    if (isset($_SESSION['UsernameError'])) {
                        echo "<br><p style='color: red; margin-top: -1.1rem;'>" . htmlspecialchars($_SESSION['UsernameError']) . "</p>";
                        unset($_SESSION['UsernameError']);
                    }
                    ?>
                </span>

                <label for="password">Password:</label>
                <input type="password" id="password" name="Password" placeholder="Enter password" required>
                <span>
                    <?php
                    if (isset($_SESSION['PasswordError'])) {
                        echo "<br><p style='color: red; margin-top: -1.1rem;'>" . htmlspecialchars($_SESSION['PasswordError']) . "</p>";
                        unset($_SESSION['PasswordError']);
                    }
                    ?>
                </span>

                <label for="email">Email:</label>
                <input type="email" id="email" name="Email" placeholder="Enter email" required>
                <span>
                    <?php
                    if (isset($_SESSION['EmailError'])) {
                        echo "<br><p style='color: red; margin-top: -1.1rem;'>" . htmlspecialchars($_SESSION['EmailError']) . "</p>";
                        unset($_SESSION['EmailError']);
                    }
                    ?>
                </span>

                <label for="number">Phone Number:</label>
                <input type="text" id="number" name="PhoneNumber" placeholder="Enter phone number" required pattern="\d{10}">
                <span>
                    <?php
                    if (isset($_SESSION['PhoneNumberError'])) {
                        echo "<br><p style='color: red; margin-top: -1.1rem;'>" . htmlspecialchars($_SESSION['PhoneNumberError']) . "</p>";
                        unset($_SESSION['PhoneNumberError']);
                    }
                    ?>
                </span>

                <button type="submit">Register</button>
            </form>
        </div>
    </div>
  </div>
</body>
</html>
