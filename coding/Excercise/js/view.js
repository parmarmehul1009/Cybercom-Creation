var array = localStorage.getItem('excercise_4');
var items = JSON.parse(array);

array = items;

document.write('<table border = "1" id = "table1">');
document.write('<tr>');
document.write('<th>Name</th> <th>Email</th> <th>Date Of Birth</th> </tr> <tr>');


for (var k = 0; k < array.length; k++) {
    document.write('<td>' + array[k].name + '</td>');
    document.write('<td>' + array[k].email + '</td>');
    document.write('<td>' + array[k].dob + '</td>');
    document.write('</tr>');
}

document.write('</table>');	