<?php

namespace factory_method\factories;

use factory_method\interfaces\AnimalFactoryInterface;
use factory_method\products\Dog;

class DogFactory implements AnimalFactoryInterfacee {
    
    public function createAnimal(string $dogName) {
        return new Dog($dogName);
    }
}