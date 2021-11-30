<?php 
require_once '../Transaction.php'; 

$transcation1 = new Transaction(100, 'Transaction 1') ; 
$transcation2 = new Transaction(200, 'Transaction 2') ; 

$transcation1->addTax(8)->applyDiscount(10)->getAmount();
$transcation2->addTax(8)->applyDiscount(15)->getAmount();

var_dump($transcation1->getAmount());
echo "</br>";
var_dump($transcation2->getAmount());