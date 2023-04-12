<?php

namespace iterator\collections;

class InvoiceCollection
{
    public array $invoices;

    public function __construct(array $invoice)
    {
        $this->invoices[] = $invoice; 
    }
}