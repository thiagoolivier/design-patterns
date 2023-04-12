<?php

namespace criacional\factory_method\products;

use criacional\factory_method\interfaces\Animal;

class Dog implements Animal
{
    public function makeSound()
    {
        echo "Woof Woof!";
    }
}
