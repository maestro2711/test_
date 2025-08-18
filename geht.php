<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test Page</title>
</head>

<body>

    <h1>

        <p><?php 
         require_once './function.php'; // Include the function file
         require_once 'file_system.php'; // Include the file system operations
          echo "This is a test file for PHP execution.<br />"; 
          echo __FILE__ . "<br />"; // Output the current file name
          ?></p>
        <?php 
  
      
          $name = "John Doe <br />";
          echo "Hello, " . $name . "! Welcome to the PHP test page."; # concatenation ist (.) le point
        $x= 1;
        $y = &$x; # variable assignment oder &$x = reference variable
        $x =4;
        echo "The value of y is now: " . $y; // Output the value of x ?>
    </h1>
    <?php
    // Define an array of programming languages
    $program = ['php', 'html', 'css', 'javascript'];
    echo "<br />Available programming languages: " . implode(", ", $program);
    echo $program[-1] . "<br />"; // Output the first element of the array
    echo $program[1] . "<br />"; // Output the second element of the array
    echo $program[2] . "<br />"; // Output the third element of the array
    echo $program[3] . "<br />"; // Output the fourth element of the array
    var_dump(isset($program[4])); // Check if the fifth element exists
    echo '<pre>';
     print_r($program); // Print the entire array
    echo '</pre>';
    echo "<br />The length of the array is: " . count($program);
    $array=['a','b',50 => 'c', 'd'];
    echo array_keys($array)[0] . "<br />"; // Output the first key of the array
    echo array_values($array)[1] . "<br />"; // Output the first value of the array
    echo array_shift($array) . "<br />"; // Remove and output the first element of the array
    echo array_pop($array) . "<br />"; // Remove and output the last element of the array
    echo array_unshift($array, 'e') . "<br />"; // Add 'e' to the beginning of the array
    echo array_push($array, 'f') . "<br />"; // Add 'f' to the end of the array
    echo "The modified array is: ";
    print_r($array); // Print the modified array
    #spread operator
    $array2 = ['g', 'h'];
    $mergedArray = [...$array, ...$array2]; // Merge arrays using spread operator
    echo "<br />Merged array: ";
    print_r($mergedArray); // Print the merged array
    #string operator
    $string1 = "Hello";
    $string2 = "World";
    $combinedString = $string1 . " " . $string2; // Concatenate strings
    echo "<br />Combined string: " . $combinedString; // Output the combined string
    #ternary operator
    $age = 20;
    $isAdult = ($age >= 18) ? "Adult" : "Minor"; // Check if age is 18 or older
    echo "<br />You are an: " . $isAdult; // Output the result of the ternary operation
    #null coalescing operator
    $username = null;
    $displayName = $username ?? "Guest"; // Use "Guest" if $username is null
    echo "<br />Welcome, " . $displayName; // Output the display name
    #match expression
    $color = "blue";
    $colorMessage = match ($color) {
        "red" => "You chose red.",
        "blue" => "You chose blue.",
        default => "Unknown color."
    };
    echo "<br />" . $colorMessage; // Output the message based on the color
    #array destructuring
    $person = ['name' => 'Alice', 'age' => 30];
    ['name' => $personName, 'age' => $personAge] = $person; // Destructure the array
    echo "<br />Person's name: " . $personName . ", Age: " . $personAge; // Output the destructured values
    #object destructuring
    class User {
        public string $name;
        public int $age;
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
    }
    $user = new User("Bob", 25);
    ['name' => $userName, 'age' => $userAge] = (array)$user; // Cast object to array and destructure
    echo "<br />User's name: " . $userName . ", Age: " . $userAge; // Output the destructured values
    #array functions
    $numbers = [1, 2, 3, 4, 5];
    $squaredNumbers = array_map(fn($n) => $n ** 2, $numbers); // Square each number in the array
    echo "<br />Squared numbers: " . implode(", ", $squaredNumbers); // Output the squared numbers
    #string functions
    $text = "Hello World";
    $upperText = strtoupper($text); // Convert string to uppercase
    echo "<br />Uppercase text: " . $upperText; // Output the uppercase text
    $lowerText = strtolower($text); // Convert string to lowercase
    echo "<br />Lowercase text: " . $lowerText; // Output the lowercase text
    $replacedText = str_replace("World", "PHP", $text); // Replace "World" with "PHP"
    echo "<br />Replaced text: " . $replacedText; // Output the replaced text
    #date and time functions
    $currentDate = date("Y-m-d H:i:s"); // Get current date and time
    echo "<br />Current date and time: " . $currentDate; // Output the current date and time
    #error handling
    try {
        if (!file_exists("nonexistent_file.txt")) {
            throw new Exception("File not found!"); // Throw an exception if file does not exist
        }
    } catch (Exception $e) {
        echo "<br />Error: " . $e->getMessage(); // Catch and output the exception message
    }

    #for loop
    echo "<br />For loop output: ";
    for ($i = 0; $i < 5; $i++) {
        echo $i . " "; // Output numbers from 0 to 4
    }

    #foreach loop
    echo "<br />Foreach loop output: ";
    foreach ($program as $lang) {
        echo $lang . " "; // Output each programming language in the array
    }

    #while loop
    $count = 0;
    echo "<br />While loop output: ";
    while ($count < 5) {
        echo $count . " "; // Output numbers from 0 to 4
        $count++;
    }
    ?>
</body>
?>

</body>

</html>