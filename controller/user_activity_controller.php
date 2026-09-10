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

require "../view/user_activity.php";

?>
