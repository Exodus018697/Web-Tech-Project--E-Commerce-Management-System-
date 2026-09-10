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
require "../model/product.php";
$message = "";
$conn = connect();
$sql = "SELECT * FROM categories";
$result1 = mysqli_query($conn, $sql);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['about'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image = $_FILES['image']['name'];
    $temp_location = $_FILES['image']['tmp_name'];
    $category_name = $_POST['category-name'];
    $result = addProduct(
        $name,
        $description,
        $price,
        $stock,
        $image,
        $category_name
    );
    if ($result) {
        $message = "Product Added Successfully";
        if (!empty($image))
            {
            move_uploaded_file($temp_location,"../media/" . $image);
            }
    } else {
        $message = "Product could not be added";
    }
}
require "../view/manager/add-product.php";

?>
