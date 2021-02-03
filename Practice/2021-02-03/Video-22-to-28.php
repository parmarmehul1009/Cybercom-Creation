<?php
//  Arithmetic  Operator 

// $sum = 10 + 20;

// $sum = 10 - 20;

// $sum = 10 * 20;

// $sum = 10 / 20;

// $number1 = 100;
// $number2 = 50;
// $number3 = 2;

// $result = $number1 + $number2 / $number3;

// echo $result;

// $result = $number1 % $number2;
// echo $result;

// $number1++; // $number1 = $number1 + 1;




// Logical Ope. 

// $number1 = 501;
// $lower = 500;
// $upper = 10000;
// if ($number1 >= $lower && $number1 <= $upper) {
//     echo 'ok';
// } else {
//     echo 'Number must be between' . $lower . 'and' . $upper;
// }

// OR = ||



// Triple Equals

// $num1 = '1';
// $num2 = 1;

// if ($num1 == $num2) {
//     echo "Equal";
// } else {
//     echo "Not Equal";
// }

// if ($num1 === $num2) {
//     echo "Equal";
// } else {
//     echo "Not Equal";
// }


// While Loop

// $number1 = 1;
// while ($number1 <= 10) {
//     echo $number1 . '<br>';
//     $number1++;
// }


// Do while loop
// $counter = 1;
// do {
//     echo 'This will ALWAYS show.<br>';
//     $counter++;
// } while ($counter <= 10);



// for loop

// for ($count = 1; $count <= 10; $count++) {
//     echo $count . '<br>';
// }

// for ($count = 10; $count >= 1; $count--) {
//     echo $count . '<br>';
// }


// Switch Statement

$number = 1;

switch ($number) {
    case 1:
        echo 'One';
        break;
    case 2:
        echo 'Two';
        break;
    case 3:
        echo 'Three';
        break;
    default:
        echo "None of this";
}

$day = 'Monday';
switch ($day) {
    case 'Saturday':
    case 'Sunday':
        echo "It\' a weekend";
        break;
    default:
        echo "Not Weekend";
}
