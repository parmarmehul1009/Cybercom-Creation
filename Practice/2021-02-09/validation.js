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

    var userName = document.getElementById("userName").value;
    var userEmail = document.getElementById("userEmail").value;
    var phone = document.getElementById("phone").value;
    var title = document.getElementById("title1").value;
    var created = document.getElementById("created").value;


    if (userName == "") {
        markAsInvalid("userName", "required");
    } else {
        markAsValid("userName");
    }

    if (userEmail == "") {
        markAsInvalid("userEmail", "required");
    } else if (!emailRegex.test(userEmail)) {
        markAsInvalid("userEmail", "invalid");
    } else {
        markAsValid("userEmail");
    }

    if (phone == "") {
        markAsInvalid("phone", "required");
    } else {
        markAsValid("phone");
    }

    if (title == "") {
        markAsInvalid("title1", "required");
    } else {
        markAsValid("title1");
    }

    if (created == "") {
        markAsInvalid("created", "required");
    } else {
        markAsValid("created");
    }
}

function markAsValid(id) {
    document.getElementById(id + "-info").style.display = "none";
}

function markAsInvalid(id, feedback) {
    document.getElementById(id + "-info").style.display = "inline";
    document.getElementById(id + "-info").innerText = feedback;
}