var register = document.getElementById('register');
var login = document.getElementById('login');
const email = document.getElementById('email');
const password = document.getElementById('password');
const errormessage = document.getElementById('errormessage');
let admin = localStorage.getItem('admin');

if (localStorage.getItem('admin')) {
    register.setAttribute('disabled', 'disabled');
    register.style.opacity = '.3';
}
login.addEventListener('click', function() {
    if (admin) {
        let admin = JSON.parse(localStorage.getItem('admin'));

        emailValue = email.value;
        passwordValue = password.value;


        for (let adm in admin) {

            if (emailValue === admin[adm]['email'] && passwordValue === admin[adm]['password']) {
                alert('Welcome Admin.!');
                sessionStorage.setItem("admin", JSON.stringify(admin[adm]));
                window.location = 'dashboard.html';
            } else {

                let users = JSON.parse(localStorage.getItem('user'));

                emailValue = email.value;
                passwordValue = password.value;

                for (let user in users) {

                    if (emailValue === users[user]['email'] && passwordValue === users[user]['password']) {
                        alert('Welcome User.!');
                        users[user]['id'] = user;
                        users[user]['logintime'] = new Date().toLocaleString();
                        localStorage.setItem("user", JSON.stringify(users));
                        sessionStorage.setItem("user", JSON.stringify(users[user]));
                        window.location.href = 'subuser.html';
                    }
                }
                errormessage.textContent = "Enter Valid Email OR password"
            }
        }
    } else {
        alert('No Admin Register Here');
    }
});

register.addEventListener('click', function() {
    window.open("registration.html", "_self");

    // window.localStorage.href = "registration.html";
})