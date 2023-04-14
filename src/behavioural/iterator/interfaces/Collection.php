<?php

namespace iterator\interfaces;

interface Collection {
    public function addItem($item);
    public function removeLastItem();
}