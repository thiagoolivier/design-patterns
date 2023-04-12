<?php

namespace iterator;

use iterator\collections\InvoiceCollection;
use iterator\interfaces\MyIteratorProtocol;

class MyIterator implements MyIteratorProtocol
{

    private array $collections;

    public function __construct(array $collection)
    {
        $this->collections[] = $collection;
    }

    public function reset(): void
    {
        reset($this->collections);
    }

    public function rewind(): void
    {
        reset($this->collections);
    }

    public function valid(): bool
    {
        return current($this->collections) !== false;
    }

    public function key()
    {
        return key($this->collections);
    }

    public function current()
    {

        return current($this->collections);

    }

    public function next(): void
    {

        next($this->collections);

    }
}
