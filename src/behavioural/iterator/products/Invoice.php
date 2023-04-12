<?php

namespace iterator\products;

class Invoice {

    public string $id;
    public float $amount;

    public function __construct(float $amount) 
    {
        $this->id = random_int(10000, 9999999);
        $this->amount = $amount;
    }

}