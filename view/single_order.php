<?php
    // session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buy Product</title>
    <link rel="stylesheet" href="../view/single_order_style.css">
</head>
<body>
    <button onclick="window.location.href='../index.php'"> <span class="bullet"></span>Home</button>
    <h1>Buy Product</h1>
    <img src="../media/<?php echo $product['image']; ?>" width="200">
    <h2><?php echo $product['name']; ?></h2>
    <p><?php echo $product['about']; ?></p>
    <h3>Price: <?php echo $product['price']; ?></h3>
    <p>Stock: <?php echo $product['stock']; ?></p>
    <form action="../controller/payment_controller.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
        <label>Quantity:</label>
        <input type="number" name="quantity" value="1" min="1">
        <br><br>
        <label>Payment Method:</label>
        <select name="payment_method">
            <option value="card">Card</option>
            <option value="cod">Cash on Delivery</option>
        </select>
        <br><br>
        <button type="submit">Payment</button>
    </form>
</body>
</html>