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

$id = $_POST['id'];
$status = $_POST['status'];

updateDeliveryStatus($id, $staff_id, $status);

header("Location: delivery_details_controller.php?id=" . $id);
exit();
?>