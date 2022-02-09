<?php

echo '<span>---------------------- 21 -------------------</span><br>';
//21. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės
//skaičiai nuo 1 iki 10 ([1,2,3,4,5,6,7,8,9,10]).
$array = [];

for ($i = 0; $i < 100; $i++) {
    $new_array = [];
    for ($j = 1; $j <= 10; $j++) {
        array_push($new_array, $j);
    }
    array_push($array, $new_array);
}
echo '<pre>';
print_r($array);

echo '<span>---------------------- 22 -------------------</span><br>';
//22. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės
//atsitiktiniai skaičiai nuo 1 iki 17.
$array2 = [];

for ($i = 0; $i < 100; $i++) {
    $new_array2 = [];
    for ($j = 0; $j < 10; $j++) {
        array_push($new_array2, rand(1, 17));
    }
    array_push($array2, $new_array2);
}
echo '<pre>';
print_r($array2);

echo '<span>---------------------- 23 -------------------</span><br>';
//23. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki
//18, o reikšmės – skaičiai nuo 1 iki masyvo ilgio.
$array3 = [];

for ($i = 0; $i < 100; $i++) {
    $new_array3 = [];
    for ($j = 1; $j <= rand(5, 18); $j++) {
        array_push($new_array3, $j);
    }
    array_push($array3, $new_array3);
}
echo '<pre>';
print_r($array3);

echo '<span>---------------------- 24 -------------------</span><br>';
//24. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki
//18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 30.
$array4 = [];

for ($i = 0; $i < 100; $i++) {
    $new_array4 = [];
    for ($j = 0; $j < rand(5, 18); $j++) {
        array_push($new_array4, rand(5, 30));
    }
    array_push($array4, $new_array4);
}
echo '<pre>';
print_r($array4);

echo '<span>---------------------- 25 -------------------</span><br>';
//25. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki
//18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti didžiausią skaičių visame didžiajame
//masyve.
$array5 = [];
$max = 0;

for ($i = 0; $i < 100; $i++) {
    $new_array5 = [];
    for ($j = 0; $j < rand(5, 18); $j++) {
        $num = rand(5, 75);
        if ($num > $max) {
            $max = $num;
        }
        array_push($new_array5, rand(5, 75));
    }
    array_push($array5, $new_array5);
}
echo '<pre>';
print_r($array5);
echo "Didziausias skaicius: $max<br>";

echo '<span>---------------------- 26 -------------------</span><br>';
//26. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki
//18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti mažiausią skaičių visame didžiajame
//masyve ir kiek kartų jis pasikartojo.
$array6 = [];
$min = 75;
$min_count = 0;

for ($i = 0; $i < 100; $i++) {
    $new_array6 = [];
    for ($j = 0; $j < rand(5, 18); $j++) {
        $num2 = rand(5, 75);
        if ($num2 < $min) {
            $min = $num2;
        }
        array_push($new_array6, $num2);
    }
    array_push($array6, $new_array6);
}

foreach ($array6 as $array) {
    foreach ($array as $value) {
        if ($value === $min) {
            $min_count++;
        }
    }
}

echo '<pre>';
print_r($array6);
echo "Maziausias skaicius: $min<br>";
echo "Sugeneravo maziausiu skaiciu: $min_count<br>";

echo '<span>---------------------- 27 -------------------</span><br>';
//27. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės
//atsitiktiniai skaičiai nuo 1 iki 17. Išrykiuoti vidinių masyvų reikšmes didėjančia tvarka.
$array7 = [];

for ($i = 0; $i < 100; $i++) {
    $new_array7 = [];
    for ($j = 0; $j < 10; $j++) {
        $num3 = rand(1, 17);
        array_push($new_array7, $num3);
    }
    sort($new_array7);
    array_push($array7, $new_array7);
}

echo '<pre>';
print_r($array7);

echo '<span>---------------------- 28 -------------------</span><br>';
//28. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės
//atsitiktiniai skaičiai nuo 1 iki 17. Perrikiuoti vidinius masyvus pagal vidinių masyvų reikšmių
//sumas didėjančia tvarka.
$array8 = [];

for ($i = 0; $i < 100; $i++) {
    $new_array8 = [];
    for ($j = 0; $j < 10; $j++) {
        $num4 = rand(1, 17);
        array_push($new_array8, $num4);
    }
    array_push($array8, $new_array8);
}

for ($i = 0; $i < count($array8); $i++) {
    for ($j = 0; $j < count($array8); $j++) {
        if (array_sum($array8[$i]) < array_sum($array8[$j])) {
            $temp = $array8[$i];
            $array8[$i] = $array8[$j];
            $array8[$j] = $temp;
        }
    }
}

echo '<pre>';
print_r($array8);

echo '<span>---------------------- 29 -------------------</span><br>';
//29. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės
//atsitiktiniai skaičiai nuo 1 iki 17. Iš dvimačio masyvo sukurti vieną vienmatį masyvą – visas
//dvimačio masyvo masyvų reikšmes perkelti į naują masyvą.
$array9 = [];
$array10 = [];

for ($i = 0; $i < 100; $i++) {
    $new_array9 = [];
    for ($j = 0; $j < 10; $j++) {
        $num5 = rand(1, 17);
        array_push($new_array9, $num5);
    }
    array_push($array9, $new_array9);
}

foreach ($array9 as $array) {
    foreach ($array as $value) {
        array_push($array10, $value);
    }
}

echo '<pre>';
print_r($array9);
print_r($array10);

//30. Papildyti 29 uždavinį taip, kad surastų skaičių vidurkį ir palygintų jį su vidurinia reikšme,
//kuris didesnis. Jei elementų yra nelyginis skaičius, pvz 9, tai vidurinė reikšmė bus 5-as
//elementas, jei elementų yra lyginis skaičius, pvz 8, tai vidurinė reikšmė bus 4-os ir 5-os reikšmės
//aritmetinis vidurkis