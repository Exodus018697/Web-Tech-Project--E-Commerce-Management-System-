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
require "../model/order.php";
$result = getAllOrders();
require "../view/manager/order_history.php";
?>
