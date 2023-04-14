<?php

namespace factory_method\factories;

use factory_method\interfaces\AnimalFactoryInterface;
use factory_method\products\Dog;

class DogFactory implements AnimalFactoryInterface {
    
    public function createAnimal(string $dogName) {
        return new Dog($dogName);
    }
}