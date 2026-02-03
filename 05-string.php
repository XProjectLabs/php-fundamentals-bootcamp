<?php

/*
    Challenge 6: String 
    
    Project Description:
    You will work with strings, using functions like strlen(), substr(), strtoupper(), and strtolower().

    To do:
    Create a variable $phrase and assign it a string.

    Use strlen() to display the length of the string.

    Use substr() to extract a portion of the string (e.g., the first 5 characters).

    Use strtoupper() to convert the string to uppercase and strtolower() to convert it to lowercase.

    Use strpos() to check if a specific word is present in the string.
*/

$phrase = "i am a backend developer";

$lenOfphrase = strlen($phrase);
$substrOfphrase = substr($phrase, 6,-10);
$stringTouppercase = strtoupper($phrase);
$stringTolowercase = strtolower($phrase);

echo 'strlen => ' . $lenOfphrase . PHP_EOL;
echo 'substr => ' . $substrOfphrase . PHP_EOL;
echo 'strtoupper' . $stringTouppercase . PHP_EOL;
echo 'strtolower' . $stringTolowercase . PHP_EOL;

