<?php

use SilverStripe\Dev\SapphireTest;
use MySite\CalculationHelper;

class AddTwoNumbersTest extends SapphireTest
{
    public function testAddingTwoIntegers()
    {
        $numOne = 5;
        $numTwo = 4;
        $this->assertEquals(9, CalculationHelper::addTwoNumbers($numOne, $numTwo));
    }

    public function testAddingTwoFloats()
    {
        $numOne = 5.7;
        $numTwo = 4.4;
        $this->assertEquals(10.1, CalculationHelper::addTwoNumbers($numOne, $numTwo));
    }
}
