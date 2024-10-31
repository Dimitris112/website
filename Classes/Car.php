<?php

class Car
{
    // Properties - Fields
    private $brand;
    private $color;
    // private $vehicleType = "car";
    // public $newVehicleType = "cars";

    // Constructor
    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }





    // Getter - Setter methods
    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }


    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $allowedColors = ["red", "blue", "green", "yellow", "black", "white"];
        if (in_array($color, $allowedColors)) {
            $this->color = $color;
        }
    }



    // Method
    public function getCarInfo()
    {
        return "Brand: " . $this->brand . " Color: " . $this->color;
    }
}
