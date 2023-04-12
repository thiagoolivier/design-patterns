<?php

namespace criacional\factory_method\products;

use criacional\factory_method\interfaces\Animal;

class Cat implements Animal
{
    public function makeSound()
    {
        echo "Meow!";
    }
}
