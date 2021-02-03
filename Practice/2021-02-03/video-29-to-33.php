<?php

// die and exit function

// echo 'Hello ';

// die('Error. Page has ended!');
// exit(); // same as die();
// echo ' World';


// connect with data base

// @mysqli_connect('localhost', 'root', '') or die('Could not connect to database');

// echo "Connected!";




// Expression Matching

// to check the string is exist in given or note

// preg_match('Expession', 'String data',);
// $string = "This is the string";

// if (preg_match('/mehul/', $string)) {
//     echo "match found";
// } else {
//     echo "match not found";
// }




// Basic Function

// function Myname()
// {
//     echo "My Name is Mehul";
// }

// Myname();




// Function With Arguments

// $innumber1 = 10;
// $innumber2 = 20;

// function add($number1, $number2)
// {
//     echo $number1 + $number2;
//     // return $number1 + $number2;
// }
// echo (add($innumber1, $innumber2));


// function Displaydate($day, $date, $year)
// {
//     echo $day . ' ' . $date . ' ' . $year;
// }
// Displaydate('Monday', 30, 2021);




// Function with a Return Value

function sum($number1, $number2)
{
    return $number1 + $number2;
}

$result = sum(4, 8);
echo ($result);

echo sum(10, 10) + 50;
