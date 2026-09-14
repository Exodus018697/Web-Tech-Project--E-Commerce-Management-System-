<!DOCTYPE html>
<html>
<head>
    <title>Delivery History</title>
    <link rel="stylesheet" href="../view/delivery/delivery.css">
</head>

<body>

<div class="sidebar">

    <h2>Online Shop BD</h2>

    <a href="delivery_staff_controller.php">Dashboard</a>
    <a href="delivery_orders_controller.php">My Orders</a>
    <a href="delivery_history_controller.php">Delivery History</a>
    <a href="logout.php">Logout</a>

</div>

<div class="main">

    <h1>Delivery History</h1>

    <p>Your completed and failed deliveries.</p>

    <div class="table-box">

        <table>

            <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>

                <td>ORD-<?php echo $row['order_id']; ?></td>

                <td><?php echo $row['name']; ?></td>

                <td><?php echo $row['product_name']; ?></td>

                <td><?php echo $row['phone']; ?></td>

                <td><?php echo $row['address']; ?></td>

                <td>৳ <?php echo $row['total_amount']; ?></td>

                <td><?php echo $row['status']; ?></td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>