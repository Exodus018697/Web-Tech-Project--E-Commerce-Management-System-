<?php
require "../model/order.php";
session_start();
$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$payment_method = $_POST['payment_method'];
$result = makeOrder($user_id, $product_id, $quantity, $payment_method);
if ($result) {
    $_SESSION['successMessage'] = "Order successful!";
}
else {
    $_SESSION['successMessage'] = "Order failed!";
}
header("Location: ../view/payment.php");
?>
