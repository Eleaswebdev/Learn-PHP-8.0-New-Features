<?php
/**
 *
 * Named arguments allow passing arguments to functions and methods by specifying the parameter name along with the value. 
*/

// Function with named arguments
function greet($name, $greeting = "Hello") {
    echo "$greeting, $name!";
}

// Calling function with named arguments
greet(greeting: "Good morning", name: "Alice");