<?php

// Create array

$fruits = [ "Banana", "Apple", "orange" ];


// Print the whole array

print_r($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index

echo $fruits[1].'<br>';

// Set element by index

$fruits[0] = "peach";

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2

echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';

// Append element

$fruits[] = "Jumbora";
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Print the length of the array

echo count($fruits).'<br>';


// Add element at the end of the array

array_push($fruits, "foo");

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array

array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array

array_unshift($fruits, "Peyara");

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array

array_shift($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Split the string into an array

$string = "Banana,apple,orange";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';



// Combine array elements into string

echo implode(",", $fruits)."<br>";

// Check if element exist in the array

echo '<pre>';
var_dump(in_array("apple", $fruits));
echo '</pre>';

// Search element index in the array

echo '<pre>';
var_dump(array_search("Peach", $fruits));
echo '</pre>';

// Merge two arrays

$vegetables = ['Potato', 'Cucumber'];
// echo '<pre>';
// //var_dump(array_merge($fruits, $vegetables));
// //var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4
// echo '</pre>';

// Sorting of array (Reverse order also)

sort($fruits); //sort, rsort
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    "name" => "Sajib Khan",
    "nickname" => "SK",
    "age" => 30,
    "hobbies" => [
        'tennis','video games'
    ],
];


// Get element by key

echo $person["name"] . '<br>';

// Set element by key

$person['job'] = "Web developer";

print_r($person);

echo '<pre>';
var_dump($person);
echo '</pre>';


// Null coalescing assignment operator. Since PHP 7.4
// if(!isset($person['address'])){
//     $person['address'] = 'unknown';
// }

$person['address'] = $person['address'] ?? 'unknown';

echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key
echo '<pre>';
var_dump(isset($person['location']));  // Change age into "location"
echo '</pre>';

// Print the keys of the array

echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array

echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys


// Two dimensional arrays