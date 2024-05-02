<?php
/**
 * 
 * A Weak Map is a specific type of data structure in PHP designed to store key-value pairs 
 * where keys are objects, and values can be any data type.
 * Unlike traditional PHP arrays, weak map objects have no concrete reference to the object keys
 * So, if object keys have been garbage collected, they are automatically removed 
 * from the Weak Map, even if values are still associated with them.
 */