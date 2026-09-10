<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
    <?php
    if (isset($_SESSION['successMessage'])) 
        {
        echo $_SESSION['successMessage'];
        }
    ?>
    <br>
    <br>
    <br>
    <button class="nav-item" onclick="window.location.href='../index.php'"> <span class="bullet"></span>Home</button>
</body>
</html>