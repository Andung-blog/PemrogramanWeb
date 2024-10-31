<?php
namespace CarRentalSystem;

class SUV extends Car {
    private $offroadCapability;

    public function __construct($merk, $model, $offroadCapability) {
        parent::__construct($merk, $model);
        $this->offroadCapability = $offroadCapability;
    }

    public function getInfo() {
        return "SUV - Offroad Capability: {$this->offroadCapability}";
    }
}
