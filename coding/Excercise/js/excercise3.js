var friends = [
    { name: 'mehul', email: 'mehul@gmail.com' },
    { name: 'jaymin', email: 'jaymin@gmail.com' },
    { name: 'manan', email: 'manan@gmail.com' },
    { name: 'sahal', email: 'sahal@gmail.com' },
];
document.write('<h3>BEFORE SHORT</h3>');
document.write('<table border = "1" id = "table1">');
document.write('<tr>');
document.write('<th>Name</th> <th>Email</th></tr> <tr>');

for (let i in friends) {
    document.write('<td>' + `${friends[i].name}` + '</td>');
    document.write('<td>' + `${friends[i].email}` + '</td>');
    document.write('</tr>');
}
document.write('</table>');

friends.sort(
    (a, b) => {
        let Name = a.name.toLowerCase();
        let Email = b.email.toLowerCase();
        if (Name < Email) {
            return -1;
        }
        else if (Name > Email) {
            return 1;
        }
        return 0;
    }
);

document.write('<h3>AFTER SHORT</h3>');
document.write('<table border = "1" id = "table1">');
document.write('<tr>');
document.write('<th>Name</th> <th>Email</th></tr> <tr>');

for (let i in friends) {
    document.write('<td>' + `${friends[i].name}` + '</td>');
    document.write('<td>' + `${friends[i].email}` + '</td>');
    document.write('</tr>');
}
document.write('</table>');