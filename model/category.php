<?php
require "db.php";
function addCategory($name)
{
    $conn = connect();
    $sql = "INSERT INTO categories (name) VALUES ('$name')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    }
    return false;
}
?>
