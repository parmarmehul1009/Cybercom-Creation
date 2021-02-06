var register = document.getElementById('register');
var login = document.getElementById('login');
const email = document.getElementById('email');
const password = document.getElementById('password');
const errormessage = document.getElementById('errormessage');
let admin = localStorage.getItem('admin');
if (localStorage.getItem('admin')) {
    register.setAttribute('disabled', 'disabled');
    // register.style.opacity = '.5';
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
            }
        }
    } else {
        alert('No Admin Register Here');
    }
});