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
$message = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role = "manager";
    $result = register(
        $name,
        $email,
        $password,
        $phone,
        $address,
        $role
    );
    if ($result) {
        $message = "Manager added successfully";
    } else {
        $message = "Error adding manager";
    }
}
require "../view/admin/add_manager.php";
?>
