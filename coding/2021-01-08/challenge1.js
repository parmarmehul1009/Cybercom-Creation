/*
Coding Challenge #1
Mark and John are trying to compare their BMI (Body Mass Index), which is
calculated using the formula:
BMI = mass / height ** 2 = mass / (height * height) (mass in kg
and height in meter).
Your tasks:
1. Store Mark's and John's mass and height in variables
2. Calculate both their BMIs 
3. Create a Boolean variable  containing information about
whether Mark has a higher BMI than John.
4. Print a string to the console containing the variable from step 3. (something like "Is Mark's BMI hegher then John's ? true").
*/


// const markMass = 78,
//     markHeight = 1.69;

// const johnMass = 92,
//     johnHeight = 1.76;

// markHeigherBMI = (markMass / (markHeight * markHeight)) > (johnMass / (johnHeight * johnHeight))
// console.log(`Is Mark's BMI hegher then John's ? ${markHeigherBMI}`);


const markMass = 95;
const markHeight = 1.88;

const johnMass = 85;
const johnHeight = 1.76;

const BMIMark = markMass / markHeight ** 2;
const BMIJohn = johnMass / (johnHeight * johnHeight);
const markHeigherBMI = BMIMark > BMIJohn;
console.log(`Is Mark's BMI hegher then John's ? ${markHeigherBMI}`)