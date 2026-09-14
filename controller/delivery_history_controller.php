<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../view/sign_in.php");
    exit();
}

if ($_SESSION['user_role'] != "delivery_staff") {
    header("Location: ../index.php");
    exit();
}

require "../model/delivery.php";

$staff_id = $_SESSION['user_id'];

$result = getDeliveryHistory($staff_id);

require "../view/delivery/history.php";
?>