<?php

require_once 'vendor/autoload.php';

use Products\Human;
use Products\Dog;

$thiago = new Human();
$thiago->makeSound();

echo PHP_EOL;

$dog = new Dog();
$dog->makeSound();