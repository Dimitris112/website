<?php
// let foods = ["apple", "banana", "orange", "mango", "pineapple"] for js;

$foods = array("apple", "banana", "orange", "mango", "pineapple");
// echo $foods[2];

// $foods[0] = "grapes";
// array_push($foods, "grapes"); // add element(s) at the end
// array_pop($foods); // remove element(s) at the end
// array_shift($foods); // remove element(s) at the start
// array_unshift($foods, "grapes"); // add element(s) at the start
$reversed_foods = array_reverse($foods);

echo count($foods);

echo "<br>";

foreach ($reversed_foods as $food) {
    echo $food . "<br>";
}

echo "<br>";

foreach ($foods as $food) {
    echo $food . "<br>";
}
