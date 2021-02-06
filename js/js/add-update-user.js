var adduser = document.getElementById('adduser');
var updateuser = document.getElementById('updateuser');


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
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var birthdate = document.getElementById('birthdate').value;
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
                calculateAge: function() {
                    var dob = new Date(birthdate);
                    var month_diff = Date.now() - dob.getTime();
                    var age_dt = new Date(month_diff);
                    var year = age_dt.getUTCFullYear();
                    var age = Math.abs(year - 1970);
                    var date1 = birthdate.split('-');
                    var mm = date1[1];
                    var dd = date1[2];
                    var yy = date1[0];
                    this.birthdate = dd + '-' + mm + '-' + yy;
                    this.age = age;
                },

            }
            userdetails.calculateAge();
            users.push(userdetails)
            localStorage.setItem("user", JSON.stringify(users));
            alert('User Added Sucessfully');
            return true;
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