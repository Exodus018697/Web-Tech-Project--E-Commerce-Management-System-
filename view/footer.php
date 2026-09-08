<footer>

    <div id="foot-panel-back">
        <p id="btt-text">Back to top</p>
    </div>
    <div id="foot-panel-2">
        <ul>
            <p>Get to Know Us</p>
            <li>
                <a href="#">Careers</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a href="#">Investor Relations</a>
            </li>
        </ul>
        <ul>
            <p>Make Money with Us</p>
            <li>
                <a href="#">Become an Affiliate</a>
            </li>
            <li>
                <a href="#">Advertise Your Products</a>
            </li>
            <li>
                <a href="#">Self-Publish with Us</a>
            </li>
            <li>
                <a href="#">See More Make Money with Us</a>
            </li>
        </ul>
        <ul>
            <p>Payment Products</p>
            <li>
                <a href="#">Shop with Points</a>
            </li>
            <li>
                <a href="#">Reload Your Balance</a>
            </li>
        </ul>
        <ul>
            <p>Let Us Help You</p>
    <li>
            <a href="<?php
                if (isset($_SESSION['user_id'])) {
                    echo './controller/user_controller.php';
                } else {
                    echo './view/sign_in.php';
                }
            ?>">
                Your Account
            </a>
        </li>
            <li>
                <a href="#">Your Orders</a>
            </li>
            <li>
                <a href="#">Shipping Rates & Policies</a>
            </li>
            <li>
                <a href="#">Returns & Replacements</a>
            </li>
            <li>
                <a href="#">Manage Your Content and Devices</a>
            </li>
            <li>
                <a href="#">Help</a>
            </li>
        </ul>
    </div>
</footer>

</body>
</html>