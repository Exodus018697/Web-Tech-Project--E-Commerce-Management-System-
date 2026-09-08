<?php
require "db.php";
function makeOrder($user_id, $product_id, $quantity, $payment_method)
{
    // Get product
    $conn = connect();
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows == 0) {
        return false;
    }
    $product = mysqli_fetch_assoc($result);
    $price = $product['price'] * $quantity;
    $sql = "INSERT INTO single_order (user_id, product_id, total_amount) VALUES('$user_id', '$product_id', '$price')";
    $result = mysqli_query($conn, $sql);
    if (!$result) 
        {
        return false;
        }
    // Get order id
    $order_id = mysqli_insert_id($conn);
    // Add payment
    $sql = "INSERT INTO payment (order_id, user_id, product_id, price, payment_method) VALUES ('$order_id', '$user_id', '$product_id', '$price', '$payment_method')";
    $result = mysqli_query($conn, $sql);
    if (!$result) 
        {
        return false;
        }
    $sql = "UPDATE products SET stock = stock - $quantity WHERE id = $product_id";
    $result = mysqli_query($conn, $sql);
    if (!$result) 
        {
        return false;
        }
    return true;
}
function getAllOrders()
{
    $conn = connect();
    $sql = "SELECT * FROM single_order";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getAllPayments()
{
    $conn = connect();
    $sql = "SELECT * FROM payment";
    $result = mysqli_query($conn, $sql);
    return $result;
}

?>
