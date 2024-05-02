<?php
/**
 * 
 * Union types allow variables, function parameters, and return types to accept multiple types of values.
 * In the example, the foo() function accepts an argument that can be either an integer or a string and returns the same type.
 * Union types with a T1|T2|... syntax instead:
*/

// Union type declaration for function parameter and return type
function calculateArea(int|float $radius): float {
    return pi() * $radius * $radius;
}

// Usage of function with union type parameter
echo "Area of circle with radius 3: " . calculateArea(3) . "<br>";   // Output: Area of circle with radius 3: 28.274333882308
echo "Area of circle with radius 3.5: " . calculateArea(3.5) . "<br>";