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
require "../model/db.php";
$conn = connect();
$sql = "SELECT * FROM users WHERE role = 'customer'";
$result = mysqli_query($conn, $sql);
require "../view/manager/manager.php";
?>
