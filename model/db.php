<?php 
function connect() {
    $conn = mysqli_connect("localhost", "root", "", "e_commerce_db");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
?>
