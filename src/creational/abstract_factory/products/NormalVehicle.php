<?php

namespace abstract_factory\products;

use abstract_factory\interfaces\Vehicle;

class NormalVehicle implements Vehicle {

    private string $model;

    public function __contruct($model) {
        $this->model = $model;
    }

    public function getCarModel():string {
        return $this->model;
    }

    public function sayCategory():void {
        echo "Car {$this->model} is from the normal category.";
    }

}