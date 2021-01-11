// Tacking Decision_if_else Statements
const age = 19;
const isOldEnough = age >= 18;
if (isOldEnough) {
    console.log('mehul can start diving license');
} else {
    console.log('mehul can not start diving license')
}

const birthYear = 2001;
let century;

if (birthYear <= 2000) {
    century = 20;
} else {
    century = 21;
}
console.log(century);


// Boolean Logic
// BASIC boolean logic : AND, & OR NOT OPERATORS
const hadDriversLicense = true; //  A
const hasGoodVision = true; // B

console.log(hadDriversLicense && hasGoodVision);
console.log(hadDriversLicense || hasGoodVision);
console.log(!hadDriversLicense);

const shouldDrive = (hadDriversLicense && hasGoodVision)
if (shouldDrive) {
    console.log("Mehul is able to drive");
} else {
    console.log('someone else should drive')
}



// The Conditional (Ternary) Operator

const age = 18;
age >= 18 ? console.log('I like to drink Wine') : console.log('I like to drink water');

const drink = age >= 18 ? 'wine' : 'water';
console.log(drink);

console.log(`I like to drink ${age >= 18 ? 'wine' : 'water'}`);


// The Switch Statement

const day = 'monday';
switch (day) {
    case 'monday': // day === 'monday'
        console.log('Plan cource Stucture');
        console.log('Go to coding meetup');
        break;
    case 'tuesday':
        console.log('prepare theory video');
        break;
    case 'wednesday':
    case 'thursday':
        console.log('Write code example');
        break;
    case 'friday':
        console.log('Recode videos');
        break;
    case 'saturday':
    case 'sunday':
        console.log('Enjoy the weekend :-)');
        break;
    default:
        console.log("not a valid day!");
}




// Truthy and Falsy Values

// 5 falsy valurs: 0, '', undefined, null, NaN
console.log(Boolean(0));
console.log(Boolean(undefined));
console.log(Boolean('mehul'));
console.log(Boolean(''));
console.log(Boolean({}));

const money = 7;
if (money) {
    console.log("Don't spend it all ;)")
} else {
    console.log('You should get a job!')
}

let height = 10;
if (height) {
    console.log('YAY! Height is defined')
} else {
    console.log('Height is not Defined')
}

// Equality Operators_== vs. ===

const age = '18';
if (age === 18) console.log('You just become an adult : D (strict)');

if (age == 18) console.log('You just become an adult : D (Loose)');

const favourite = Number(prompt("what's your favourite number ?"));

if (favourite === 23) {
    console.log("Cool! 23 is an amezing number!");
} else if (favourite === 7) {
    console.log("7 is also a cool number");
} else if (favourite === 9) {
    console.log("9 is also a cool number");
} else {
    console.log("Number is not 23 or 7 or 9");
}

if (favourite !== 23) console.log('why not 23 ?');



// Functions

function loggre() {
    console.log('my name is mehul');
}

// calling  / Running / invoking function

// loggre();

function fruitProcessor(apples, oranges) {
    console.log(apples, oranges);
    const juice = `juice with ${apples} apples and ${oranges} oranges.`;
    return juice;
}

const appleJuice = fruitProcessor(5, 0);
console.log(appleJuice);

const appleOrangeJuice = fruitProcessor(5, 6);
console.log(appleOrangeJuice);


// 034 Function Declarations vs. Expressions

// Function Declaration
function calcAge1(birthYear) {
    return 2020 - birthYear;
}
const age1 = calcAge1(1999);


// Function expression
const calAge2 = function(birthYear) {
    return 2020 - birthYear
}
const age2 = calAge2(1999);

console.log(age1, age2);


// Introduction to Arrays

const friend1 = 'jaymin';
const friend2 = 'ravi';
const friend3 = 'peter';

const friends = ['Mehul', 'ravi', 'peter'];
console.log(friends);

const year = new Array(1999, 1985, 1956, 2021);
console.log(year);

console.log(friends[0]);
console.log(friends[2]);

console.log(friends.length);
console.log(friends[friends.length - 1]);

friends[2] = 'mayur';
console.log(friends);

// ADD elements
friends.push('jay');
console.log(friends);

friends.unshift('Manan'); // add at start of array
console.log(friends);


// remove elements
friends.pop(); // remove last element and return it
console.log(friends);

friends.shift(); // Remove the first element and return it
console.log(friends);

console.log(friends.indexOf('Mehul')); // Return the index of element

console.log(friends.includes('mehul')); // Return true if the element is present in the array

alert(myFunc());

function myFunc() { return 5; }
alert(myFunc);
var myFunc = function() { return 5; }