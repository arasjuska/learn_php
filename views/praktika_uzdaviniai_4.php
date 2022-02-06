<?php
function breakline()
{
    echo '<br><br>';
}

echo '31.Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą.<br>';
function function1($text)
{
    echo "<h1>$text</h1>";
}

function1('Sveiki, kaip sekasi?');
breakline();

echo '32.Parašyti funkciją, kuri priima du kintamuosius. Patikrina ar jie yra skaičiai. Grąžina tų skaičių sumą.<br>';
function function2($num1, $num2)
{
    if (is_numeric($num1) && is_numeric($num2)) {
        echo $num1 + $num2;
    }
}

function2(20, 15);
breakline();

echo '33.Parašyti funkciją, kuri priima du kintamuosius. Patikrina ar jie yra skaičiai. Palygina tuos du skaičius ir grąžina rezultatą ar pirmas skaičius yra didesnis, ar antras, ar jie yra lygūs.<br>';
function function3($num1, $num2)
{
    if (is_numeric($num1) && is_numeric($num2)) {
        if ($num1 > $num2) {
            echo "$num1 yra didesnis uz $num2";
        } elseif ($num1 === $num2) {
            echo "Skaiciai $num1 ir $num2 yra lygus";
        } else {
            echo "$num1 yra mazesnis uz $num2";
        }
    }
}

function3(15, 15);
breakline();

echo '34.Parašyti funkciją, kuri priimtų vieną kintamajį. Turi patikrinti ar tai yra skaičiu ir ar tai yra keturženklis skaičius. Turi būti grąžinamas rezultatas ar tie metai yra keliemieji.<br>';

function function4($num1)
{
    if (is_numeric($num1) && $num1 > 0) {
        if (strlen((string)$num1) !== 4) {
            echo "Skaicius $num1 nera keturzenklis";
        } else {
            if ($num1 % 400 === 0 || ($num1 % 100 !== 0 && $num1 % 4 === 0)) {
                echo "Keliamieji metai: $num1";
            } else {
                echo "Nekeliamieji metai: $num1";
            }
        }
    } else {
        echo "Skaicius yra 0 arba mazesnis.";
    }
}

function4(1600);
breakline();

echo '35. Parašyti funkciją, kuri priimtų vieną kintamajį. Turi būti patikrinimas ar tas kintamasis yra skaičius. Funkcija turi grąžinti skaičių, kur įvesto skaičiaus skaitmenys būtų išrikiuoti didėjimo tvarka.<br>';

// Nepadarytas ---------------------------------------------------------

function function5($num1)
{
    if (is_numeric($num1)) {
        $temp_num = strval($num1);
        $array = str_split($temp_num);
        var_dump($array);
    } else {
        echo 'Tai ne skaicius.';
    }
}

function5(5371);
breakline();

echo '36. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių.<br>';

function function6($num1)
{
    if (is_int($num1)) {
        $counter = 0;
        for ($i = 2; $i < $num1; $i++) {
            if ($num1 % $i === 0) {
                $counter++;
            }
        }
        echo "Skaicius dalinasi be liekanos is: $counter skaiciu";
    } else {
        echo 'Ivestas skaicius nera sveikas';
    }
}

function6(12);
breakline();

echo '37.Parašyti funkciją telefonoNumeris, kuri priima vieną kintamąjį. Turi būti patikrinimas, kad kintamasis yra masyvas, kad jo visi elementai yra skaičiai ir, kad jo ilgis yra 10. Funkcija turi grąžinti telefono numerį tokiu formatu - "(XXX) XXX-XXXX".<br>';

function function7($num1)
{
    if (is_array($num1) && count($num1) === 10) {
        foreach ($num1 as $item) {
            if (!is_int($item)) {
                echo "$item ne skaicius. Iveskite tik skaicius.";
                return;
            }
        }
        echo "($num1[0]$num1[1]$num1[2]) $num1[3]$num1[4]$num1[5]-$num1[6]$num1[7]$num1[8]$num1[9]";
    } else {
        echo 'Elementu nera lygiai 10 arba tai ne masyvas.';
    }
}

function7([1, 6, 3, 8, 6, 8, 4, 7, 3, 5]);
breakline();

echo '38. Parašyti funkciją pirminisSkaicius. Funkcija turi vieną kintamąjį. Turi būti patikrinimas, kad kintamasis yra skaičius. Funkcija turi grąžinti ar pateiktas skaičius yra pirminis( pirminis skaičius yra tas, kuris dalinasi tik iš savęs ir tik iš vieneto be liekanos.<br>';

// Nepadarytas ---------------------------------------------------------

function pirminis_skaicius()
{
    //
}

breakline();

echo '39. Parašyti funkciją - lygineSuma. Funkcijos parametrai - du kintamieji. Testų reikalavimai - abu kitamieji turi būti arba skaičiai arba masyvai(negali būti vienas skaičius, kitas masyvas). Jei kintamieji skaičiai, grąžinti skaičių sumą, jei kintamieji masyvai - grąžinti masyvų ilgių sumą. Jei suma nelyginė - grąžinti tekstą, kad suma nelyginė.<br>';

function lygine_suma($num1, $num2)
{
    if (is_int($num1) && is_int($num2)) {
        echo $num1 + $num2;
    } elseif (is_array($num1) && is_array($num2)) {
        if ((count($num1) + count($num2)) % 2 !== 0) {
            echo 'Masyvu ilgiu suma nelygine.';
        } else {
            echo count($num1) + count($num2);
        }
    } else {
        echo 'Elementai ne vienodi.';
    }
}

lygine_suma(9, 3);
breakline();

echo '40. Funkcija turi priimti du kintamuosius. Vienas turi būti skaičius, kitas masyvas su skaičiais ir minimum 7 elementais. Funkcija turi grąžinti true, jei skaičius yra masyve, ir false, jei nėra tokio skaičiaus masyve.<br>';

function function8 ($num1, $array1) {
    if (is_int($num1) && (is_array($array1) && count($array1) > 6)) {
        $counter = 0;
        foreach ($array1 as $item) {
            if ($item === $num1) {
                $counter++;
            }
        }
        if ($counter !== 0) {
            return true;
        } else {
            return false;
        }
    } else {
        echo 'Elementai ivesti neteisingai';
    }
}

function8(6, [8, 9, 5, 6, 5, 8, 9]);