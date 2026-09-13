<!DOCTYPE html>
<html>
<head>
    <title>My Orders</title>
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

    <h1>My Assigned Orders</h1>

    <p>Orders assigned to you for delivery.</p>

    <div class="table-box">

        <table>

            <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>

                <td>ORD-<?php echo $row['order_id']; ?></td>

                <td><?php echo $row['name']; ?></td>

                <td><?php echo $row['product_name']; ?></td>

                <td><?php echo $row['address']; ?></td>

                <td><?php echo $row['phone']; ?></td>

                <td>৳ <?php echo $row['total_amount']; ?></td>

                <td><?php echo $row['status']; ?></td>

                <td>
                    <a class="details-btn"
                       href="delivery_details_controller.php?id=<?php echo $row['id']; ?>">
                       Details
                    </a>
                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>