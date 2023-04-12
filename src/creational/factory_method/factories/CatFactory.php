<?php

namespace factory_method\factories;

use factory_method\interfaces\AnimalFactoryInterface;
use factory_method\products\Cat;

class CatFactory implements AnimalFactoryInterface {
    
    public function createAnimal(string $catName) {
        return new Cat($catName);
    }
}
