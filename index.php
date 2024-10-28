<?php
$name = "Dimitris";
$food = "pizza";
$email = "dimitris@me.com";

$age = 28;
$price = 4.50;
$quantity = 3;

$online = true;
$employed = false;
// true = 1  - false = nothing / empty

$total = null;

echo "Hey {$name}!<br>";
echo" I like {$food}!<br>";
echo" My email is {$email}!<br>";

echo" I am {$age} years old!<br>";
echo" Price for a pizza slice is \${$price}!<br>";

echo" Online status: {$online}<br>";
echo" Employed status: {$employed}<br>";



echo" Ordered {$quantity} slices of {$food}";
$total = $price * $quantity;
echo" for a total of \${$total}!<br>";

?>
