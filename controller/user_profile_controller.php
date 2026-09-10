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


/* Get user */

$user = getCustomer($userId);

if (!$user) {
    header("Location: ../index.php");
    exit();
}


/* Update profile */

if (isset($_POST['update'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    if ($name == '' || $email == '') {

        $message = "Please fill in all required fields.";

    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message = "Please enter a valid email.";

    }
    else {

        if (updateUser($userId, $name, $email, $phone)) {

            $message = "Profile updated successfully.";

            $user = getCustomer($userId);

            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['phone'] = $user['phone'];
        }
        else {

            $message = "Profile update failed.";

        }
    }
}


/* User data */

$name = $user['name'];
$email = $user['email'];
$phone = $user['phone'];
$role = $user['role'];

$status = "Active";

$avatar = strtoupper(substr($name, 0, 1));

if ($avatar == '') {
    $avatar = "U";
}


require "../view/user_profile.php";

?>
