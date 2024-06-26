<?php
class Car {
    public $make;
    public $model;

    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->model = $model;
    }

    public function getCarInfo()
    {
        return "Avtomobil: " . $this->make . " " . $this->model;
    }
}

$car1 = new Car("Toyota", "Corolla \n");
echo $car1->getCarInfo();

$car2 = new Car("Honda", "Civic");
echo $car2->getCarInfo();

?>