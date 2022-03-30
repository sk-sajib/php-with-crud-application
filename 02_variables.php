<?php

// What is a variable

//  Variables are used to store information to be referenced and manipulated in a computer program. 

// Variable types

/*

    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource

*/

// Declare variables

$name = "Sajib";
$age = 44;
$isMale = true; // Change into | false show empty output
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation

echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables

echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
echo  '<br>';

var_dump($name, $age, $isMale, $height, $salary);

echo  '<br>';

// Change the value of the variable

$name = false;


// Print type of the variable
echo  '<br>';

echo gettype($name);
echo  '<br>';

// Variable checking functions
echo  '<br>';

is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true;



// Check if variable is defined

var_dump( isset($name));
echo '<br>';
var_dump( isset($name2));
echo '<br>';

// Constants

define("PI", 3.14);
echo PI;

// Using PHP built-in constants
echo '<br>';
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';