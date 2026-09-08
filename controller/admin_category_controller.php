<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../view/sign_in.php");
    exit();
}
if ($_SESSION['user_role'] != "admin") {
    header("Location: ../index.php");
    exit();
}
require "../model/db.php";
$message = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $conn = connect();
    $sql = "INSERT INTO categories (name) VALUES ('$name')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $message = "Category added successfully";
    } else {
        $message = "Error adding category";
    }
}
require "../view/admin/add_category.php";
?>
