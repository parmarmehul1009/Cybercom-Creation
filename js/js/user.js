var user_details = document.getElementById('user_details');


var lable1 = document.getElementById('lable1');
var actionbutton = document.getElementById('actionbutton');



var adminname = document.getElementById('adminname');
const admin = JSON.parse(localStorage.getItem('admin'));
adminname.textContent = admin[0].name;


var users = JSON.parse(localStorage.getItem('user'));
let details = "";
for (user in users) {
    details = `<tr> <th scope = 'row'>${users[user]['name']}</th> <td>${users[user]['email']}</td> <td >${users[user]['password']}</td> <td>${users[user]['birthdate']}</td> <td>${users[user]['age']}</td> <td> <a class="btn btn-sm btn-primary" onclick="edituser(${user})"> Edit </a> <a class="btn btn-sm btn-danger" onclick="deleteuser(${user})"> Delete </a> </td> </tr>`;
    user_details.innerHTML += details;
}
if (!sessionStorage.getItem('admin')) {
    alert('Please login First.');
    window.location.href = "login.html";
}

var logout = document.getElementById('logout');

logout.addEventListener('click', function() {
    sessionStorage.removeItem('admin');
    alert('logout success.');
});