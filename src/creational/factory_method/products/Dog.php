<?php

namespace factory_method\products;

use factory_method\interfaces\Animal;

class Dog implements Animal
{
    private string $name;
    
    public function __construct(string $name) {
        $this->name = $name;        
    }

    public function makeSound()
    {
        echo "Woof Woof!";
    }

    public function sayName()
    {
        echo "My name is $this->name";
    }
}
