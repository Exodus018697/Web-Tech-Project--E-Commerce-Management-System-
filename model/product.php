<?php
require "db.php";
function getProduct($id)
{
    $conn = connect();
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function getProducts()
{
    $conn = connect();
    $sql = "SELECT * FROM products WHERE stock > 0";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function addProduct($name, $description, $price, $stock, $image, $category_name)
{
    $conn = connect();
    $sql = "INSERT INTO products (name, about, price, stock, image, cate_name) VALUES ('$name', '$description', '$price', '$stock', '$image', '$category_name')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    }
    return false;
}
function deleteProduct($id)
{
    $conn = connect();
    $sql = "DELETE FROM products WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function updateStock($id)
{
    $conn = connect();
    $sql = "UPDATE products SET stock = stock + 1 WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    return $result;
}
?>
