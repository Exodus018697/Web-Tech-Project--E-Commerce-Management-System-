<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../view/sign_in.php");
    exit();
}

if ($_SESSION['user_role'] != "admin") {
    header("Location: ../index.php");
    exit();
}

require "../model/user.php";

$result = getAllUsers();

require "../view/admin/admin_panel.php";

?>
