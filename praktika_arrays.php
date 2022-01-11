<?php

function br()
{
    echo '<br>';
}

//1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su
//reikšmėmis nuo 5 iki 25.
$array1 = [];

for ($i = 0; $i < 10; $i++) {
    $generatedArray = [];
    for ($j = 0; $j < 5; $j++) {
        array_push($generatedArray, rand(5, 25));
    }
    array_push($array1, $generatedArray);
}

print("<pre>" . print_r($array1, true) . "</pre>");

//2. Naudodamiesi 1 uždavinio masyvu:
//a. Suskaičiuokite kiek masyve yra elementų didesnių už 10;
//b. Raskite didžiausio elemento reikšmę;
//c. Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
//d. Visus masyvus “pailginkite” iki 7 elementų;
//e. Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai;

// 2a
$counter = 0;

foreach ($array1 as $oneArray) {
    foreach ($oneArray as $item) {
        if ($item > 10) {
            $counter++;
        }
    }
}

echo $counter;
br();

// 2b

// 2c
$index0 = 0;
$index1 = 0;
$index2 = 0;
$index3 = 0;
$index4 = 0;

foreach ($array1 as $oneArray) {
    foreach ($oneArray as $key => $value) {
        if ($key === 0) {
            $index0 += $value;
        } elseif ($key === 1) {
            $index1 += $value;
        } elseif ($key === 2) {
            $index2 += $value;
        } elseif ($key === 3) {
            $index3 += $value;
        } else {
            $index4 += $value;
        }
    }
}

echo $index0;
br();
echo $index1;
br();
echo $index2;
br();
echo $index3;
br();
echo $index4;
br();

// 2d Visus masyvus “pailginkite” iki 7 elementų;
for ($i = 0; $i < count($array1); $i++) {
    while (count($array1[$i]) < 8) {
        array_push($array1[$i], rand(5, 25));
    }
}

print("<pre> Masyvas su 7 elementais<br>" . print_r($array1, true) . "</pre>");
br();

// 2e
$sumArray = [];

foreach ($array1 as $oneArray) {
    $temp = 0;
    foreach ($oneArray as $value) {
        $temp += $value;
    }
    array_push($sumArray, $temp);
}
print("<pre> Masyvas su suma<br>" . print_r($sumArray, true) . "</pre>");

//3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su
//atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės
//iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
br();
$lettersArray = [];

for ($i = 0; $i < 10; $i++) {
    $randomElementAmount = rand(2, 21);
    $newArray = [];
    for ($j = 0; $j < $randomElementAmount; $j++) {
        array_push($newArray, chr(rand(97, 122)));
    }
    sort($newArray);
    array_push($lettersArray, $newArray);
}

print("<pre> Masyvas su raidem<br>" . print_r($lettersArray, true) . "</pre>");
br();

//4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai
//trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo
//masyvo visai pradžioje.

$counter = 0;
foreach ($lettersArray as $oneArray) {
    $counter = count($oneArray);
}