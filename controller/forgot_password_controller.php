<?php

session_start();

require "../model/db.php";

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = connect();

    $sql = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $sql_update = "UPDATE users SET password = '$password' WHERE email = '$email'";

        $update = mysqli_query($conn, $sql_update);

        if ($update) {

            $_SESSION['forgotMessage'] = "Password changed successfully.";

        } else {

            $_SESSION['forgotMessage'] = "Error changing password.";

        }

    } else {

        $_SESSION['forgotMessage'] = "Email does not exist.";

    }

    header("Location: ../view/forgot_password.php");
    exit();
}

header("Location: ../view/forgot_password.php");
exit();

?>
