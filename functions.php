<?php

function formatMoney($value, $currency)
{
    if ($value < 0) {
        $formattedNegativeValue = number_format($value, 2);
        return "-" . $currency . substr($formattedNegativeValue, 1);
    } else {
        $formattedValue = $currency . number_format($value, 2);
        return $formattedValue;
    }
}

function calculateROI($initialInvestment, $monthlyContributions, $yearsToAccrue, $percentage = 0, $currency, $inflation = 1)
{
    $n = 12;
    $totalMonths = $yearsToAccrue * 12;

    $futureValueInitial = $initialInvestment * pow((1 + $percentage / $n), $totalMonths);

    if ($percentage == 0) {
        $futureValueAnnuity = $monthlyContributions * $totalMonths;
    } else {
        $futureValueAnnuity = $monthlyContributions * ((pow((1 + $percentage / $n), $totalMonths) - 1) / ($percentage / $n));
    }

    $futureValue = $futureValueInitial + $futureValueAnnuity;

    $formattedInitialInvestment = formatMoney($initialInvestment, $currency);
    $formattedMonthlyContributions = formatMoney($monthlyContributions, $currency);

    if ($inflation !== 1) {
        $inflationAdjustedFutureValue = $futureValue / pow((1 + $inflation), $yearsToAccrue);
        $formattedFutureValue = formatMoney($inflationAdjustedFutureValue, $currency);
    } else {
        $formattedFutureValue = formatMoney($futureValue, $currency);
    }

    echo "<br><br>";
    echo "Initial Investment: " . $formattedInitialInvestment . "<br><br>";
    echo "Monthly Contributions: " . $formattedMonthlyContributions . "<br><br>";
    echo "Years to Accrue: " . $yearsToAccrue . "<br><br>";
    echo "Percentage of Return: " . $percentage * 100 . "%" . "<br><br>";
    echo "Future Value: " . $formattedFutureValue;

};

function dd(...$vars)
{
    foreach ($vars as $var) {
        var_dump($var);
    }
    die();
}
