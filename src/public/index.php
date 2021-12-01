<?php 
 
// require_once '../app/PaymentGateway/Stripe/Transaction.php';  
// require_once '../app/PaymentGateway/Paddle/Transaction.php';  
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';  


use App\PaymentGateway\Paddle\Transaction; 

spl_autoload_register(function($class){
    $path = __DIR__ . "/../".lcfirst(str_replace("\\", '/', $class) . ".php") ; 
    if(file_exists($path))
    {
        require $path;  
    }
}); 

var_dump(new Transaction()); 