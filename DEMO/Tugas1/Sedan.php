<?php
namespace CarRentalSystem;

class Sedan extends Car {
    private $passengerCapacity;

    public function __construct($merk, $model, $passengerCapacity) {
        parent::__construct($merk, $model);
        $this->passengerCapacity = $passengerCapacity;
    }

    public function getInfo() {
        return "Sedan - Capacity: {$this->passengerCapacity} passengers";
    }
}
