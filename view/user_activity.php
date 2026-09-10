
<!DOCTYPE html> 
 
<html> 
 
<head> 
 
    <title>Activity</title> 
 
    <link rel="stylesheet" href="../view/user.css">

 
</head> 
 
<body> 
 
<header class="topbar"> 
 
    <div class="brand"> 
 
        <button class="brand-mark"> 
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
 
        <h1>Activity</h1> 
 
        <p class="sub"> 
            View your recent account activities. 
        </p> 
 
    </div> 
 
 
    <div class="info-card"> 
 
        <table> 
 
            <tr> 
 
                <th>Activity</th> 
                <th>Date</th> 
                <th>Status</th> 
 
            </tr> 
 
 
            <tr> 
 
                <td>Login</td> 
 
                <td>Today, 12:30 AM</td> 
 
                <td> 
                    <span class="badge active-badge"> 
                        Successful 
                    </span> 
                </td> 
 
            </tr> 
 
 
            <tr> 
 
                <td>Profile Viewed</td> 
 
                <td>Yesterday, 09:20 PM</td> 
 
                <td> 
                    <span class="badge active-badge"> 
                        Completed 
                    </span> 
                </td> 
 
            </tr> 
 
 
            <tr> 
 
                <td>Password Updated</td> 
 
                <td>3 days ago</td> 
 
                <td> 
                    <span class="badge active-badge"> 
                        Completed 
                    </span> 
                </td> 
 
            </tr> 
 
        </table> 
 
    </div> 
 
</main> 
 
</div> 
 
</body> 
</html>