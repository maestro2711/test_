<?php 
#function.php
    $isAdult = ($age >= 18) ? "Adult" : "Minor"; // Check if age is 18 or older
    echo "<br />You are an: " . $isAdult; // Output the result of the ternary operation
    #null coalescing operator
    $username = null;
    $displayName = $username ?? "Guest"; // Use 'Guest' if username is null
    echo "<br />Welcome, " . $displayName; // Output the display name
    #spaceship operator

# define a function to compare two values
    function compareValues($a, $b) {
        return $a <=> $b; // Returns -1, 0, or 1
    }

    // Example usage of the spaceship operator
    $result = compareValues(5, 10);
    echo "<br />Comparison result: " . $result; // Output: -1 (5 is less than 10)
    $result = compareValues(10, 10);
    echo "<br />Comparison result: " . $result;

# function parameters
    function greet($name = "Guest") {
        return "Hello, " . $name . "!"; // Default parameter value is 'Guest'
    }

    echo "<br />" . greet(); // Output: Hello, Guest!
    echo "<br />" . greet("Alice"); // Output: Hello, Alice!

# function with return value
    function add($a, $b) {
        return $a + $b; // Returns the sum of a and b
    }

    $sum = add(5, 10);
    echo "<br />The sum of 5 and 10 is: " . $sum; // Output: 15

# anonymous function (closure)
    $multiply = function($a, $b) {
        return $a * $b; // Returns the product of a and b
    };

    echo "<br />The product of 5 and 10 is: " . $multiply(5, 10); // Output: 50

# function with variable number of arguments
    function sumAll(...$numbers) {
        return array_sum($numbers); // Returns the sum of all numbers passed
    }

    echo "<br />The sum of 1, 2, 3, and 4 is: " . sumAll(1, 2, 3, 4); // Output: 10

# recursive function
    function factorial($n) {
        if ($n <= 1) {
            return 1; // Base case
        }
        return $n * factorial($n - 1); // Recursive case
    }

    echo "<br />The factorial of 5 is: " . factorial(5); // Output: 120

# function with type hinting
    function divide(float $a, float $b): float {
        if ($b == 0) {
            throw new InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b; // Returns the result of division
    }

    try {
        echo "<br />The result of dividing 10 by 2 is: " . divide(10, 2); // Output: 5
    } catch (InvalidArgumentException $e) {
        echo "<br />Error: " . $e->getMessage();
    }

# function with default parameter value
    function greetUser($name = "User") {
        return "Hello, " . $name . "!"; // Default name is 'User'
    }

    echo "<br />" . greetUser(); // Output: Hello, User!
    echo "<br />" . greetUser("Alice"); // Output: Hello, Alice!    




?>