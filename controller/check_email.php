<?php
require "../model/db.php";
$email = $_POST['email'];
$conn = connect();
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
    {
        echo "Email already exists";
    }
?>
