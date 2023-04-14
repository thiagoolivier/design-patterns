<?php

namespace iterator;

use Iterator;

class MyIterator implements Iterator
{

    private $collection;

    public function __construct($collection)
    {
        $this->collection = array();
        array_push($this->collection, $collection);
    }

    public function rewind(): void
    {
        reset($this->collection);
    }

    public function valid(): bool
    {
        return current($this->collection) !== false;
    }

    public function key()
    {
        return key($this->collection);
    }

    public function current()
    {
        return current($this->collection);
    }

    public function next(): void
    {
        next($this->collection);
    }

    public function getCollection() {
        return $this->collection;
    }
}
