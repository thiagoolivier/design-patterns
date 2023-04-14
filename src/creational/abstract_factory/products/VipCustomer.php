<?php

namespace abstract_factory\products;

use abstract_factory\interfaces\Customer;

class VipCustomer implements Customer {

    private string $name;

    public function __construct($customerName) {
        $this->name = $customerName;
    }

    public function getName():string {
        return $this->name;
    }

    public function sayCategory():void {
        echo "I am from the VIP category.";
    }

}
