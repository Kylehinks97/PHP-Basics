
<?php

require 'functions.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $initialInvestment = isset($_POST['initial-investment']) ? floatval($_POST['initial-investment']) : null;
    $monthlyContributions = isset($_POST['monthly-contributions']) ? floatval($_POST['monthly-contributions']) : null;
    $yearsToAccrue = isset($_POST['years']) ? intval($_POST['years']) : null;
    $percentage = isset($_POST['percentage']) ? floatval($_POST['percentage']) / 100 : null;
    $currency = isset($_POST['currency']) ? $_POST['currency'] : null;
    $inflation = isset($_POST['inflation']) ? floatval($_POST['inflation']) / 100 : null;


    calculateROI($initialInvestment, $monthlyContributions, $yearsToAccrue, $percentage, $currency, $inflation);
}
