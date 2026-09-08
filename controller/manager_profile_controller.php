<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../view/sign_in.php");
    exit();
}
if ($_SESSION['user_role'] != "manager") {
    header("Location: ../index.php");
    exit();
}
require "../model/User.php";
$id = $_SESSION['user_id'];
$user = getUser($id);
require "../view/manager/manager_profile.php";
?>
