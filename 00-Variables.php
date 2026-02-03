<?php
// String
$name = "Ali";

// Integer
$age = 20;

// Float (double)
$price = 19.99;

// Boolean
$isStudent = true;

// Array
$colors = ["red", "green", "blue"];

// Null
$nothing = null;

// Output values
echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
echo "Price: " . $price . "\n";
echo "Is student: " . ($isStudent ? "Yes" : "No") . "\n";
echo "First color: " . $colors[0] . "\n";

// Check types
var_dump($name);
var_dump($age);
var_dump($price);
var_dump($isStudent);
var_dump($colors);
var_dump($nothing);
?>
