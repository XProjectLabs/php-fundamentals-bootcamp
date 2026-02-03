<?php

/*

Challenge 1: Manipulating Variables and Types in PHP

Project Description:
In this challenge, you will work with variables and different data types in PHP, including integers, strings, arrays, and booleans.

To Do:

Create a variable $age and assign it an integer value (e.g., 25).

Create a variable $name and assign your name as a string.

Create an array $fruits containing a list of fruits (e.g., apple, banana, orange).

Create a boolean variable $isAdult that checks if the age is 18 or older.

Display the values of all these variables using echo.
*/


$age = 15;
$name = 'Laravel';
$fruits = ['apple', 'banana', 'orange'];
$isAdult = $age >= 18;  

echo $age . PHP_EOL;
echo $name . PHP_EOL;
echo $fruits[1] . PHP_EOL;  // Displays 'banana', which is the second element (index 1)
echo $isAdult ? 'age = 18 or older' : 'younger than 18'; 
?>
