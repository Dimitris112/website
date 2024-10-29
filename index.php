<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="country">Enter a country</label>
        <input type="text" name="country"><br>
        <input type="submit" value="Submit">
    </form>
</body>


</html>

<?php
// key => value
// let capitals = {"Spain": "Madrid", "Germany": "Berlin", "Netherlands": "Amsterdam", "Greece": "Athens", "Italy": "Rome"} as object in js
// capitals = {"Spain": "Madrid", "Germany": "Berlin", "Netherlands": "Amsterdam", "Greece": "Athens", "Italy": "Rome"} as dictionary in python

$capitals = array(
    "Spain" => "Madrid",
    "Germany" => "Berlin",
    "Netherlands" => "Amsterdam",
    "Greece" => "Athens",
    "Italy" => "Rome"
);

$capital = $capitals[$_POST["country"]];


echo "The capital is {$capital}.";

// -----------------------------------------------------------------------------

// $capitals["Spain"] = "Barcelona";
// $capitals["China"] = "Beijing";
// array_pop($capitals);
// array_shift($capitals);

// $keys =  array_keys($capitals);
// $values = array_values($capitals);


// foreach ($capitals as $key => $value) {
//     echo "The capital of " . $key . " is " . $value . "<br>";
// }

// echo "<br>";

// foreach ($keys as $key) {
//     echo "The capital of " . $key . " is " . $capitals[$key] . "<br>";
// }

// echo "<br>";

// foreach ($values as $value) {
//     echo $value . "<br>";
// }

// echo "<br>";

// $capitals = array_flip($capitals);

// foreach ($capitals as $key => $value) {
//     echo $key . "is the capital of " . $value . "<br>";
// }

// echo "<br>";

// $capitals = array_reverse($capitals);

// foreach ($capitals as $key => $value) {
//     echo $key . "is the capital of " . $value . "<br>";
// }

// echo "<br>";

// echo "There are " . count($capitals) . " countries inside the array.<br>";
