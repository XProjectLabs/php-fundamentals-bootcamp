<?php

/*

    Challenge 2: Working with Associative Arrays

    Project Description:
    You will learn how to work with associative arrays in PHP. These arrays allow you to associate keys with values, instead of using numeric indices.

    To Do:

    Create an associative array $person with the keys name, firstName, age, and city.

    Add values for each corresponding key.

    Add a new key email to this array.

    Use a foreach loop to display all the values in the array.
*/


$person = [
    'name' => 'youcode',
    'age'  => 8,
    'city' => 'Youssofia',
    'email' => 'admin@youcode.ma'
];

foreach ($person as $person => $value)
    {
        echo $person . " : ". $value . PHP_EOL;
    }


