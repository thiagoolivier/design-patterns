<?php

namespace abstract_factory\interfaces;

interface AbstractFactory {
    public function __construct($factory, ...$factories);
}