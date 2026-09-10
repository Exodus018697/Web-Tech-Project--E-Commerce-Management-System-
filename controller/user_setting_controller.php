<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../view/sign_in.php");
    exit();
}

if ($_SESSION['user_role'] != "customer") {
    header("Location: ../index.php");
    exit();
}


/* Default settings */

$emailNotifications = $_SESSION['email_notifications'] ?? true;
$loginNotifications = $_SESSION['login_notifications'] ?? true;
$twoFactor = $_SESSION['two_factor'] ?? false;


/* Save settings */

if (isset($_POST['save'])) {

    $emailNotifications = isset($_POST['email_notifications']);
    $loginNotifications = isset($_POST['login_notifications']);
    $twoFactor = isset($_POST['two_factor']);


    /* Save in session */

    $_SESSION['email_notifications'] = $emailNotifications;
    $_SESSION['login_notifications'] = $loginNotifications;
    $_SESSION['two_factor'] = $twoFactor;


    $message = "Settings saved successfully.";
}


/* Load view */

require "../view/user_setting.php";

?>
