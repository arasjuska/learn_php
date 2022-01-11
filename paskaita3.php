<?php

// Task 1 - Color List
$colors = [
    'red',
    'green',
    'blue'
];

// Task 2 - Facts about Countries
$countries = [
    'Lithuania' => 'Vilnius',
    'Italy' => 'Rome',
    'Sweden' => 'Stockholm',
    'Latvia' => 'Riga',
    'Poland' => 'Warsaw',
    'Germany' => 'Berlin'
];

// Task 3 - Average Temperature and five lowest, five highest temperatures
$mothTemp = '78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73';

$tempArray = explode(', ', $mothTemp);
$tempArrayLength = count($tempArray);
$totalTemp = 0;

foreach ($tempArray as $temp) {
    $totalTemp = $temp;
}

$avgTemp = $totalTemp / $tempArrayLength;

sort($tempArray);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Task 1 - Color List</h3>
<ul>
    <?php
    foreach ($colors as $color) {
        echo "<li>$color</li>";
    }
    ?>
</ul>
<h3>Task 2 - Capitals of Counrtries </h3>
<?php

foreach ($countries as $country => $capital) {
    echo "<p> The capital of $country is $capital.</p>";
}

?>
<h3>Task 3 - Average Temperatures</h3>

<?php

echo "<p>Average temperatures is $avgTemp</p>";
echo "<p>Five lowest temperatures are: ";
for ($i = 0; $i < 5; $i++) {
    echo $tempArray[$i];
    if ($i === 4) {
        echo '.</p>';
    } else {
        echo ',';
    }
}
echo "<p>Five higest temperatures are: ";
for ($i = $tempArrayLength - 5; $i < $tempArrayLength; $i++) {
    echo $tempArray[$i];
    if ($i === 4) {
        echo '.</p>';
    } else {
        echo ',';
    }
}
?>

<!--Sukurkite asocijuota masyva su 5 asmenimis ir ju amziumi. Ispausdinkite kiekvieno asmens varda ir jo amziu i html.-->
<!--Suraskite jauniausia ir seniausia asmeni-->
<!--Suraskite amziaus vidurki-->
<!--Padarykite lentele, kur butu Vardas, Amzius ir Gimimo metai. Metai turi buti suskaiciuoti!!!-->

// Praktine uzduotis----------------------
<?php

$users = [
    'Jonas' => 30,
    'Petras' => 20,
    'Janina' => 32,
    'Antanas' => 12,
    'Ona' => 25
];

$allYears = 0;
$counter = 0;
foreach ($users as $name => $age) {
    echo "<p>Lankytojui $name yra $age.</p>";
    $counter++;
    $allYears += $age;
}
$averageAge = $allYears / $counter;
echo "<p>Metu vidurkis yra $averageAge</p>";


asort($users);
foreach ($users as $name => $age) {
       echo "<p>Jauniausias lankytojas yra: $name. Jam yra $age</p>";
       break;
}

arsort($users);
foreach ($users as $name => $age) {
       echo "<p>Vyriausias lankytojas yra: $name. Jam yra $age</p>";
       break;
}

$today = date('Y');
?>


<table>
    <tr>
        <th>Vardas</th>
        <th>Amzius</th>
        <th>Gimimo metai</th>
    </tr>

    <?php
        foreach ($users as $name => $age) {
            $birthday = $today - $age;
            echo "<tr><td>$name</td><td>$age</td><td>$birthday</td></tr>";
        }
    ?>
</table>

</body>
</html>
