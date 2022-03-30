<?php

// while


// While Loop with $number

$number = 10;

// while($number<10){
//     echo $number;
//     echo PHP_EOL;
//     $number++;
// }

// do - while

// $number = 10;

// do{
//     $number++;
//     echo $number;
//     echo PHP_EOL;

// }while($number<10);



// for

// for($i=0;$i<10;$i++){
//     echo $i;
//     echo PHP_EOL;
// }


// foreach

// foreach ($fruits as $i => $fruit) {
//     echo $i . ' ' . $fruit . '<br>';
// }

$fruits = ["Bananna", "Apple", "Orange"];
foreach($fruits as  $i =>  $fruit){
    echo $i. " " . $fruit . '<br>';
}


// Iterate Over associative array.

$person = [
    'name' => 'Sajib',
    'surname' => 'SK',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];


foreach($person as $key => $value){
    if ($key === 'hobbies') {
        break;
    }else{
        echo $key . ' ' . $value . '<br>';
    }
} 