<?php

function line()
{
    echo '<br>';
}

;

echo '1. Sukurti masyvą (piniginę), kurio ilgis yra atsitiktinis nuo 10 iki 30, o reikšmės atsitiktiniai skaičiai nuo 0 iki 10 (pinigai)';
line();

$array = [];
for ($i = 0; $i < rand(10, 30); $i++) {
    $num = rand(0, 10);
    array_push($array, $num);
}
print_r($array);
line();

$array2 = $array;

echo '2. Naudojant ciklą apskaičiuoti masyvo iš 1 uždavinio reikšmių (pinigų esančių piniginėje) sumą';
line();

$sum = 0;
foreach ($array as $item) {
    $sum += $item;
}
print_r($sum);
line();

echo '3. Naudojant ciklą apskaičiuoti masyvo iš 1 uždavinio popierinių pinigų (skaičių didesnių už 2 ) reikšmių sumą';
line();

$sum2 = 0;
foreach ($array as $item) {
    if ($item > 2) {
        $sum2 += $item;
    }
}
print_r($sum2);
line();

//echo '4. Išleisti visus metalinius pinigus (reikšmes, kurios yra mažesnės arba lygios 2 padaryti lygias 0) iš 1 uždavinio';
//line();
//
//foreach ($array as $item) {
//    if ($item <= 2) {
//        $item = 0;
//    }
//}
//print_r($array);
//line();

echo '5. Surasti didžiausią reikšmę 1 uždavinio masyve ir paskaičiuoti kiek tokių didžiausių reikšmių masyve yra';
line();

$max = 0;
$count = 0;
foreach ($array as $item) {
    if ($max < $item) {
        $max = $item;
    }

}

foreach ($array as $item) {
    if ($max === $item) {
        $count++;
    }
}
print_r($max);
line();
print_r($count);
line();

echo '6. Visus masyvo elementus, kurie yra lygūs 0, pakeisti į tų elementų indeksų (vietų, numerių) reikšmes';
line();

for ($i = 0; $i < count($array2); $i++) {
    if ($array2[$i] === 0) {
        $array2[$i] = $i;
    }
}
print_r($array2);
line();

echo '7. Į 1 uždavinio masyvą pridėti tiek naujų reikšmių (pinigų, atsitiktinių skaičių nuo 0 iki 10), kad masyvo ilgis būtų lygiai 30';
line();

$array3 = $array;
while (count($array3) < 30) {
    array_push($array3, rand(0, 10));
}
print_r($array3);
line();

echo '8. Naudojant 1 uždavinio masyvą iš jo reikšmių sukurti dar du papildomus masyvus. Į vieną iš 1 uždavinio masyvo pridėti reikšmes mažesnes arba lygias 2 (monetas), o į kitą didesnes nei 2 (popierinius pinigus)';
line();

$array4 = [];
$array5 = [];
foreach ($array3 as $item) {
    if ($item <= 2) {
        array_push($array4, $item);
    } else {
        array_push($array5, $item);
    }
}
print_r($array4);
line();
print_r($array5);
line();

echo '9. Sukurti masyvą (piniginę su dviem skyreliais) iš dviejų elementų, kurio pirmas elementas būtų masyvas iš 8 uždavinio su monetom, o antras elementas masyvas iš 8 uždavinio su popieriniais pinigais';
line();

$array6 = [];

array_push($array6, $array4);
array_push($array6, $array5);

print_r($array6);
line();

echo '10. Į 9 uždavinio masyvą, piniginę su dviem skyreliais, pridėti trečią skyrelį- masyvą su kortelėm: ["KIKA", "Euro Vaistinė", "Drogas", "Ačiū", "Lietuvos Geležinkeliai", "Mano RIMI"]';
line();

array_push($array6, ["KIKA", "Euro Vaistinė", "Drogas", "Ačiū", "Lietuvos Geležinkeliai", "Mano RIMI"]);
print_r($array6);
line();

echo '11. Korteles skyrelyje sudėlioti (išrūšiuoti) pagal abėcėlę';
line();

array_multisort($array6[2]);
print_r($array6);
line();

echo '12. Į kortelių skyrelį pridėti mokėjimo kortelių "MasterCard", "Visa" (su rand generuokite atsitiktines reikšmes "MasterCard" arba "Visa" ir rašykite į masyvą) iš skirtingų bankų tiek, kad skyrelis (masyvo ilgis) pasidarytų lygus 20';
line();

$bank = ['Visa', 'MasterCard'];

while (count($array6[2]) < 20) {
    array_push($array6[2], $bank[rand(0, 1)]);
}

print_r($array6);
line();

echo '13. Paskaičiuokite, kokio tipo kortelių ("MasterCard" arba "Visa") yra daugiau';
line();

$visa = 0;
$mastercard = 0;
foreach ($array6[2] as $item) {
    if ($item === 'Visa') {
        $visa++;
    } elseif ($item === 'MasterCard') {
        $mastercard++;
    }
}

if ($visa > $mastercard) {
    echo 'Daugiau Visa korteliu';
} elseif ($visa < $mastercard) {
    echo 'Daugiau MasterCard korteliu';
} else {
    echo 'Korteliu skaicius vienodas';
}
line();

echo '14. Sukurkite masyve (piniginėje) ketvirtą elementą (skyrelį) į kurį įdėkite 10 loterijos bilietų, kurių numerius sugeneruokite atsitiktinai su rand funkcija nuo 1000000000 iki 9999999999';
line();

$tickets = [];
for ($i = 0; $i < 10; $i++) {
    array_push($tickets, rand(100000, 999999));
}
array_push($array6, $tickets);
print_r($array6);
line();

echo '15. Loterijos bilietų masyvą išrūšiuoti nuo didžiausio numerio iki mažiausio';
line();

sort($array6[3]);
print_r($array6[3]);
line();

echo '16. Į piniginės popierinių pinigų skyrelį įdėti bent 500 pinigų mažom kupiūrom ( generuoti atsitiktinius skaičius nuo 3 iki 10 ir dėti kaip naujus elementus, kol įdėta suma bus lygi arba viršys 500)';
line();

$sum3 = 0;
while ($sum3 < 500) {
    $banknote = rand(3, 10);
    $sum3 += $banknote;
    array_push($array6[1], $banknote);
}
print_r($array6[1]);
line();

echo '17. Patikrinti ar ką nors laimėjote. Bilieto numerius dalinkite iš 777 ir jeigu numeris išsidalins be liekanos - jūs laimėjote! Suskaičiuokite, kiek buvo laimingų bilietų.';
line();

$win = 0;
foreach ($array6[3] as $item) {
    if ($item % 777 === 0) {
        echo '<br>-----Laimejote-----<br>';
        $win++;
    } else {
        echo 'Bilietas nelaimingas';
    }
}
echo "Laimingu bilietu: $win";
line();

echo "18. Sukurkite penktą skyrelį ir į jį sudėkite nuotraukas: ['šuo', 'katė', 'automobilis', 'namas', 'kiemas'] ir jas išrūšiuokite pagal žodžių ilgį taip, kad pirma eitų trumpiausi žodžiai";
line();

$photo = ['šuo', 'katė', 'automobilis', 'namas', 'kiemas', 'mada'];

usort($photo, function($a, $b){
    return strlen($a) > strlen($b);
});

array_push($array6, $photo);

print_r($array6[4]);