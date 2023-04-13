<?php

namespace iterator\collections;

class InvoiceCollection
{
    public array $invoices;

    public function addItem(array $invoice) {
        $this->invoices[] = $invoice; 
    }

    public function getItems() {
        return $this->invoices;
    }

    public function getSize() {
        return sizeof($this->invoices);
    }

}