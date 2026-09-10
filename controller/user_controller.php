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

require "../model/user.php";

$userId = $_SESSION['user_id'];

$user = getCustomer($userId);

if (!$user) {
    header("Location: ../index.php");
    exit();
}

$name = $user['name'];
$email = $user['email'];
$role = $user['role'];
$phone = $user['phone'];
$address = $user['address'];

$avatar = strtoupper(substr($name, 0, 1));

$status = "Active";
$createdAt = "2026";
$totalSessions = 28;
$lastLogin = "Today";
$profileUpdated = "Yesterday";

require "../view/user_dashboard.php";

?>
