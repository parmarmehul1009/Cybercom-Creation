// calculate the average of the 

const averageOfJohn = (97 + 112 + 101) / 3;
const averageOfMike = (109 + 95 + 103) / 3;

if (averageOfJohn > averageOfMike) {
    console.log(`John win the competition by ${averageOfJohn} average points`);
} else if (averageOfJohn < averageOfMike) {
    console.log(`Mike win the competition  by ${averageOfMike} average points`);
} else {
    console.log(`Draw the competition`);
}




// code for extra step
const averageOfJohn1 = (97 + 97 + 97) / 3;
const averageOfMike1 = (97 + 97 + 97) / 3;
const averageOfMary1 = (97 + 97 + 911) / 3;


if (averageOfJohn1 > averageOfMike1 && averageOfJohn1 > averageOfMary1) {
    console.log(`John win the competition by ${averageOfJohn1} average points`);
} else if (averageOfMike1 > averageOfJohn1 && averageOfMike1 > averageOfMary1) {
    console.log(`Mike win the competition  by ${averageOfMike1} average points`);
} else if (averageOfJohn1 === averageOfMary1 && averageOfMary1 === averageOfMike1) {
    console.log(`Draw the competition`);
} else {
    console.log(`Mary win the competition  by ${averageOfMary1} average points`);
}