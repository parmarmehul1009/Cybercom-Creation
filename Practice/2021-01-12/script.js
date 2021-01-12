// ////////////////// Hoisting /////////////////////////

// Function
calculateAge(1999);

function calculateAge(year) {
    console.log(2020 - year);
}

// retirement(1999); // this is not working because of function Expession
// give a error like not a function

var retirement = function(year) {
    console.log(65 - (2020 - year));
}


// variable
console.log(age); // give a undefined because the variable is diclere but not hold any value
var age = 21;
console.log(age); // print 21

function foo() {
    var age = 65; // local variable for foo function only
    console.log(age);
}
foo();
console.log(age); // print globle variable value

//////////////////////// scope chain   /////////////////////////////////

var a = 'Hello!';
first();

function first() {
    var b = ' I am ';
    second();

    function second() {
        var c = 'Mehul';
        console.log(a + b + c);
        // third(); // access because of scoping chain
    }
}

function third() {
    var d = 'parmar';
    console.log(a + b + c + d); // b and c is not defined because of local varible
}



////////////////////////      The 'this' Keyword     /////////////////////

// console.log(this);


calculateAge(1999);

function calculateAge(year) {
    console.log(2020 - year);
    console.log(this);
}

var mehul = {
    name: 'mehul',
    yearOfBirth: 1999,
    calculateAge: function() {
        console.log(this); // this is for mehul object
        console.log(this.yearOfBirth);

        /*
        function innerFunction() {
            console.log(this); // this is for window because of regular function
        }
        innerFunction();
        */
    }
};

mehul.calculateAge();

var parmar = {
    name: 'parmar',
    yearOfBirth: 2020,
};

parmar.calculateAge = mehul.calculateAge;

parmar.calculateAge();



//////////////////////////        Object and properties     /////////////////
var mehul = {
    firstName: 'Mehul',
    lastName: 'Parmar',
    birthYear: 1999,
    family: ['Mehul', 'parmar', 'Mahendra', 'Bhavna'],
    job: 'Student',
    isMarried: false
};
console.log(mehul);
console.log(mehul.firstName);
console.log(mehul['lastName']);

var x = 'birthYear';
console.log(mehul[x]);

mehul.job = 'designer';
mehul['isMarried'] = true;
console.log(mehul);

var ravi = new Object();
ravi.name = 'Ravi';
ravi.birthYear = 1999;
ravi['lastName'] = 'parmar';
console.log(ravi);


//////////////////////////        Object and Methods     /////////////////


var mehul = {
    firstName: 'Mehul',
    lastName: 'Parmar',
    birthYear: 2000,
    family: ['Mehul', 'parmar', 'Mahendra', 'Bhavna'],
    job: 'Student',
    isMarried: false,
    calcAge: function() {
        this.age = 2020 - this.birthYear;
    }
};

mehul.age = mehul.calcAge();
console.log(mehul.calcAge());
console.log(mehul);




//////////////////////////        Loops And Iteration     /////////////////

// for loop
for (var i = 1; i <= 20; i += 2) {
    console.log(i);
}

// i = 0, 0 < 10 true, log i to console, i++
// i = 1, 1 < 10 true, log i to the console, i++
//...
// i = 9, 9 < 10 true, log i to the console, i++
// i = 10, 10 < 10 FALSE, exit the loop!


var mehul = ['mehul', 'parmar', 1999, 'designer', false, 'blue'];
for (var i = 0; i < mehul.length; i++) {
    console.log(mehul[i]);
}

// While loop
var i = 0;
while (i < mehul.length) {
    console.log(mehul[i]);
    i++;
}


// continue and break statements
var mehul = ['mehul', 'parmar', 1999, 'designer', false, 'blue'];

for (var i = 0; i < mehul.length; i++) {
    if (typeof mehul[i] !== 'string') continue;
    console.log(mehul[i]); // print only that which type is not string
}

for (var i = 0; i < mehul.length; i++) {
    if (typeof mehul[i] !== 'string') break;
    console.log(mehul[i]); // print only that which type is string
}

// Looping backwards
for (var i = mehul.length - 1; i >= 0; i--) {
    console.log(mehul[i]); // print the loop in reverce order
}