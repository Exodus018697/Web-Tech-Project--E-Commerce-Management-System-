<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
<link rel="stylesheet" href="../view/user.css">
</head>
<body>
<header class="topbar">
    <div class="brand">
        <button class="brand-mark">
            <?php echo $avatar; ?>
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

        <h1>Dashboard</h1>

        <p class="sub">
            Welcome back to your account.
        </p>

    </div>


    <div class="profile-card">

        <div class="profile-avatar">

            <?php echo $avatar; ?>

        </div>


        <div class="profile-info">

            <h2>
                <?php echo htmlspecialchars($name); ?>
            </h2>

            <p>
                <?php echo htmlspecialchars($email); ?>
            </p>

            <span class="badge active-badge">

                <?php echo htmlspecialchars($status); ?>

            </span>

        </div>

    </div>


    <div class="stats">


        <div class="stat-card">

            <div class="stat-label">
                Account Status
            </div>

            <div class="stat-value">
                <?php echo $status; ?>
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-label">
                Total Sessions
            </div>

            <div class="stat-value">
                <?php echo $totalSessions; ?>
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-label">
                Member Since
            </div>

            <div class="stat-value">
                <?php echo $createdAt; ?>
            </div>

        </div>


    </div>


    <div class="info-grid">


        <div class="info-card">

            <h2>
                Account Information
            </h2>


            <div class="info-row">

                <span>User Name</span>

                <strong>
                    <?php echo htmlspecialchars($name); ?>
                </strong>

            </div>


            <div class="info-row">

                <span>Email</span>

                <strong>
                    <?php echo htmlspecialchars($email); ?>
                </strong>

            </div>


            <div class="info-row">

                <span>Role</span>

                <strong>
                    <?php echo htmlspecialchars($role); ?>
                </strong>

            </div>


            <div class="info-row">

                <span>Status</span>

                <strong>
                    <?php echo htmlspecialchars($status); ?>
                </strong>

            </div>

        </div>


        <div class="info-card">

            <h2>
                Recent Activity
            </h2>


            <div class="info-row">

                <span>Last Login</span>

                <strong>
                    <?php echo $lastLogin; ?>
                </strong>

            </div>


            <div class="info-row">

                <span>Profile Updated</span>

                <strong>
                    <?php echo $profileUpdated; ?>
                </strong>

            </div>


            <div class="info-row">

                <span>Sessions</span>

                <strong>
                    <?php echo $totalSessions; ?>
                </strong>

            </div>


            <div class="info-row">

                <span>Account</span>

                <strong>
                    Secure
                </strong>

            </div>

        </div>

    </div>

</main>

</div>

</body>

</html>
