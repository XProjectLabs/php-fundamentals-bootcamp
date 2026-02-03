<?php

/*
    Challenge 5: Functions in PHP

    Project Description:
    In this challenge, you will create and use functions in PHP to organize your code and make it reusable.

    To Do:

    Create a function add($a, $b) that takes two parameters and returns their sum.

    Create a function displayMessage($message) that displays the message passed as an argument.

    Use the add function to add two numbers and display the result.

    Use the displayMessage function to display a custom message.
*/


function add(int $a, int $b)
{
    return $a + $b;
}

function displayMessage(string $message)
{
    return 'Message: ' . $message;
}

echo add(10,20);
echo PHP_EOL;
echo displayMessage("Welcome to YouCode");