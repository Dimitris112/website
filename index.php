<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="POST">
        <label for="x">x:</label>
        <input type="text" name="x"><br>
        <label for="y">y:</label>
        <input type="text" name="y"><br>
        <label for="z">z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form> -->

    <form action="index.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="Calculate">
    </form><br>

</body>
</html>
<?php
// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// $total = null;

// $total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = sqrt($x);
// $total = pow($x, $y);
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = pi();
// $total = rand(1, 6); // like a dice
// echo $total;



$radius = $_POST['radius'];
$circumference = null;
$area = null;
$volume = null;


$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2); // round to 2 decimal

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volune = 4 / 3 * pi() * pow($radius, 3);
$volune = round($volune, 2);

echo"Circumference = {$circumference}cm <br>";
echo"Area = {$area}cm<sup>2</sup> <br>";
echo"Volume = {$volune}cm<sup>3</sup>";
?>