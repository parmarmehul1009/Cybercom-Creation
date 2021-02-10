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

    var title = document.getElementById("title").value;
    var content = document.getElementById("content").value;
    var url = document.getElementById("url").value;
    var meta_title = document.getElementById("meta_title").value;
    var image = document.getElementById("image").value;





    if (title == "") {
        markAsInvalid("title", "required");
    } else {
        markAsValid("title");
    }
    if (content == "") {
        markAsInvalid("content", "required");
    } else {
        markAsValid("content");
    }
    if (url == "") {
        markAsInvalid("url", "required");
    } else {
        markAsValid("url");
    }

    if (meta_title == "") {
        markAsInvalid("meta_title", "required");
    } else {
        markAsValid("meta_title");
    }
    if (image == "") {
        markAsInvalid("imagee", "required");
    } else {
        markAsValid("image");
    }

}

function markAsValid(id) {
    document.getElementById(id + "-info").style.display = "none";
}

function markAsInvalid(id, feedback) {
    document.getElementById(id + "-info").style.display = "inline";
    document.getElementById(id + "-info").innerText = feedback;
}