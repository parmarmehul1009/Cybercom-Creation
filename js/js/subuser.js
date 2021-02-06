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

logout.addEventListener('click', function() {
    sessionStorage.removeItem('user');
    let userArr2 = JSON.parse(localStorage.getItem('user'));
    userArr2[users['id']]['logouttime'] = new Date().toLocaleString();
    localStorage.setItem("user", JSON.stringify(userArr2));
    alert('Logout Success....');
    window.location.href = "login.html"
});