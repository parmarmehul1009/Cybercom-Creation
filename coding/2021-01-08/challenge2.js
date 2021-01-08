// calculate the average of the 

const averageOfJohn = (97 + 112 + 101) / 3;
const averageOfMike = (109 + 95 + 106) / 3;

if (averageOfJohn > averageOfMike) {
    console.log(`John win the competition by ${averageOfJohn} average points`);
} else if (averageOfJohn < averageOfMike) {
    console.log(`Mike win the competition  by ${averageOfMike} average points`);
} else {
    console.log(`Draw the competition`);
}




// code for extra step
const averageOfJohn = (97 + 97 + 97) / 3;
const averageOfMike = (97 + 97 + 97) / 3;
const averageOfMary = (97 + 97 + 97) / 3;


if (averageOfJohn > averageOfMike && averageOfJohn > averageOfMary) {
    console.log(`John win the competition by ${averageOfJohn} average points`);
} else if (averageOfMike > averageOfJohn && averageOfMike > averageOfMary) {
    console.log(`Mike win the competition  by ${averageOfMike} average points`);
} else if (averageOfJohn === averageOfMary && averageOfMary === averageOfMike) {
    console.log(`Draw the competition`);
} else {
    console.log(`Mary win the competition  by ${averageOfMary} average points`);
}