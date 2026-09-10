<!DOCTYPE html>
<html>

<head>

    <title>Profile</title>

    <link rel="stylesheet" href="../view/user.css">

</head>

<body>


<header class="topbar">

    <div class="brand">

        <button class="brand-mark" id="brandMark">
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

        <h1>My Profile</h1>

        <p class="sub">
            View and manage your profile information.
        </p>

    </div>



    <?php if (isset($message)) { ?>

        <div class="message success">

            <?php echo $message; ?>

        </div>

    <?php } ?>


    <!-- AJAX MESSAGE -->

    <div
        id="ajaxMessage"
        class="message success"
        style="display:none;"
    >
    </div>



    <div class="profile-card">

        <div class="profile-avatar" id="profileAvatar">

            <?php echo $avatar; ?>

        </div>


        <div class="profile-info">

            <h2 id="profileName">
                <?php echo $name; ?>
            </h2>

            <p id="profileEmail">
                <?php echo $email; ?>
            </p>

            <span class="badge active-badge">

                <?php echo $status; ?>

            </span>

        </div>

    </div>



    <div class="info-card">

        <h2>Personal Information</h2>


        <div class="info-row">

            <span>Full Name</span>

            <strong id="showName">
                <?php echo $name; ?>
            </strong>

        </div>


        <div class="info-row">

            <span>Email Address</span>

            <strong id="showEmail">
                <?php echo $email; ?>
            </strong>

        </div>


        <div class="info-row">

            <span>Phone Number</span>

            <strong id="showPhone">
                <?php echo $phone; ?>
            </strong>

        </div>


        <div class="info-row">

            <span>Role</span>

            <strong>
                <?php echo $role; ?>
            </strong>

        </div>


        <br>



        <!-- PROFILE FORM -->

        <form method="POST" id="profileForm">

            <div class="form-group">

                <label>Full Name</label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    value="<?php echo $name; ?>"
                    required
                >

            </div>



            <div class="form-group">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    value="<?php echo $email; ?>"
                    required
                >

            </div>



            <div class="form-group">

                <label>Phone</label>

                <input
                    type="text"
                    name="phone"
                    id="phone"
                    value="<?php echo $phone; ?>"
                >

            </div>



            <button
                type="submit"
                name="update"
                class="add-btn"
            >

                Save Profile

            </button>

        </form>

    </div>

</main>

</div>



<script>

/* =========================
   AJAX PROFILE UPDATE
========================= */

document.getElementById("profileForm").addEventListener("submit", function(e) {

    e.preventDefault();


    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;


    let formData = new FormData();

    formData.append("ajax", "1");
    formData.append("name", name);
    formData.append("email", email);
    formData.append("phone", phone);


    fetch("user_profile.php", {

        method: "POST",

        body: formData

    })

    .then(response => response.text())

    .then(data => {

        let message = document.getElementById("ajaxMessage");

        message.innerText = data;

        message.style.display = "block";


        if (data.includes("successfully")) {

            /* Update profile information */

            document.getElementById("profileName").innerText = name;

            document.getElementById("profileEmail").innerText = email;

            document.getElementById("showName").innerText = name;

            document.getElementById("showEmail").innerText = email;

            document.getElementById("showPhone").innerText = phone;


            /* Update avatar */

            let avatar = name.charAt(0).toUpperCase();

            document.getElementById("profileAvatar").innerText = avatar;

            document.getElementById("brandMark").innerText = avatar;


            /* Save Cookie using JavaScript */

            document.cookie =
                "user_name=" +
                encodeURIComponent(name) +
                "; max-age=" +
                (30 * 24 * 60 * 60) +
                "; path=/";


            document.cookie =
                "user_email=" +
                encodeURIComponent(email) +
                "; max-age=" +
                (30 * 24 * 60 * 60) +
                "; path=/";


            document.cookie =
                "user_phone=" +
                encodeURIComponent(phone) +
                "; max-age=" +
                (30 * 24 * 60 * 60) +
                "; path=/";

        }

    })

    .catch(error => {

        let message = document.getElementById("ajaxMessage");

        message.innerText = "Something went wrong.";

        message.style.display = "block";

    });

});

</script>


</body>

</html>
