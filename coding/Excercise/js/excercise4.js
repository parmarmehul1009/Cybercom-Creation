function adddata() {
    var name = document.getElementById('name')
    var email = document.getElementById('email')
    var dob = document.getElementById('dob')

    var arry = []

    var person = {
        name: name,
        email: email,
        dob: dob,
    }

    if (localStorage.getItem('array')) {
        array = JSON.parse(localStorage.getItem('array'));
        array.push(person);
        localStorage.setItem("array", JSON.stringify(array));
        alert("Record added in array at index " + array.length);
    } else {
        localStorage.setItem("array", array);
        alert("Frist Record added in array at index " + array.length);
    }

}