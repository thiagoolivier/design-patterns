<?php

namespace factory_method\interfaces;

interface AnimalFactoryInterface {
    public function createAnimal(string $animalName);
}