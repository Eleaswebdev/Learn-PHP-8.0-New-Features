<?php
/**
 * Exceptions are PHP's built-in mechanism for error handling
 */

 /**
  * Use of throw exceptions
  */

//   // 1. In Ternary operator
//   $value = $input ? $input : throw new Exception('Input cannot be empty');

//   // 2. In arrow functions
//   $getPrice = fn($product) => $product->price ?? throw new Exception('Price not found');

//   //3. In Coalescing chains
//   $value = $first ?? $second ?? throw new Exception('No value found');

  // Throw expression example
function divide($numerator, $denominator) {
    $result = $denominator !== 0 ? $numerator / $denominator : throw new InvalidArgumentException("Division by zero");
    return $result;
}

try {
    $result = divide(10, 0);
    echo "Result: " . $result;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage(); // Output: Error: Division by zero
}