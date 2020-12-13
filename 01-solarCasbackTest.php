<?php

use SilverStripe\Dev\SapphireTest;
use MySite\CalculationHelper;

class calculator extends SapphireTest
{
    public function testAddingThreeNumbers()
    {
        $numOne = userInput of income;
        $numTwo = userInput of bill;
	$numThree = userInput of panels;
        $this->assertEquals(Sum of userInputs, CalculationHelper::addThreeNumbers($numOne, $numTwo, $numThree));
    }

    public function testAddingThreeFloats()
    {
        $numOne = userInput of income;
        $numTwo = userInput of bill;
	$numThree = userInput of panels;
        $this->assertEquals(Sum of userInputs, CalculationHelper::addThreeNumbers($numOne, $numTwo, $numThree));
    }
}
