<?php 
 
require_once '../PaymentGateway/Stripe/Transaction.php';  

var_dump(new Transaction(1, 'trans 1'));