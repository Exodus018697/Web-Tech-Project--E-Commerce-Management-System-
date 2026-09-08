<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Comerce Shopping site</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
          integrity="sha512-2SwdPD6INVrV/lHTZbO2nodkhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index_style.css">
</head>
<body>
<header>
    <div id="navbar">
        <div id="nav-logo" class="border">
            <div id="logo"></div>
        </div>
        <div id="nav-address" class="border">
            <p id="first-line">Deliver to</p>
            <div id="address-icon">
                <i class="fa-solid fa-location-dot"></i>
                <p id="second-line">Bangladesh</p>
            </div>
        </div>

        <div id="nav-search">
            <select id="search-select">
                <option>All</option>
            </select>
            <input
                id="serach-input"
                type="search"
                placeholder="Search Here"
            >
            <div id="serach-icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <div id="nav-signin">
            <p>
                <span>Hello!</span>
            </p>

            <?php
            if (isset($_SESSION['user_id'])) {
            ?>
                <a href="controller/logout.php" id="sign_in_button" class="nav-second">Logout</a>
            <?php
            } 
            else {
            ?>
                <a href="view/sign_in.php" id="sign_in_button" class="nav-second">Sign in</a>
            <?php
            }
            ?>
        </div>
        <div id="nav-return" class="border">
            <p>
                <span>Returns</span>
            </p>
            <p class="nav-second">
                & Orders
            </p>
        </div>
        <div id="nav-cart" class="border">
            <div id="cart-icon">
                <i class="fa-solid fa-cart-plus"></i>
            </div>
            <p id="cart-text">
                Cart
            </p>
        </div>
    </div>
    <div id="panel">
        <div id="menu-icon" class="border">
            <i class="fa-solid fa-bars"></i>
            <p id="all-text">
                All
            </p>
        </div>
        <div id="panel-op" class="border">
            <p>Today's Deals</p>
            <p>Gift Cards</p>
            <p>Offer</p>
            <p>New item</p>
        </div>
    </div>
</header>