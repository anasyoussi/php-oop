<?php 
declare(strict_types=1);
 
class Transaction 
{
    private float $amount; 
    private string $description ; 
    private ?Customer $customer = null; 

    public function __construct(
        float $amount, 
        string $description
    )
    {
        $this->amount = $amount;
        $this->description = $description; 
    } 
    public function getCustomer(): ?Customer 
    {
        return $this->cutomer; 
    }
}