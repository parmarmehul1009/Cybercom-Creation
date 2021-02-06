// this is file for swssion

var session_details = document.getElementById('session_details');

var users = JSON.parse(localStorage.getItem('user'));
let details = "";
for (user in users) {
    details = `<tr> <th scope = 'row'>${users[user]['name']}</th> <td>${users[user]['logintime']}</td> <td >${users[user]['logouttime']}</td></tr>`;
    session_details.innerHTML += details;
}



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