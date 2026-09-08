<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="sign_up_style.css">
</head>
<body>
    <div class="form-container sign-up">
        <form action="../controller/sign_up_controller.php" method="post" id="signupForm">
            <button type="button" id="back_button" onclick="window.location.href='sign_in.php'">Back</button>
            <h1>Create Account</h1>
            <br>
            <input type="text" name="name" id="name" placeholder="Name">
            <?php
            if (!empty($_SESSION['nameError'])) 
                {
                    echo "<div class='error'>" . $_SESSION['nameError'] . "</div><br>";
                }
            ?>
            <input type="email" name="email" id="email" placeholder="Email">
            <p id="emailMessage"></p>
            <?php
            if (!empty($_SESSION['emailError'])) 
            {
                echo "<div class='error'>" . $_SESSION['emailError'] . "</div><br>";
            }
            ?>
            <input type="password" name="password" id="password" placeholder="Password">
            <?php
            if (!empty($_SESSION['passwordError']))
                {
                    echo "<div class='error'>" . $_SESSION['passwordError'] . "</div><br>";
                }
            ?>
            <input type="text" name="phone" id="phone" placeholder="Phone Number">
            <?php
            if (!empty($_SESSION['phoneError']))
                {
                     echo "<div class='error'>" . $_SESSION['phoneError'] . "</div><br>";
                }
            ?>
            <input type="text" name="address" id="address" placeholder="Address Here">
            <?php
            if (!empty($_SESSION['addressError'])) 
                {
                    echo "<div class='error'>" . $_SESSION['addressError'] . "</div>";
                }
            ?>
            <button type="submit" name="submit" value="signup">Sign Up</button>
            <?php
            if (!empty($_SESSION['successMessage'])) 
                {
                    echo "<p class='success'>" . $_SESSION['successMessage'] . "</p>";
                }
            ?>
        </form>
    </div>
    <script src="../view/js/sign_up_js.js"></script>
</body>
</html>
