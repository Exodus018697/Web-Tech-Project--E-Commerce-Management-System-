 <!DOCTYPE html> 
<html> 
 
<head> 
 
    <title>Settings</title> 
 
    <link rel="stylesheet" href="../view/user.css">
 
</head> 
 
<body> 
 
<header class="topbar"> 
 
    <div class="brand"> 
 
<button class="brand-mark"
        onclick="window.location.href='../index.php'">
    U
</button>

        <span class="brand-name"> 
            User Panel 
        </span> 
 
    </div> 
 
    <div class="manager-pill"> 
        <span class="dot"></span> 
        USER 
    </div> 
 
</header> 
 
 
<div class="layout"> 
 
<nav class="sidebar" id="sidebar">

    <button class="nav-item active"
            onclick="window.location.href='../controller/user_controller.php'">

        <span class="bullet"></span>

        Dashboard

    </button>


    <button class="nav-item"
            onclick="window.location.href='../controller/user_profile_controller.php'">

        <span class="bullet"></span>

        Profile

    </button>


    <button class="nav-item"
            onclick="window.location.href='../controller/user_activity_controller.php'">

        <span class="bullet"></span>

        Activity

    </button>


    <button class="nav-item"
            onclick="window.location.href='../controller/user_setting_controller.php'">

        <span class="bullet"></span>

        Settings

    </button>


    <button class="nav-item"
            onclick="window.location.href='../controller/logout.php'">

        <span class="bullet"></span>

        Log out

    </button>

</nav>
 
 
<main class="content"> 
 
    <div class="content-header"> 
 
        <h1>Settings</h1> 
 
        <p class="sub"> 
            Manage your account preferences. 
        </p> 
 
    </div> 
 
 
    <?php if (isset($message)) { ?> 
 
        <div class="message success"> 
            <?php echo $message; ?> 
        </div> 
 
    <?php } ?> 
 
 
    <div class="settings-card"> 
 
        <h2>Account Settings</h2> 
 
 
        <form method="POST"> 
 
            <div class="setting-row"> 
 
                <div> 
                    <h3>Email Notifications</h3> 
 
                    <p> 
                        Receive important account notifications. 
                    </p> 
                </div> 
 
                <input 
                    type="checkbox" 
                    name="email_notifications" 
                    <?php echo $emailNotifications ? 'checked' : ''; ?>> 
 
            </div> 
 
 
            <div class="setting-row"> 
 
                <div> 
                    <h3>Login Notifications</h3> 
 
                    <p> 
                        Receive notification when your account is accessed. 
                    </p> 
                </div> 
 
                <input 
                    type="checkbox" 
                    name="login_notifications" 
                    <?php echo $loginNotifications ? 'checked' : ''; ?>> 
 
            </div> 
 
 
            <div class="setting-row"> 
 
                <div> 
                    <h3>Two Factor Authentication</h3> 
 
                    <p> 
                        Add extra security to your account. 
                    </p> 
 
                </div> 
 
                <input 
                    type="checkbox" 
                    name="two_factor" 
                    <?php echo $twoFactor ? 'checked' : ''; ?>> 
 
            </div> 
 
 
            <br> 
 
 
            <button 
                type="submit" 
                name="save" 
                class="add-btn"> 
 
                Save Settings 
 
            </button> 
 
        </form> 
 
    </div> 
 
</main> 
 
</div> 
 
</body> 
</html>