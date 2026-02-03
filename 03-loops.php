<?php

/*

    Challenge 4: Loops in PHP

    Project Description:
    You will now work with loops in PHP. This challenge will let you practice for, while, and foreach loops.

    To Do:

    Create an array $numbers containing several integers (for example: 1, 2, 3, 4, 5).

    Use a foreach loop to display each number in the array.

    Use a for loop to display numbers from 1 to 10.

    Use a while loop to display numbers from 1 to 5.

 */

$number = [1,2,3,4,5];

foreach($number as $number)
    {
        echo $number . ' ';
    }

echo PHP_EOL;

for($i = 1 ; $i <= 10 ; $i++)
    {
         echo $i . ' ';
    }


echo PHP_EOL;

$n = 1;
while($n <= 5)
    {
         echo $n . ' ';
         $n++;
    }
