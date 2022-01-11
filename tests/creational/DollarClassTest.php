<?php

use PHPUnit\Framework\TestCase;
use App\Main\Dollar;

class DollarClassTest extends TestCase
{
    public function testPresenceOfDollarClass(){
        $this->assertIsObject(new Dollar);
    }

    public function testDollarClassForAmountAttributte(){
        $this->assertObjectHasAttribute("amount",new Dollar);
    }
}