<!DOCTYPE html>
<html>
<head>
    <title>Delivery Staff Dashboard</title>
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

    <h1>Welcome, <?php echo $_SESSION['user_name']; ?>!</h1>

    <p>Here are your assigned deliveries.</p>

    <div class="cards">

        <div class="card">
            <h3>Assigned Orders</h3>
            <h2><?php echo $total; ?></h2>
        </div>

        <div class="card">
            <h3>Pending</h3>
            <h2><?php echo $pending; ?></h2>
        </div>

        <div class="card">
            <h3>Out for Delivery</h3>
            <h2><?php echo $out; ?></h2>
        </div>

        <div class="card">
            <h3>Delivered</h3>
            <h2><?php echo $delivered; ?></h2>
        </div>

        <div class="card">
            <h3>Failed</h3>
            <h2><?php echo $failed; ?></h2>
        </div>

    </div>

    <div class="table-box">

        <h2>My Assigned Orders</h2>

        <table>

            <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Address</th>
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