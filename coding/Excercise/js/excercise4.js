function adddata() {
    var name1 = document.getElementById('name').value;
    var email1 = document.getElementById('email').value;
    var dob1 = document.getElementById('dob').value;

    var excercise_4 = []

    var person = {
        name: name1,
        email: email1,
        dob: dob1,
    };

    if (localStorage.getItem('excercise_4')) {
        excercise_4 = JSON.parse(localStorage.getItem('excercise_4'));
        excercise_4.push(person);
        localStorage.setItem("excercise_4", JSON.stringify(excercise_4));
        alert("Record added in excercise_4 at index " + (excercise_4.length - 1));
    } else {
        excercise_4.push(person);
        localStorage.setItem("excercise_4", JSON.stringify(excercise_4));
        alert("Frist Record added in excercise_4 at index " + (excercise_4.length - 1));
    }

}