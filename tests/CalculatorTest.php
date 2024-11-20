<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        // hooa
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3), "Adding 2 and 3 should return 5");
    }

    public function testAdd2()
    {
        $calculator = new Calculator();
        $this->assertEquals(10, $calculator->add(5, 5), "Adding 5 and 5 should return 10.");
    }
}