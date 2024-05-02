<?php
/**
 * 
 * The match expression is a more versatile and concise alternative to the traditional switch statement.
 * It allows matching a value against multiple possible conditions and returning a corresponding result in a more readable and expressive way.
*/

// Match expression example
$color = "red";
$result = match($color) {
    "red" => "It's a red color",
    "blue" => "It's a blue color",
    "green" => "It's a green color",
    default => "Unknown color",
};

echo $result; // Output: It's a red color

// Match multiple values

$day = 'Tue';

$result = match ($day) {
    'Mon', 'Tue', 'Wed', 'Thu', 'Fri' => 'Weekday',
    'Sat', 'Sun' => 'Weekend',
    default => 'Invalid day'
};

echo $result; // Displays: "Weekday"

// Expression in match arms
$value = 20;

$result = match (true) {
    $value > 10 && $value < 50 => 'Between 10 and 50',
    $value <= 10 => '10 or below',
    default => 'Other'
};

echo $result; // Displays: "Between 10 and 50"

/**
 * Real world use case
 * Consider a website where users are assigned roles such as 'administrator', 'editor', and 'user'.
 */

 $role = 'editor';

$permissions = match($role) {
    'admin' => ['create', 'edit', 'delete', 'view'],
    'editor' => ['edit', 'view'],
    'user' => ['view'],
    default => []
};

print_r($permissions);