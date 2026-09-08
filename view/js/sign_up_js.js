// alert("JavaScript is working");

document.getElementById("signupForm").addEventListener("submit", function(event) {

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let phone = document.getElementById("phone").value;
    let address = document.getElementById("address").value;
    let flag = true;
    if (name.trim() === "") {
        alert("Name cannot be empty.");
        flag = false;
    }

    if (email.trim() === "") {
        alert("Email cannot be empty.");
        flag = false;
    }
    if (password === "") {
        alert("Password cannot be empty.");
        flag = false;
    }
    else if (password.length < 6) {
        alert("Password must be at least 6 characters.");
        flag = false;
    }

    if (phone.trim() === "") {
        alert("Phone number cannot be empty.");
        flag = false;
    }
    else if (isNaN(phone)) {
        alert("Phone number must contain only numbers.");
        flag = false;
    }

    if (address.trim() === "") {
        alert("Address cannot be empty.");
        flag = false;
    }

    if (!flag) {
        event.preventDefault();
    }

});

document.getElementById("email").addEventListener("keyup", function () {
    let email = this.value;
    if (email == "") {
        document.getElementById("emailMessage").innerHTML = "";
        return;
    }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../controller/check_email.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        document.getElementById("emailMessage").innerHTML = xhr.responseText;
    };
    xhr.send("email=" + email);
});


