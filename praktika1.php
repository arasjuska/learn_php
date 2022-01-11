<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktika 01 04</title>
</head>
<body>
<?php
$name = 'Jonas';
$city = 'Kaunas';

echo '<p>Mano vardas yra ' . $name . '. As gyvenu ' . $city . '.</p>';
echo "<p>Mano vardas yra $name ir as gyvenu $city.</p>";

$title = 'PHP Practice';
?>

<h1><?php echo $title; ?></h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, quas. <a href="#"><?php echo $title; ?></a></p>

<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ipAddress = $_SERVER['REMOTE_ADDR'];
}

$browser = $_SERVER['HTTP_USER_AGENT'];
?>

<h3><?php echo $ipAddress; ?></h3>
<h3><?php echo $browser; ?></h3>

<?php
print_r(error_get_last());
?>

<h3>Elektros saskaita</h3>

<ul>
    <li>For 50 units - 3.50 eur/unit</li>
    <li>For next 100 units - 4 eur/unit</li>
    <li>For next 100 units - 5.20 eur/unit</li>
    <li>Above 250 units - 6.50 eur/unit</li>
</ul>

<?php

$units = 20;
$result = calculateBill($units);
$resultStr = 'Total amount of ' . $units . '-' . $result . 'eur';

function calculateBill($units)
{
    $firstCost = 3.5;
    $secondCost = 4;
    $thirdCost = 5.2;
    $fourthCost = 6.5;

    if ($units <= 50) {
        $bill = $units * $firstCost;
    } elseif ($units > 50 && $units <= 150) {
        $temp = 50 * $firstCost;
        $remainigUnits = $units - 50;
        $bill = $temp + ($remainigUnits * $secondCost);
    } elseif ($units > 150 && $units <= 250) {
        $temp = (50 * $firstCost) + (100 + $secondCost);
        $remainigUnits = $units - 150;
        $bill = $temp + ($remainigUnits * $thirdCost);
    } else {
        $temp = $temp = (50 * $firstCost) + (100 + $secondCost) + (100 * $thirdCost);
        $remainigUnits = $units - 250;
        $bill = $temp + ($remainigUnits * $fourthCost);
    }

    return number_format((float)$bill, 2, '.', '');
}

;

?>

<p><?php echo $resultStr; ?></p>

<?php

$user = 'Jonas';
$age = 1;

if ($age >= 18) {
    echo '<p>' . $user . ' gali balsuoti' . '</p>';
} else
    echo '<p>' . $user . ' negali balsuoti' . '</p>';
?>


<?php

$word = 'aba';

if ($word === strrev($word)) {
    echo '<p>' . 'Zodis ' . $word . ' yra polidromas' . '</p>';
} else {
    echo '<p>' . 'Zodis ' . $word . ' nera polidromas' . '</p>';
}

?>
</body>
</html>