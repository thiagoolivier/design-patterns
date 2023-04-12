<?php

namespace factory_method\products;

use factory_method\interfaces\Animal;

class Cat implements Animal
{
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;        
    }
    
    public function makeSound()
    {
        echo "Meow... :3";
    }

    public function sayName() {
        echo "My name is $this->name";
    }
}
