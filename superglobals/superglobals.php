<?php

   echo '<pre>';
print_r($_SERVER); // Print the server variables for debugging
echo '</pre>';

echo '<pre>';
print_r($_REQUEST); // Print the request variables for debugging
echo '</pre>';

echo '<pre>';
print_r($_POST); // Print the post variables for debugging
echo '</pre>';

echo '<pre>';
print_r($_GET); // Print the get variables for debugging
echo '</pre>';

echo '<pre>';
print_r($_FILES); // Print the files variables for debugging
echo '</pre>';

echo '<pre>';
print_r($_COOKIE); // Print the cookie variables for debugging
echo '</pre>';

echo '<pre>';
print_r($_SESSION); // Print the session variables for debugging
echo '</pre>';

echo '<pre>';
print_r($_ENV); // Print the environment variables for debugging
echo '</pre>';

$dir = scandir(__DIR__); // Get the list of files and directories in the current directory
var_dump($dir[2]);
foreach ($dir as $item) {
    if ($item !== '.' && $item !== '..') { // Exclude current and parent directory entries
        echo $item . "<br />"; // Output each item in the directory
    }
}