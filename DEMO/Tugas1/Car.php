<?php
namespace CarRentalSystem;

abstract class Car {
    protected $merk;
    protected $model;

    public function __construct($merk, $model) {
        $this->merk = $merk;
        $this->model = $model;
    }

    abstract public function getInfo();

    public function getMerk() {
        return $this->merk;
    }

    public function getModel() {
        return $this->model;
    }

    public function __toString() {
        return "{$this->merk} {$this->model}";
    }
}
