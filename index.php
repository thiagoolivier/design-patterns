<?php

use iterator\collections\InvoiceCollection;
use iterator\MyIterator;
use iterator\products\Invoice;

require_once 'vendor/autoload.php';

$invoiceCollection = new InvoiceCollection([new Invoice(15), new Invoice(25), new Invoice(50)]);

$myIterator = new MyIterator((array)$invoiceCollection);

var_dump($myIterator);