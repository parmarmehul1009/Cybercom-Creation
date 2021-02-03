var array = [];

function person(name, age, email, telephoneNo) {
    var add = {
        name: name,
        age: age,
        email: email,
        telephoneNo: telephoneNo
    }

    array.push(add);
    // array.push(JSON.parse(localStorage.getItem('array')));
    localStorage.setItem("array", JSON.stringify(array));

};


person('mehul', 22, 'parmarmehul@gmail.com', 5478965236);
person('manan', 22, 'manan@gmail.com', 9685789595);
person('jaymin', 21, 'jayminmakwana@gmail.com', 9685741236);

var array = localStorage.getItem('array');
var items = JSON.parse(array);

array = items;

document.write('<table border = "1" id = "table1">');
document.write('<tr>');
document.write('<th>Name</th> <th>Age</th> <th>Email</th> <th>MohileNo</th></tr> <tr>');


for (var k = 0; k < array.length; k++) {
    document.write('<td>' + array[k].name + '</td>');
    document.write('<td>' + array[k].age + '</td>');
    document.write('<td>' + array[k].email + '</td>');
    document.write('<td>' + array[k].telephoneNo + '</td>');
    document.write('</tr>');
}

document.write('</table>');	