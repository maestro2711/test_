<?php 

$dir = scandir(__DIR__); // Get the list of files and directories in the current directory
var_dump($dir[2]);
foreach ($dir as $item) {
    if ($item !== '.' && $item !== '..') { // Exclude current and parent directory entries
        echo $item . "<br />"; // Output each item in the directory
    }
}





?>