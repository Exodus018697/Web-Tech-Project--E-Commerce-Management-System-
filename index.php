<?php
session_start();
require "controller/index_controller.php";
include __DIR__ . '/view/header.php'; 

if (isset($_COOKIE['visited'])) 
    {
        echo "Welcome back!";
    } 
    setcookie("visited", "yes", time() + 86400);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce Mall</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./index_style.css"> 
</head>
<body>

    <div class="products">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="product">
                <img 
                    src="media/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                <h2><?php echo $row['name']; ?></h2>
                <p><?php echo $row['about']; ?></p>
                <h3>Price: <?php echo $row['price']; ?></h3>
                <p>Stock: <?php echo $row['stock']; ?></p>
                <br>
                <button class="buy_btn" onclick="<?php
                if (isset($_SESSION['user_id'])) {
                    echo "window.location.href='./controller/single_order_controller.php?id=" . $row['id'] . "'";
                } else {
                    echo "window.location.href='./view/sign_in.php'";
                }
                ?>"> Buy </button>
            </div>
        <?php } ?>
    </div>
</body>
    <footer>
        <?php
        include __DIR__ . '/view/footer.php'; 
        ?>
    </footer>
</html>
