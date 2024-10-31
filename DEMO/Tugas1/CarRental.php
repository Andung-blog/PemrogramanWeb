<?php
namespace CarRentalSystem;

require_once 'Car.php';
require_once 'Logger.php';

class CarRental {
    use Logger;

    private $cars = [];

    public function addCar(Car $car) {
        $this->cars[] = $car;
        $this->log("Added car: {$car}");
    }

    public function listCars() {
        $carList = [];
        foreach ($this->cars as $car) {
            $carList[] = [
                'type' => get_class($car) === 'CarRentalSystem\\Sedan' ? 'Sedan' : 'SUV',
                'merk' => $car->getMerk(),
                'model' => $car->getModel(),
                'details' => $car->getInfo(),
            ];
        }
        return $carList;
    }
}
