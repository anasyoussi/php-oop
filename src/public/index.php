<?php 
 
require_once '../PaymentGateway/Stripe/Transaction.php';  
require_once '../PaymentGateway/Paddle/Transaction.php';  
require_once '../PaymentGateway/Paddle/CustomerProfile.php';  


use PaymentGateway\Paddle\Transaction; 

var_dump(new Transaction());
echo "</br>";
var_dump(new PaymentGateway\Stripe\Transaction());