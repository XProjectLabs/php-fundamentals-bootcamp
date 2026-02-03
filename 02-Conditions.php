<?php
/*
    Challenge 3: Control Structures (Conditions)

    Project Description:
    In this challenge, you will learn how to use control structures like if, else, and elseif.

    To Do:

    Create a variable $number and assign it an integer value.

    Use an if statement to check if $number is even or odd and display the result.

    Use elseif to check if the number is greater than 10 or smaller.

    Add an else to display a default message when the previous conditions are not met.
 */

$number = 1337;

// Check if the number is even or odd
if ($number % 2 == 0) {
    echo 'Even' . PHP_EOL;
} elseif ($number % 2 != 0) {
    echo 'Odd' . PHP_EOL;
}

// Check if the number is greater or smaller than 10
if ($number > 10) {
    echo 'Number is Greater Than 10' . PHP_EOL;
} elseif ($number < 10) {
    echo 'Number is Smaller Than 10' . PHP_EOL;
} else {
    // Default condition (in case $number == 10)
    echo 'Number is Equal to 10' . PHP_EOL;
}
