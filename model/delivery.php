<?php
require "db.php";

function getMyDeliveries($staff_id)
{
    $conn = connect();

    $sql = "SELECT delivery.id, delivery.order_id, delivery.status,
            single_order.total_amount, users.name, users.email,
            users.phone, users.address, products.name AS product_name
            FROM delivery
            JOIN single_order ON delivery.order_id = single_order.id
            JOIN users ON single_order.user_id = users.id
            JOIN products ON single_order.product_id = products.id
            WHERE delivery.staff_id='$staff_id'";

    return mysqli_query($conn, $sql);
}

function getDelivery($id, $staff_id)
{
    $conn = connect();

    $sql = "SELECT delivery.id, delivery.order_id, delivery.status,delivery.delivery_date,
            single_order.total_amount, users.name, users.email,
            users.phone, users.address, products.name AS product_name
            FROM delivery
            JOIN single_order ON delivery.order_id = single_order.id
            JOIN users ON single_order.user_id = users.id
            JOIN products ON single_order.product_id = products.id
            WHERE delivery.id='$id' AND delivery.staff_id='$staff_id'";

    $result = mysqli_query($conn, $sql);

    return mysqli_fetch_assoc($result);
}

function updateDeliveryStatus($id, $staff_id, $status)
{
    $conn = connect();

    if ($status == "Delivered") {
        $sql = "UPDATE delivery
                SET status='$status', delivery_date=NOW()
                WHERE id='$id' AND staff_id='$staff_id'";
    }
    else {
        $sql = "UPDATE delivery
                SET status='$status'
                WHERE id='$id' AND staff_id='$staff_id'";
    }

    return mysqli_query($conn, $sql);
}
function getDeliveryHistory($staff_id)
{
    $conn = connect();

    $sql = "SELECT delivery.id, delivery.order_id, delivery.status,
            single_order.total_amount, users.name,
            users.phone, users.address, products.name AS product_name
            FROM delivery
            JOIN single_order ON delivery.order_id = single_order.id
            JOIN users ON single_order.user_id = users.id
            JOIN products ON single_order.product_id = products.id
            WHERE delivery.staff_id='$staff_id'
            AND (delivery.status='Delivered' OR delivery.status='Failed Delivery')";

    return mysqli_query($conn, $sql);
}
?>