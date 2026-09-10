<?php 
require '../model/User.php';
session_start();
$_SESSION['nameError'] = "";
$_SESSION['emailError'] = "";
$_SESSION['passwordError'] = "";
$_SESSION['phoneError'] = "";
$_SESSION['addressError'] = "";
$_SESSION['successMessage'] = "";
$req = $_SERVER['REQUEST_METHOD'];
if ($req === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role = "customer";
    $flag = true;
    if (empty($name)) {
        $flag = false;
        $_SESSION['nameError'] = "Name cannot be empty.";
    }
    if (empty($email)) {
        $flag = false;
        $_SESSION['emailError'] = "Email cannot be empty.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $flag = false;
        $_SESSION['emailError'] = "Invalid email.";
    }
    if (empty($password)) {
        $flag = false;
        $_SESSION['passwordError'] = "Password cannot be empty.";
    }
    elseif (strlen($password) < 6) {
        $flag = false;
        $_SESSION['passwordError'] = "Password must be at least 6 characters.";
    }
    if (empty($phone)) {
        $flag = false;
        $_SESSION['phoneError'] = "Phone number cannot be empty.";
    }
    elseif (!is_numeric($phone)) {
        $flag = false;
        $_SESSION['phoneError'] = "Phone number must contain only numbers.";
    }
    if (empty($address)) {
        $flag = false;
        $_SESSION['addressError'] = "Address cannot be empty.";
    }
    if ($flag) {
        $isRegistered = register(
            $name,
            $email,
            $password,
            $phone,
            $address,
            $role
        );
        if ($isRegistered) {
            $_SESSION['successMessage'] = "Register Successful";
        }
        else {
            $_SESSION['successMessage'] = "Error! Registration failed.";
        }
    }
    header("Location: ../view/sign_up.php");
}
else {
    header("Location: ../view/sign_up.php");
}
?>
