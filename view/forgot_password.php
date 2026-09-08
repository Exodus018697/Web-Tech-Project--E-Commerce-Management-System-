<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel = "stylesheet" href = "sign_in_style.css">
</head>
<body>
<div class="form-container">
    <form action="../controller/forgot_password_controller.php" method="POST">
        <h1>Forgot Password</h1>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="New Password" required>
        <button type="submit" name="submit">Change Password</button>
        <a href="sign_in.php">Back to Sign In</a>
         <?php
    session_start();
    if (!empty($_SESSION['forgotMessage']))
        {
            echo "<p>" . $_SESSION['forgotMessage'] . "</p>";
            unset($_SESSION['forgotMessage']);
        }
    ?>
    </form>
</div>
</body>
</html>
