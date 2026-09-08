
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Online Shop BD Inventory</title>
<link rel="stylesheet" href="../view/manager/manager-style.css">
</head>
<body>
<div class="shell">
  <header class="topbar">
    <div class="brand">
      <button class="brand-mark" id="brandMark" title="Shop menu" aria-label="Shop menu" onclick="window.location.href='../index.php'">S</button>
      <span class="brand-name">Online Shop BD</span>
    </div>
    <div class="manager-pill">
      <span class="dot"></span> MANAGER
    </div>
  </header>
  <div class="layout">
<nav class="sidebar" id="sidebar">
    <button class="nav-item" onclick="window.location.href='../controller/manager_controller.php'"><span class="bullet"></span>Manager Panel</button>
    <button class="nav-item" onclick="window.location.href='../controller/order_history_controller.php'"> <span class="bullet"></span>Orders</button>
    <button class="nav-item" onclick="window.location.href='../controller/add_product_controller.php'"> <span class="bullet"></span>Add product</button>
    <button class="nav-item" onclick="window.location.href='../controller/display_product_controller.php'"><span class="bullet"></span>View Product</button>
    <button class="nav-item" onclick="window.location.href='../controller/payment_history_controller.php'"><span class="bullet"></span>Payments</button>
    <button class="nav-item" onclick="window.location.href='../controller/manager_profile_controller.php'"><span class="bullet"></span>Profile</button>
    <button class="nav-item" onclick="window.location.href='../controller/logout.php'"> <span class="bullet"></span>Log out</button>
</nav>
    <main class="content">
      <div class="content-header">
        <div>
          <h1>Order Histroy</h1>
          <p class="sub" id="subLine">
          </p>
        </div>
      </div>
      <div class="stats">
      </div>
            <table border="1">
            <tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Product ID</th>
                <th>Total Amount</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['product_id']; ?></td>
                <td><?php echo $row['total_amount']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </main>
  </div>
</div>
</body>
</html>