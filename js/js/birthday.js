// this is dashbord javascript file



let user_bl_18 = document.getElementById('user_bl_18');
let user_bt_18_50 = document.getElementById('user_bt_18_50');
let user_ab_50 = document.getElementById('user_ab_50');

let temp_user_bl_18 = 0;
let temp_user_bt_18_50 = 0;
let temp_user_ab_50 = 0;


const users = JSON.parse(localStorage.getItem('user'));
if (!users) {
    user_bl_18.textContent = temp_user_bl_18 + ' Users';
    user_bt_18_50.textContent = temp_user_bt_18_50 + ' Users';
    user_ab_50.textContent = temp_user_ab_50 + ' Users';
} else {
    for (user in users) {
        if (users[user]['age'] < 18) {
            temp_user_bl_18++;
        } else if (users[user]['age'] > 50) {
            temp_user_ab_50++;
        } else {
            temp_user_bt_18_50++;
        }
    }
    user_bl_18.textContent = temp_user_bl_18 + ' Users';
    user_bt_18_50.textContent = temp_user_bt_18_50 + ' Users';
    user_ab_50.textContent = temp_user_ab_50 + ' Users';
}


var wish_birthday = document.getElementById('wish_birthday');
let today = new Date();
let dd = String(today.getDate()).padStart(2, '0');
let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
let yyyy = today.getFullYear();
today = mm + '-' + dd;
for (user in users) {
    let dob = users[user]['birthdate'];
    let date1 = dob.split('-');
    let mm = date1[1];
    let dd = date1[0];
    let birthdate = mm + '-' + dd;
    // alert(dob);
    if (today == birthdate) {
        wish_birthday.innerHTML += `Today's '${users[user]['name']}' Birthday! <br>`;
    };
}