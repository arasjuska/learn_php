<?php

// Arrays-------------------------------

$cars = array('BMW', 'Audi', 'Volvo', 'Skoda');
$trees = ['Berzas', 'Liepa', 'Azuolas'];

var_dump($cars);
var_dump($trees);

echo '<br>' . $cars[1];
echo '<br>';

//masyvo ilgis----------------------------------
echo count($trees);

echo '<br>';

// Associative Arrays-------------------------------------
$prices = [
    'Pienas' => 1.99,
    'Duona' => 2.99,
    'Sviestas' => 2.59
];

function br()
{
    echo '<br>';
}

br();

echo 'Pieno kaina: ' . $prices['Pienas'];

// pridedamas naujas elementas i masyva----------------------
$prices['Vanduo'] = 0.99;

// keiciama elemento reiksme masyve--------------------
$prices['Pienas'] = 2.09;

br();

var_dump($prices);

// Multidimensional Arrays---------------------------

// Vardas | Amzius | Miestas
// Petras |   25   | Kaunas
// ...... | ...... | .......

$students = [
    ['Petras', 25, 'Kaunas'],
    ['Jonas', 30, 'Vilnius'],
    ['Janina', 45, 'Kaunas']
];
br();

var_dump($students);

br();

echo $students[0][0] . ' ' . $students[0][2]; // Petras Kaunas
br();
echo $students[1][0] . ' ' . $students[1][1]; // Jonas 30
br();

// Multidimensional Assosiative Arrays-----------------------------

$participants = [
    'Petras' => [
        'amzius' => 25,
        'miestas' => 'Kaunas',
        'kursas' => 'PHP'
    ],
    'Jonas' => [
        'amzius' => 30,
        'miestas' => 'Vilnius',
        'kursas' => 'JAVA'
    ],
    'Janina' => [
        'amzius' => 45,
        'miestas' => 'Kaunas',
        'kursas' => 'PHP'
    ]
];

echo $participants['Petras']['amzius']; // 25
br();
echo $participants['Janina']['kursas']; // PHP
br();

// Loops -------------------------------------------------------------

// while - ciklas vykdomas kol salyga teisinga
// do...while - kodas vykdomas viena karta, ir tada tol kol salyga teisinga
// for - tam tikra skaiciu kartu
// foreach - pakartoja kodo bloka kiekvienam masyvo elementui

// while---------------------------------------------------------
$a = 0;
while ($a < 5) {
    br();
    echo $a;
    $a++;
}
//---------------------------------

br();

// do...while---------------------------------------------------
$b = 20;
do {
    br();
    echo $b;
    $b++;
} while ($b < 15);
//---------------------------------

br();

// for---------------------------------------------------------
$numbers = [];
for ($i = 0; $i < 10; $i++) {
    br();
    echo "Skaitliukas yra: $i";
//    $numbers[$i] = $i; // idedame i masyva
    array_push($numbers, $i); // idedame i masyva (geriau naudot si metoda)
}

br();
var_dump($numbers);
//--------------------------------

br();

//-------------------
for ($row = 0; $row < count($students); $row++) {
    $student = $students[$row];
    for ($col = 0; $col < count($student); $col++) {
        br();
        echo $student[$col];
    }
}

br();

// foreach-----------------------------------------------------
foreach ($cars as $value) {
    echo $value;
    br();
}

foreach ($prices as $key => $value) {
    echo "$key price is $value";
    br();
}

foreach ($participants as $name => $participant) {
    echo $name . ' ' . $participant['amzius'];
    br();
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays and Loops</title>
</head>
<body>
<h3>Arrays and Loops</h3>
<ol>
    <li>Indexed Array -paprastas masyvas</li>
    <li>Associative Array - naudojami 'keys', kuriems priskiriamos reiksmes</li>
    <li>Multidimensional Array - masyvas masyve</li>
</ol>

// Table generation-----------------
<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
        <th>Course</th>
    </tr>
    <?php

    foreach ($participants as $name => $participant) {
        if ($participant['kursas'] === 'PHP') {
            echo '<tr><td>' . $name . '</td><td>' . $participant['amzius'] . '</td><td>' . $participant['miestas'] . '</td><td>' . $participant['kursas'] . '</td></tr>';
        } else {
            unset($participants[$name]);
        }
    }

    ?>
</table>

<?php

br();

print("<pre>" . print_r($participants, true) . "</pre>"); // spausdina graziai masyva

?>

</body>
</html>