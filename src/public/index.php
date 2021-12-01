<?php 
 
require __DIR__ . '/../vendor/autoload.php';

// use App\PaymentGateway\Paddle\Transaction; 

$paddleTransaction = new \App\PaymentGateway\Paddle\Transaction() ;

// $id = new \Ramsey\Uuid\UuidFactory();  

// echo $id->uuid4();

var_dump($paddleTransaction); 