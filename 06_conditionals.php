<?php

$age = 22;
$salary = 300000;

// Sample if

if($age>=20){
    //echo '1';
}

// Without circle braces

if($age>=20) echo '1';


// Sample if-else

if ($age > 20) {
    echo "1";
} else {
    echo "2";
}

// Difference between == and ===

$age == 20; // true
$age == '20'; // true

$age === 20; // true
$age === '20'; // false


// if AND

if ($age >= 20 && $salary === 300000) {
    echo ' I am the king';
}

// if OR

if ($age > 20 || $salary === 300000) {
    echo ' I am the king';
}



// Ternary if


echo $age < 22  ? "Young" : "old";

// Short ternary

echo $myAge = $age ?: 18;

// Null coalescing operator

//$myName = isset($name) ? $name : "john";

$myName = $name ?? "john"; // Equivalent to above one

// var_dump($myName);

echo $myName;


// switch

$userRole = 'admin';

switch($userRole){

    case 'admin':
        echo 'You can do anything my owner <br>';
        break;
    case 'editor':
        echo 'You can edit some features <br>';
        break;
    case 'user':
        echo 'You can just browse <br>';
        break;
    default :
        echo "No current user exist <br>";
        
}