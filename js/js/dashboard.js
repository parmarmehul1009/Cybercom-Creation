// this is dashbord javascript file

// change the admin name 
var adminname = document.getElementById('adminname');

const admin = JSON.parse(localStorage.getItem('admin'));

adminname.textContent = admin[0].name;

var logout = document.getElementById('logout');


// logout code
logout.addEventListener('click', function() {
    sessionStorage.removeItem('admin');
    alert('logout success.');
});

if (!sessionStorage.getItem('admin')) {
    alert('Please login First.');
    window.location.href = "login.html";
}