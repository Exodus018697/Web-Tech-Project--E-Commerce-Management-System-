<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../model/user.php';

session_start();

$_SESSION['loginError'] = "";

if (isset($_POST['submit'])) {

    if ($_POST['submit'] == 'signin') {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = login($email, $password);

        if ($user) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_role'] = $user['role'];

            if ($user['role'] == "admin") {
                header("Location: admin_controller.php");
            } elseif ($user['role'] == "manager") {
                header("Location: manager_controller.php");
            } elseif ($user['role'] == "customer") {
                header("Location: ../index.php");
            } elseif ($user['role'] == "delivery_staff") {
                header("Location: delivery_staff_controller.php");
            }

            exit();
        } else {
            $_SESSION['loginError'] = "Email or password is wrong.";
            header("Location: ../view/sign_in.php");
            exit();
        }
    }
}
