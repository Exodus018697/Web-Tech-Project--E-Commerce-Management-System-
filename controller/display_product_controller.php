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
require "../model/product.php";
$message = "";
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $result = deleteProduct($id);
    if ($result) {
        $message = "Product Deleted";
    }
    else {
        $message = "Error deleting product";
    }
}
if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $result = updateStock($id);
    if ($result) {
        $message = "Stock Updated";
    }
    else {
        $message = "Error updating stock";
    }
}
$result = getProducts();
require "../view/manager/display-product.php";
?>
