(function() {
    'use strict';
    window.addEventListener('load', function() {
        var form = document.getElementById('frmContact');
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                setValidationResponse();
            }
            form.classList.add('was-validated');
        }, false);
    }, false);
})();

function setValidationResponse() {
    var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var prefix = document.getElementById("prefix").value;
    var first_name = document.getElementById("first_name").value;
    var last_name = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
    var information = document.getElementById("information").value;



    if (prefix == "") {
        markAsInvalid("prefix", "required");
    } else {
        markAsValid("prefix");
    }
    if (first_name == "") {
        markAsInvalid("first_name", "required");
    } else {
        markAsValid("first_name");
    }
    if (last_name == "") {
        markAsInvalid("last_name", "required");
    } else {
        markAsValid("last_name");
    }
    if (email == "") {
        markAsInvalid("email", "required");
    } else if (!emailRegex.test(email)) {
        markAsInvalid("email", "invalid");
    } else {
        markAsValid("email");
    }
    if (mobile == "") {
        markAsInvalid("mobile", "required");
    } else {
        markAsValid("mobile");
    }
    if (password == "") {
        markAsInvalid("password", "required");
    } else {
        markAsValid("password");
    }
    if (cpassword == "") {
        markAsInvalid("cpassword", "required");
    } else if (password != cpassword) {
        markAsInvalid("cpassword", "confirm password not match");
    } else {
        markAsValid("cpassword");
    }
    if (information == "") {
        markAsInvalid("information", "required");
    } else {
        markAsValid("information");
    }
}

function markAsValid(id) {
    document.getElementById(id + "-info").style.display = "none";
}

function markAsInvalid(id, feedback) {
    document.getElementById(id + "-info").style.display = "inline";
    document.getElementById(id + "-info").innerText = feedback;
}