<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment Calculator</title>
</head>

<body>
    <h1>Investment Calculator</h1>
    <form action="handle_submit.php" method="post">
        <label for="initial-investment">Initial Value</label><br>
        <input type="text" id="initial-investment" name="initial-investment">
        <br>
        <br>
        <label for="monthly-contributions">Monthly Contributions</label><br>
        <input type="text" id="monthly-contributions" name="monthly-contributions">
        <br>
        <br>
        <label for="years">Years to Accrue</label><br>
        <input type="text" id="years" name="years">
        <br>
        <br>
        <label for="percentage">Returns %</label><br>
        <input type="text" id="percentage" name="percentage">
        <br>
        <br>
        <label for="inflation">Inflation Adjustment %</label><br>
        <input type="text" id="inflation" name="inflation">
        <br>
        <br>
        <label for="currency">Currency</label><br>
        <select name="currency">
            <option value="$">$</option>
            <option value="£">£</option>
            <option value="€">€</option>
        </select>
        <br>
        <br>
        <input type="submit">
    </form>
</body>

</html>
