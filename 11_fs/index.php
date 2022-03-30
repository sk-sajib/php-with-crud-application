<?php
// Magic constants

echo __FILE__ . '<br>';
echo __DIR__ .' <br> ';
echo __LINE__ . '<br>';

// Create directory

mkdir('test');

// Rename directory

rename('test', 'test2');

// Delete directory

rmdir('test2');

// Read files and folders inside directory

// $files = scandir('./');

// echo '<pre>';
// var_dump($files);
// echo '</pre>';


// file_get_contents, file_put_contents

// $lorem =   file_get_contents('lorem.txt');
// echo $lorem;

// file_put_contents('lorem.txt', "very simple txt" . $lorem);


// file_get_contents from URL

$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
$users = json_decode($jsonContent, true);

echo '<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists

file_exists('lorem.txt'); // true

// is_dir
// filemtime
// filesize

filesize('lorem.txt');

// disk_free_space
// file