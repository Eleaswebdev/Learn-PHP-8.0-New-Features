<?php
/**
 * 
 * Attributes are special tokens that allow structured metadata injection within classes, functions, and properties.
 */

 
 /**
  * Defining Attributes
  * You must create a class with the #[Attribute] syntax.
*/
#[Attribute]
class MyAttribute
{
    public function __construct(public string $value) {}
}

/**
 * Applying Attributes
 * 
 */
#[MyAttribute('Example Value')]
class MyClass
{
    // Class code here
}

// Attribute example
// Attribute example
#[Author("John Doe")]
class Book {
    #[Title("PHP Basics")]
    public string $title;

    #[Year(2022)]
    public int $year;
}

// Usage of attributes
$book = new Book();
$book->title = "PHP Programming";
$book->year = 2021;

// Reflection to retrieve attribute values
$reflector = new ReflectionClass($book);
print_r($reflector->getAttributes());
foreach ($reflector->getAttributes() as $attribute) {
    echo $attribute->getName() . ": " . $attribute->getArguments()[0] . "<br>";
}

