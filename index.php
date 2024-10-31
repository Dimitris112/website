<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require_once 'Classes/Car.php';

    $car1 = new Car("BMW", "blue");
    // echo $car1->newVehicleType;
    // echo $car1->setBrand("Mercedes");
    // echo $car1->getBrand();

    $car1->setColor("red");
    // echo $car1->setColor("dasdasdsa"); wont be accepted since it's not in the list - stay as "blue"
    echo $car1->setColor("black");
    echo $car1->getColor();
    ?>
</body>

</html>