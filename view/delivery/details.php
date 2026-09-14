<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link rel="stylesheet" href="../view/delivery/delivery.css">
</head>

<body>

<div class="sidebar">

    <h2>Online Shop BD</h2>

    <a href="delivery_staff_controller.php">Dashboard</a>
    <a href="delivery_orders_controller.php">My Orders</a>
    <a href="logout.php">Logout</a>

</div>

<div class="main">

    <h1>Order Details</h1>

    <div class="details">

        <p><b>Order ID:</b> ORD-<?php echo $row['order_id']; ?></p>

        <p><b>Customer:</b> <?php echo $row['name']; ?></p>

        <p><b>Email:</b> <?php echo $row['email']; ?></p>

        <p><b>Phone:</b> <?php echo $row['phone']; ?></p>

        <p><b>Delivery Address:</b> <?php echo $row['address']; ?></p>

        <p><b>Product:</b> <?php echo $row['product_name']; ?></p>

        <p><b>Amount:</b> ৳ <?php echo $row['total_amount']; ?></p>

        <p><b>Current Status:</b> <?php echo $row['status']; ?></p>
        <p><b>Delivery Date:</b>
<?php
if ($row['delivery_date']) {
    echo $row['delivery_date'];
}
else {
    echo "Not Delivered Yet";
}
?>
</p>

        <div class="status-buttons">

            <form action="delivery_update_controller.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="status" value="Pending">
                <button type="submit">Pending</button>
            </form>

            <form action="delivery_update_controller.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="status" value="Out for Delivery">
                <button type="submit">Out for Delivery</button>
            </form>

            <form action="delivery_update_controller.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="status" value="Delivered">
                <button type="submit">Delivered</button>
            </form>

            <form action="delivery_update_controller.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="status" value="Failed Delivery">
                <button type="submit" class="failed-button">Failed Delivery</button>
            </form>

        </div>

    </div>

</div>

</body>
</html>