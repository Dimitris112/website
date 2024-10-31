<?php

class Car
{
    // protected - can be accessed in child classes
    // private - can be accessed in the same class
    // public - can be accessed anywhere

    // Properties - Methods - Fields
    private $brand;
    private $color;
    private $vehicleType = "car";

    public $vehicleNewType = "car";
    public $brandNew;

    // Constructor "method" - called when the object is created
    public function __construct($brand, $color = "none") // none as default value - placeholder
    {
        // $this - refers to the current object - like "this" in js / "self" in python
        // this.brand = brand; in js
        // self.brand = brand in python

        $this->brand = $brand;
        $this->color = $color;
    }
}

$car1 = new Car("Opel"); // takes default value "none" for color
$car2 = new Car("Volvo", "red");

$car3  = new Car("Porsche", "blue");
echo $car3->vehicleNewType; // shows "car"
echo $car3->brandNew; // shows "Porsche"
