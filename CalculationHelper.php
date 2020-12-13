<?php

namespace MySite;

class CalculationHelper
{
    public static function addTwoNumbers($numOne, $numTwo)
    {
        return $numOne + $numTwo;
    }

    public static function getCashBack($income, $bill, $solarPanels)
    {
        // basic error checking
        if (!is_numeric($income) || !is_numeric($bill) || !is_numeric($solarPanels)) {
            return 0;
        }

        // at least 1 solar panel to be eligible
        if ($solarPanels < 1) {
            return 0;
        }

        // constants
        $perPanelIncome = 5000;
        $basicAllowableIncome = 50000;
        $minPayment = 500;
        $maxCashback = 400;

        // calculation
        $allowableIncome = $basicAllowableIncome + ($perPanelIncome * ($solarPanels - 1));
        $excessIncome = $income > $basicAllowableIncome ? ($income - $allowableIncome) / 80 : 0;
        $billsAndExcess = (($bill - $minPayment) / 3 ) + $excessIncome;
        $cashback = $bill - $minPayment - $billsAndExcess;
        if ($cashback < 0) {
            return 0;
        }
        if ($cashback > 400) {
            return 400;
        }
        if ($cashback < 400) {
            return round($cashback, 2);
        }
        return round($cashback, 2);
    }
}

