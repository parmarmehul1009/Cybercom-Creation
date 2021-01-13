// calculate tip function that calculate the tip as per conditions
function calcTip(bill) {
    if (bill <= 50) return bill * 0.2;
    else if (50 < bill < 200) return bill * 0.15;
    else return bill * 0.1;
}

const bills = [124, 48, 268];
console.log(bills);

// call the calculate tip function for every bill
const tips = [calcTip(bills[0]), calcTip(bills[1]), calcTip(bills[2])];
console.log(tips); // print the tips

// calculate the total for every bill
const total = [bills[0] + tips[0], bills[1] + tips[1], bills[2] + tips[2]]
console.log(total); // print the total