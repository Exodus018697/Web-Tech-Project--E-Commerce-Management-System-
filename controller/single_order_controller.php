<?php
require "../model/Product.php";
session_start();
if (!isset($_SESSION['user_id']))
    {
        header("Location: ../view/sign_in.php");
        exit;
    }
$id = $_GET['id'];
$product = getProduct($id);
include "../view/single_order.php";
?>
