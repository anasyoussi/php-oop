<?php 
declare(strict_types=1);
 
namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction 
{
    
    private string $status = "panding"; 
    public function __construct()
    { 
        $this->setStatus('pending');   
    }

    public function setStatus(string $status): self
    {
        if(!isset(Status::ALL_STATUSES[$status]))
        {
            throw new \InvalidArgumentException('Invalid Status') ;
        }else {
            $this->status = $status; 
        }
        return $this;
    }
}