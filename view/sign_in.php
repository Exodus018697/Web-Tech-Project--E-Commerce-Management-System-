<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel = "stylesheet" href = "sign_in_style.css">
</head>
<body>
    <div class="form-container sign-in">
        <form action = "../controller/sign_in_controller.php" method = "post">
            <button type="button" id="back_button" onclick="window.location.href='../index.php'">Home</button>
            <h1>Sign In</h1>
            <br>
               <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <a href="forgot_password.php">Forget Your Password?</a>
                <button type="submit" name="submit" value="signin">Sign In</button>
                <p> Don't Have Account?</p>
                <button type="button" id="sign_up_button" onclick="window.location.href='sign_up.php'">Create Id</button>
        </form>
    </div>
</body>
</html>