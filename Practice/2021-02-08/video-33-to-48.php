<?php


// // globle  variable and function
// $user_ip  = $_SERVER['REMOTE_ADDR'];
// // echo $user_ip;
// function echo_ip()
// {
//     global $user_ip; // to access globle variable
//     $string = 'Your ip address is: ' . $user_ip;
//     echo $string;
// }
// echo_ip();


// String Functions part 1
// $string = 'This is an example string .';
// $string_word_count = str_word_count($string, 1); // 1 for count the word // Array ( [0] => This [1] => is [2] => an [3] => example [4] => string )
// $string_word_count = str_word_count($string, 2); // 2 for position of the word // Array ( [0] => This [5] => is [8] => an [11] => example [19] => string )
// $string_word_count = str_word_count($string, 1, '.'); // include the '.' in word if we saprate it //Array ( [0] => This [1] => is [2] => an [3] => example [4] => string [5] => . )
// print_r($string_word_count);


// String Functions part 2,3
// $string = 'This is an example string &.';
// $string_word_count = str_word_count($string, 1, '&.'); // include the '.' in word if we saprate it //Array ( [0] => This [1] => is [2] => an [3] => example [4] => string [5] => . )
// print_r($string_word_count);

// $string_shuffled = str_shuffle($string); // Generate the randem string from the given string
// $half = substr($string_shuffled, 0, 5); // give the substring from the given string from given starting point to given end point 
// $string_reverse = strrev($string); // reverse the string
// echo $string_reverse;


// // String Functions part 3
// $string_one = "This is my essay. I\'m going to be talking about php.";
// $string_two = "This is my essay. I will talking about the subject php.";
// similar_text($string_one, $string_two, $result); // check the similarity of two string
// echo 'The similarith between is, ' . $result;


// $string = "This is an example string.";
// echo (strlen($string)); // return the length of the string

// $string = '    This is an example string.    ';
// // echo (trim($string)); // remove the space from the bigin of the string and from end of string // not remove the &nbsp space
// // echo (ltrim($string)); // remove the space from the bigin of the string and from end of string // not remove the &nbsp space
// echo (rtrim($string)); // remove the space from the bigin of the string and from end of string // not remove the &nbsp space

// $string  = 'This is a <img src="image.jpg"> string.';
// $string_slashes = htmlentities(addslashes($string)); // add slashes
// echo ($string_slashes);
// echo (stripslashes($string_slashes)); // remove the slashes


// array in php
// $number = array(1, 5, 6, 7);
// echo $number[1];
// print_r($number);
// echo $number;
// $number[4] = 5;
// echo $number[1];


// Associative Arrays
// that allow to change the key of ant array
// $food = array('pasta' => 300, 'Pizz' => 1000, 'salad' => 150, 'vegetables' => 50); // make the key value pair
// print_r($food); // Array ( [pasta] => 300 [Pizz] => 1000 [salad] => 150 [vegetables] => 50 )
// echo $food['pasta']; // now the key is pasta


// multi-dimensional array array inside the array

// $food = array('pasta' => 300, 'Pizz' => 1000, 'salad' => 150, 'vegetables' => 50);

/*
healthy
salad
vegetable
pasta

unhealthy
pizza
ice-cream
*/

// $healty = array(
//     'healty' => array('salad', 'vegetable', 'pasta'),
//     'unhealty' => array('pizza', 'ice-cream')
// );
// echo $healty['healty'][1];
// echo $healty['unhealty'][0];



// for-each statement
// $healty = array(
//     'healty' => array('salad', 'vegetable', 'pasta'),
//     'unhealty' => array('pizza', 'ice-cream')
// );

// foreach ($healty as $elemet => $inner_element) {
//     echo '<strong>' . $elemet . '<br>' . '</strong>';
//     foreach ($inner_element as $item) {
//         echo $item . '<br>';
//     };
//     echo $inner_element . '<br>';
// }


// include and require function
// 1) include
// include 'hearder.php';
// // include the page in more then one page
// // if the included file is not available then the other code ren perfectly
// // 2) require 
// require 'hearder.php';
// // if the require page is not available the kill the antire page after this line
// // echo '<h1>My page</h1>';

// // include_ and require function
// require_once 'hearder.php';
// include_once 'hearder.php';
// it check the file is already included before this inlude then not include file again


// more on Expression Matching // preg_match('/ /', $string)
// function has_space($string)
// {
//     if (preg_match('/ /', $string)) {
//         return true;
//     }
//     return false;
// }
// $string = 'This dosenthavespace';
// if (has_space($string)) {
//     echo 'has at least one space';
// } else {
//     echo 'Has no space';
// }


//  string length ==> strlen($string)
// strtoupper($string) //Upper_Lower Case 
// strtolower($string)

// if (isset($_GET['user_name']) && !empty($_GET['user_name'])) {
//     echo $_GET['user_name'];
// }

// strpos($string , $find, $offset);
?>
<!-- <form action="video-33-to-.php">
    Name:<input type="text" name="user_name">
    <input type="submit" value="submit">
</form> -->