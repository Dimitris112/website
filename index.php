<?php
$username = "Dim T";
$secondUsername = "Dimitris Smith Conan";
$thirdUsername = array("Dimitris", "Smith", "Conan");
$phone = "123-456-7890";


// $username = strtolower($username); //tolowercase
// $username = strtoupper($username); //touppercase
// $username = trim($username); //remove leading and trailing whitespace
// $username = str_pad($username, 10, "*");
// $username = strrev($username); // reverse string
// $username = str_shuffle($username); // shuffle string
// $username = substr($username, 0, 5); // get first 5 characters
// $username = substr($username, 0, -1); // get first 5 characters

// $count = strlen($phone); // get length of string

// $index  = strpos($phone, "-"); // get position of character

// $firstName = substr($username, 0, 3);
// $lastName = substr($username, 3, 5);

// $fullname = explode(" ", $secondUsername);
// foreach ($fullname as $name) {
//     echo $name . "<br>";
// }

$thirdUsername = implode("-", $thirdUsername);

// $phone = str_replace("-", "", $phone);


// echo $username;
// echo $phone;
// echo $count;
// echo $index;
// echo $firstName;
echo "<br>";
// echo $lastName;
// echo $fullname;
echo $thirdUsername;
