<?php
/**
 * 
 * The nullsafe operator (?->)
 * that reduces the probability of encountering errors when working with objects that might be null.
 * Syntax: $result = $object?->method();
 * if the value of '$object' is null, the expression evaluates to null. If the value of '$object' is not null, the method executes.
 */

 // Before 8.0
 if ($user !== null) {
    if ($user->getAddress() !== null) {
        $country = $user->getAddress()->country;
    }
}

// with 8.0
$country = $user?->getAddress()?->country;

// Nested
$order = $customer?->getOrder()?->getDetails()?->price; //return null if any object is null



 // Nullsafe operator example
class User {
    public ?Address $address;
}

class Address {
    public ?string $city;
}

$user = new User();
$user->address = new Address();
$user->address->city = "New York";

// Using nullsafe operator to access nested property
$city = $user?->address?->city;
echo $city; // Output: New York

 