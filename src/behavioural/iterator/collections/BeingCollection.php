<?php

namespace iterator\collections;

use iterator\interfaces\Collection;

class BeingCollection implements Collection {

    private $beings;

    public function __construct() {
        $this->beings = array();
    }

    public function addItem($item) {
        array_push($this->beings, $item);
    }
    public function removeLastItem() {
        array_pop($this->beings);
    }

    public function getBeings() {
        return $this->beings;
    }

}