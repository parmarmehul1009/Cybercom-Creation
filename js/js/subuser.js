var users = sessionStorage.getItem('user');
var logout = document.getElementById('logout');
var username = document.getElementById('username');
if (users) {
    users = JSON.parse(users);
    username.textContent = users['name'];
} else {
    window.location.href = 'login.html';
}

if (!sessionStorage.getItem('user')) {
    alert('Please login First.');
    window.location.href = "login.html";
}


var wish_birthday = document.getElementById('wish_birthday');
let today = new Date();
let dd = String(today.getDate()).padStart(2, '0');
let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
let yyyy = today.getFullYear();
today = mm + '-' + dd;
let dob = users['birthdate'];
let date1 = dob.split('-');
let mm1 = date1[1];
let dd1 = date1[0];
let birthdate = mm1 + '-' + dd1;
// alert(dob);
if (today == birthdate) {
    wish_birthday.textContent = 'Happy Birthday!';
};





logout.addEventListener('click', function() {
    sessionStorage.removeItem('user');
    let userArr2 = JSON.parse(localStorage.getItem('user'));
    userArr2[users['id']]['logouttime'] = new Date().toLocaleString();
    localStorage.setItem("user", JSON.stringify(userArr2));
    alert('Logout Success....');
    window.location.href = "login.html"
});