// this is registration page javascript

var admin = [];
if (localStorage.getItem('admin')) {
    alert('admin already registed');
    window.location.href = "login.html";
}



function isChecked(checkbox, sub1) {
    document.getElementById(sub1).disabled = !checkbox.checked;
}

function addadmin() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var cpassword = document.getElementById('con_password').value;
    var city = document.getElementById('city').value;
    var state = document.getElementById('state').value;

    if (password !== cpassword) {
        alert('Password And Confirm Password Dose not match');
        return false;
    }

    admindetails = {
        name: name,
        email: email,
        password: password,
        cpassword: cpassword,
        city: city,
        state: state,
    }

    if (localStorage.getItem('admin')) {
        alert('admin already registed');
    } else {
        admin.push(admindetails);
        localStorage.setItem('admin', JSON.stringify(admin));
        alert('Registration Success!');
        window.location.href = "login.html";
    }
};