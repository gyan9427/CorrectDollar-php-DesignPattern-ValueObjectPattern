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

    public function testAmountHasBeenInitialisedToZeroAmount(){
        $dollar = new Dollar;
        $this->assertIsFloat($dollar->getAmount());
        $this->assertEquals(0.0,$dollar->getAmount());
    }

    public function testDollarMustHaveAddMethod(){
        $dollarMock = $this->createMock(Dollar::class);
        $dollarMock->method('add')
            ->willReturn(true);
        
        $this->assertTrue($dollarMock->add(new Dollar(200)));
    }

    public function testAddMethodMustAddToTheAmountAttribute(){
        $dollar = new Dollar;
        $add_dollar = $dollar->add(new Dollar(200));
        $this->assertEquals(200,$add_dollar->getAmount());
        $add_dollar = $add_dollar->add(new Dollar(400));
        $this->assertEquals(600,$add_dollar->getAmount());
    }
}
