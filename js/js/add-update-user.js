var adduser = document.getElementById('adduser');
var updateuser = document.getElementById('updateuser');

// get the value from the user
let name2 = document.getElementById('name');
let email2 = document.getElementById('email');
let password2 = document.getElementById('password');
let birthdate2 = document.getElementById('birthdate');
let id2 = document.getElementById('id');

if (localStorage.getItem('user')) {
    var users = JSON.parse(localStorage.getItem('user'));
} else {
    var users = [];
}
let flag = false;

adduser.addEventListener('click', function adduser() {
    var name = name2.value;
    var email = email2.value;
    var password = password2.value;
    var birthdate = birthdate2.value;
    for (user in users) {
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(email) == false) {
            alert('Invalid Email Address');
            return false;
        } else if (users[user]['email'] === email) {
            flag = true;
            break;
        }
    }
    if (name == '' || email == '' || password == '' || birthdate == '') {
        alert('all field are mandatory');
        window.location.href = 'user.html';
    } else {
        if (flag) {
            alert('This email is already Exist');
            return false;
        } else {
            var userdetails = {
                name: name,
                email: email,
                password: password,
                birthdate: birthdate,
                birthdate1: birthdate,
            }
            calculateage(userdetails);
            users.push(userdetails)
            localStorage.setItem("user", JSON.stringify(users));
            alert('User Added Sucessfully');
            return true;
        }
    }
});

function calculateage(userdetails) {
    var dob = new Date(userdetails['birthdate']);
    var month_diff = Date.now() - dob.getTime();
    var age_dt = new Date(month_diff);
    var year = age_dt.getUTCFullYear();
    var age = Math.abs(year - 1970);
    var date1 = userdetails['birthdate'].split('-');
    var mm = date1[1];
    var dd = date1[2];
    var yy = date1[0];
    userdetails['age'] = dd + '-' + mm + '-' + yy;
    userdetails['age'] = age;
};


updateuser.addEventListener('click', function() {
    var name = name2.value;
    var email = email2.value;
    var password = password2.value;
    var birthdate = birthdate2.value;
    var id = document.getElementById('id').value;

    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(email) == false) {
        alert('Invalid Email Address');
        window.location.href = 'user.html';
    } else {
        if (name == '' || email == '' || password == '' || birthdate == '') {
            alert('all field are mandatory');
            window.location.href = 'user.html';
        } else {

            var userdetails = {
                name: name,
                email: email,
                password: password,
                birthdate: birthdate,
                birthdate1: birthdate,
            }
            calculateage(userdetails);
            users[id] = userdetails;
            localStorage.setItem("user", JSON.stringify(users));
            alert('User Upated Sucessfully');
        }
    }
});


let edituser = function(id) {
    lable1.textContent = "Update user";
    adduser.style.display = 'none';
    updateuser.style.display = 'inline';
    var currentUser = users[id];
    name2.value = currentUser['name'];
    email2.value = currentUser['email'];
    password2.value = currentUser['password'];
    birthdate2.value = currentUser['birthdate1'];
    id2.value = id;
}

let deleteuser = function(id) {
    users.splice(id, 1);
    localStorage.setItem("user", JSON.stringify(users));
    alert('User Delete Sucessfully');
    window.location.href = 'user.html';
}