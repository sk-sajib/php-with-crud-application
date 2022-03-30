<?php

// Create simple string

/* 
    Different between single quote and double quote
    
    In single quote we can't use $variable directly but in double quote we can
    use $variable directly

*/


$name = "I am Sajib khan";
$name2 = 'i am sajib khan';

$name3 =  "hello $name .how are you". "<br>";
$name4 =  'hello $name . i am good';

// echo $name3;
// echo $name4;

// String concatenation

// String functions

$string = "      Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2- " . trim($string) . '<br>' . PHP_EOL;
echo "3- " . ltrim($string). '<br>' . PHP_EOL;
echo "4- " . rtrim($string). '<br>' . PHP_EOL;
echo "5- " . str_word_count($string). '<br>' . PHP_EOL;
echo "6- " . strrev($string) . '<br>' . PHP_EOL;
echo "7- " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8- " . strtolower($string) . '<br>' . PHP_EOL;
echo "9- " . ucfirst("hello i php") . '<br>' . PHP_EOL;
echo "10- ". lcfirst("Hello php Lover") . '<br>' . PHP_EOL;
echo "11- ". ucwords("hello php Lover") . '<br>' . PHP_EOL;
echo "12-" . strpos($string, 'world'). '<br>' . PHP_EOL;
echo "13-" . stripos($string, 'world'). '<br>' . PHP_EOL;
echo "14-" . substr($string, 8, 9). '<br>' . PHP_EOL;
echo "15-" . str_replace('world', "php", $string). '<br>' . PHP_EOL;
echo "16-" . str_ireplace('world', "php", $string). '<br>' . PHP_EOL;




// Multiline text and line breaks

$longText = "
    Hello my name is sajib khan
    i am a student
    I love someone i don't know
";

// echo $longText. '<br>' . PHP_EOL;

// echo nl2br ($longText) . '<br>' . PHP_EOL;

// Multiline text and reserve html tags

$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;

// https://www.php.net/manual/en/ref.strings.php