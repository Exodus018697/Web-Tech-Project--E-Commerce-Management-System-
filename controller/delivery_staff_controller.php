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

$result = getMyDeliveries($staff_id);

$total = 0;
$pending = 0;
$out = 0;
$delivered = 0;
$failed = 0;

while ($row = mysqli_fetch_assoc($result)) {

    $total++;

    if ($row['status'] == "Pending") {
        $pending++;
    }
    elseif ($row['status'] == "Out for Delivery") {
        $out++;
    }
    elseif ($row['status'] == "Delivered") {
        $delivered++;
    }
    elseif ($row['status'] == "Failed Delivery") {
        $failed++;
    }
}

$result = getMyDeliveries($staff_id);

require "../view/delivery/dashboard.php";
?>