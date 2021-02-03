var mehul = {
    firstName: 'Mehul',
    lastName: 'Parmar',
    birthYear: 2000,
    family: ['Mehul', 'parmar', 'Mahendra', 'Bhavna'],
    job: 'Student',
    isMarried: false,
    calcAge: function () {
        this.age = 2020 - this.birthYear;
    }
};

// mehul.age = mehul.calcAge();
mehul.calcAge();
console.log(mehul.lastName); // print only one properties of the object
console.log(mehul); // print the all properties of an object