<?php

namespace abstract_factory\products;

use abstract_factory\interfaces\Vehicle;

class PremiumVehicle implements Vehicle {

    private string $model;

    public function __contruct($model) {
        $this->model = $model;
    }

    public function getCarModel():string {
        return $this->model;
    }

    public function sayCategory():void {
        echo "Car {$this->model} is from the premium category.";
    }

}