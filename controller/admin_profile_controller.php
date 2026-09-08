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

$id = $_SESSION['user_id'];

$user = getUser($id);

require "../view/admin/admin_profile.php";

?>
