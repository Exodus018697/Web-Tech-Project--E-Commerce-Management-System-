<?php 
require 'db.php';
function register($name, $email, $password, $phone, $address, $role) {
    $conn = connect();
    $sql = "INSERT INTO users (name,email,password,phone,address,role) VALUES ('$name', '$email', '$password', '$phone', '$address', '$role')";
    $result = mysqli_query($conn, $sql);
    if ($result) 
    return true;
    return false;
}
function login($email, $password)
{
    $conn = connect();
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] == $password) {
            return $row;
        }
    }
    return false;
}
function getUser($id)
{
    $conn = connect();
    $sql = "SELECT id, name, email, phone, address, role  FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}
function getAllUsers()
{
    $conn = connect();
    $sql = "SELECT id, name, email, phone, address, role FROM users";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getCustomer($id)
{
    $conn = connect();

    $sql = "SELECT id, name, email, phone, address, role
            FROM users
            WHERE id = '$id' AND role = 'customer'";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    }

    return false;
}
function updateUser($id, $name, $email, $phone)
{
    $conn = connect();

    $sql = "UPDATE users
            SET name = '$name',
                email = '$email',
                phone = '$phone'
            WHERE id = '$id'";

    return mysqli_query($conn, $sql);
}
?>
