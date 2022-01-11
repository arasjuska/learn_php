<?php

//1.Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos
//metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų
//amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
//"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

$firstName = 'Jonas';
$lastName = 'Jonaitis';
$birthday = 2000;
$today = 2022;
$age = $today - $birthday;

echo "As esu $firstName $lastName. Man yra $age metu.";

//2.Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand()
//jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš
//mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
echo '<br>';

$number1 = rand(0, 4);
$number2 = rand(0, 4);

if ($number1 === 0 || $number2 === 0) {
    echo 'Vienas arba abu skaiciai yra lygus nuliui';
} elseif ($number1 < $number2) {
    $result = $number2 / $number1;
    echo number_format($result, 2, ',', ' ');
} elseif ($number1 > $number2) {
    $result = $number1 / $number2;
    echo number_format($result, 2, ',', ' ');
} else {
    echo 'Skaiciai yra lygus';
}

//3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand()
//jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį
//turintį vidurinę reikšmę.
echo '<br>';

$number3 = rand(0, 25);
$number4 = rand(0, 25);
$number5 = rand(0, 25);

if (($number3 >= $number4 && $number3 <= $number5) || ($number3 <= $number4 && $number3 >= $number5)) {
    echo $number3;
} elseif (($number4 >= $number3 && $number4 <= $number5) || ($number4 <= $number3 && $number4 >= $number5)) {
    echo $number4;
} elseif (($number5 >= $number3 && $number5 <= $number4) || ($number5 <= $number3 && $number5 >= $number4)) {
    echo $number5;
}

//4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite rand() funkcija nuo 1
//iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą
//atspausdintų.
echo '<br>';

$krastineA = rand(1, 10);
$krastineB = rand(1, 10);
$krastineC = rand(1, 10);

if ($krastineA < ($krastineB + $krastineC)) {
    echo 'Trikampis sudaromas';
} elseif ($krastineB < ($krastineA + $krastineC)) {
    echo 'Trikampis sudaromas';
} elseif ($krastineC < ($krastineA + $krastineB)) {
    echo 'Trikampis sudaromas';
} else {
    echo 'Trikampis negalimas';
}

//5. Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems
//reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui
//masyvo nenaudoti).
echo '<br>';

$number6 = rand(0, 2);
$number7 = rand(0, 2);
$number8 = rand(0, 2);
$number9 = rand(0, 2);



//6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite
//atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
echo '<br>';

$number10 = rand(1, 6);

echo "<h$number10>$number10</h$number10>";

//7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už
//0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.
echo '<br>';

for ($i = 0; $i < 3; $i++) {
    $temp = rand(-10, 10);
    if ($temp < 0) {
        echo "Skaicius $temp yra zalias<br>";
    } elseif ($temp > 0) {
        echo "Skaicius $temp yra melynas<br>";
    } else {
        echo "Skaicius $temp yra raudonas<br>";
    }
}

//8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 %
//nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos
//žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį
//generuokite rand() funkcija nuo 5 iki 3000
echo '<br>';

$quantity = rand(5, 3000);
$price = 1;

if ($quantity * $price <= 1000) {
    $temp = $quantity * $price;
    echo "Zvakiu kiekis: $quantity| Kaina: $temp";
} elseif ($quantity * $price > 1000 && $quantity * $price <= 2000) {
    $discount = ($price * $quantity) / 100 * 3;
    $temp = ($quantity * $price) - $discount;
    echo "Zvakiu kiekis: $quantity| Kaina: $temp";
} else {
    $discount = ($price * $quantity) / 100 * 4;
    $temp = ($quantity * $price) - $discount;
    echo "Zvakiu kiekis: $quantity| Kaina: $temp";
}

//9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki
//100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes,
//kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite.
//Rezultatus apvalinkite iki sveiko skaičiaus.
echo '<br>';

$number11 = rand(0, 100);
$number12 = rand(0, 100);
$number13 = rand(0, 100);



//10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom,
//minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių
//nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko.
//Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

