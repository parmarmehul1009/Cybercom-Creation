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

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;


    if (password == "") {
        markAsInvalid("password", "required");
    } else {
        markAsValid("password");
    }
    if (email == "") {
        markAsInvalid("email", "required");
    } else if (!emailRegex.test(email)) {
        markAsInvalid("email", "invalid");
    } else {
        markAsValid("email");
    }
}

function markAsValid(id) {
    document.getElementById(id + "-info").style.display = "none";
}

function markAsInvalid(id, feedback) {
    document.getElementById(id + "-info").style.display = "inline";
    document.getElementById(id + "-info").innerText = feedback;
}