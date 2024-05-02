<?php
/**
 * Constructor property promotion is a shorthand syntax for declaring and initializing class properties directly in the constructor parameters.
 */

 // Before PHP 8.0

 class Person {
    private string $name;
    private int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

// With PHP 8.0
class Person {
    public function __construct(
        private string $name, 
        private int $age
    ) {}
}

// Constructor property promotion example
class Point {
    public function __construct(public float $x, public float $y) {}
}

$point = new Point(3.5, 4.2);
echo $point->x . ", " . $point->y;  //