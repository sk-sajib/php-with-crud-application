<?php

// CURL IS TOOL WHICH GIVES YOU POSSIBILITY TO INTERACT REMOTELY TO OTHER SERVICES OR RESOURCES
// CURL USED TO SEND ADDITIONAL HEADER TO REQUEST AND POST SOME DATA

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.

$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
//$userJson = curl_exec($resource);
// echo $userJson;

// Get response status code

$responseCode = curl_getinfo($resource,CURLINFO_HTTP_CODE);

echo '<pre>';
var_dump($responseCode);
echo '</pre>';

// set_opt_array



// Post request

$user = [
    'name' => "sajib Khan",
    'job' => 'web developer',
    'id' => "37424936376"
];


$ch = curl_init($url);

curl_setopt_array($ch, [

    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($user),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('Content-Type: application/json')

]);

$result = curl_exec($ch);
curl_close($ch);
var_dump($result);

