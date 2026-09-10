<?php
require '../model/User.php';
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
            }
            elseif ($user['role'] == "manager") {
                header("Location: ../controller/manager_controller.php");
            }
            elseif ($user['role'] == "customer") {
                header("Location: ../index.php");
            }
        }
        else {
            $_SESSION['loginError'] = "Email or password is wrong.";
            header("Location: ../view/sign_in.php");
        }
    }
}

?>
