// console.log(40 + 8 + 23 - 18);
// console.log('jonas');
// var firstname = 'parmar';
// console.log(firstname);



/***********************   Value and variable   *************************/
// cemal case = firstName
// first_name_person
// not start with number
// only allow the "_" in a variable name
// not use reserved ket word
// never start variable name with upper case
// let PI = 3.1415;
// write the real number variable in upper case


let myfirstJob = "Programmer";
let mycurrentJob = "teacher";

let job1 = "Programmer";
let job2 = "Techer";

console.log(myfirstJob);

/****************************           Practice for value and variable           **************************/

// * 1. Declare variables called 'country', 'continent' and 'population' and

// assign their values according to your own country (population in millions)

// 2. Log their values to the console



/****************************           Practice answer for value and variable           **************************/

var country = "india";
var continent = "mumbai";
var population = "101";

console.log(country);
console.log(continent);
console.log(population);



/***********************   primitive data type   *************************/

/**************************       the 7 primitive data types        **********************/

// number:- Floating point numbers -> used for decimals and integers 

// let age = 21;

// String :- sequence of charecters - > used for text

// let firstName = "mehul"

// Boolean :- Logical type that can only be true or false - > used for tacking decision 

// let fullAge = true;

// Undefined :- value taken by the variable that is not definer('empty value')
// let children;

// Null :- Also means 'empty value'

// Symbol (ES2015) :- value that is unique and cannot be changed [not useful for now]

// Biglnt (ES2020) :- Large integers then the Number type can hold



// javaScript has dynamic typing :- we do not have to manually define the data type of the value stored in a variable.
//                                  insted, data type are determined automatically.

// value has type, NOT variable!




var javascriptIsfun = true;
console.log(javascriptIsfun);

console.log(typeof true);
console.log(typeof 23);
console.log(typeof javascriptIsfun);
console.log(typeof 'Mehul');

javascriptIsfun = 'YES!';
console.log(typeof javascriptIsfun);

var year;
console.log(typeof year);

year = 1999;
console.log(typeof year);

console.log(typeof null);








// let , const and var
// let is used when the value of the variable is changed later on
let age = 30;
age = 32;

// const is used when the value of the variable is never change in future

const birthYear = 1999;
// birthYear = 2000; // give an error
const job;

var job = 'programmer';
job = 'teacher';






// Basic Operators


//math opretor
const now = 2037;
const ageMehul = now - 1999;
const ageSarah = now - 2020;
console.log(ageMehul, ageSarah);

console.log(ageMehul * 2, ageSarah / 2, 2 ** 3);
// 2 ** 3 maen 2 to the power of 3 = 2 * 2 * 2

const firstName = "mehul";
const lastName = "parmar";
console.log(firstName + " " + lastName);


// Assignment operator
let x = 10 + 5;
x += 10 // x = x + 10 = 25
x *= 4 // x = x * 4 = 100
x++; // x = x+1;
x--; // x = x-1;
console.log(x);

// Comparison operators
console.log(ageMehul > ageSarah);
console.log(ageMehul < ageSarah); // >, <, >=, <=
console.log(ageSarah >= 18);

const isFullAge = ageSarah >= 18;

console.log(now - 1991 > now - 2018);





// Operator Precedence table
const now = 2037;
const ageMehul = now - 1999;
const ageSarah = now - 2020;

console.log(now - 1991 > now - 2018);

console.log(20 - 10 - 5);

// let x, y;
x = y = 25 - 10 - 5; // x = y = 10, x = 10
console.log(x, y);

const averageAge = (ageMehul + ageSarah) / 2;
console.log(ageMehul, ageSarah, averageAge)