<?php

// Function which prints "Hello I am Zura"

// function myName(){
//     echo "Hello I am Zura";
// }
// myName();

// Function with argument

function myName($name){
    echo "Hello I am $name";
    
}
// myName("Sajib");
// myName("EPU");

// Create sum of two functions

// function sum($num1,$num2){
//     echo  $num1 + $num2;
// }
// sum(10,20);

// Create function to sum all numbers using ...$nums

// function sum(...$nums){

//     $sum = 0;

//     foreach($nums as $num) $sum += $num;

//     return $sum;
// }

// echo sum(1,3, 4,5,6);

// Arrow functions

function sum(...$nums)
{
   return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sum(1, 2, 3, 4, 6);
