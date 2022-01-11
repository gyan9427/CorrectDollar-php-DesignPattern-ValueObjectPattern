<?php

namespace App\Main;

class Dollar {

    /**
     * Amount Attribute
     * 
     * @var Float $amount 
     */
    private $amount;

    /**
     * Constructor to assign floating to $amount
     * 
     * @param Float $amount
     */
    public function __construct(Float $amount=0.0){
        $this->amount = $amount;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function add(Dollar $amount){
        return new Dollar($this->amount+$amount->getAmount());        
    }
}
