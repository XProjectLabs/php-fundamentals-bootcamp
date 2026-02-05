<?php

Class User
{
    public function __construct(
        public readonly string $name,
        public string $email
    ){}

};

$newUser = new User('admin  ','email@gmail.com');
echo $newUser->name;
echo $newUser->email;
// $newUser->name = 'user'; error read only can be changed


// Replace Switch Case
$day = 3;

$result = match ($day) {
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",
    6 => "Saturday",
    7 => "Sunday",
    default => "Invalid day",
};

echo $result;

