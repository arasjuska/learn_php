<?php

function breakline()
{
    echo '<br><br>';
}

echo '41. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Išvestų
tekstą į ekraną „<p>“ tag‘e.<br>';

function function1($var1)
{
    if (is_string($var1)) {
        echo "<p>$var1</p>";
    }
}

function1('Funkcija 1');
breakline();

echo '42. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Funkcija turi išvesti tekstą į ekraną ir dar papildomai parodyti jo ilgį.<br>';

function function2($var2)
{
    if (is_string($var2)) {
        $counter = strlen($var2);
        echo "<p>$var2 yra tokio ilgio $counter</p>";
    }
}

function2('Funkcija 2');
breakline();

echo '43. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Jei teksto ilgis lyginis – tekstą išvestų žalios spalvos, jei nelyginis – mėlynos.<br>';

function function3($var3)
{
    if (is_string($var3)) {
        $counter = strlen($var3);
        if ($counter % 2 === 0) {
            $color = 'red';
        } else {
            $color = 'blue';
        }
        echo "<p style='color: $color'>$var3</p>";
    }
}

function3('Funkcija 3');
breakline();

echo '44. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Funkcija turi atspausdinti tekstą, kur mažosios raidės pakeistos į didžiasias ir atvirkščiai.<br>';

function function4($var4)
{
    if (is_string($var4)) {
        $str = strtoupper($var4);
        $str = lcfirst($str);
        echo "<p>$str</p>";
    }
}

function4('Funkcija 4');
breakline();

echo '45. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Jei kintamasis yra tekstas, jo ilgis turi būti daugiau, kaip 20 simbolių. Suskaičiuoti, kiek tekste yra ‚a‘ raidžių.<br>';

function function5($var5)
{
    if (is_string($var5) && strlen($var5) > 20) {
        foreach (count_chars($var5, 1) as $i => $val) {
            if (chr($i) === 'a')
                echo "\"", chr($i), "\" pasikartoja $val kartu.\n";
        }
    } else {
        echo 'Ne tekstas arba nera didesnis nei 20 simboliu.';
    }
}

function5('123456789012345678aaa');
breakline();

echo '46. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Suskaičiuoti kiek tekste yra mažųjų ir kiek didžiųjų raidžių.<br>';

function function6($var6)
{
    if (is_string($var6)) {
        $upper = preg_match_all("/[A-Z]/", $var6);
        $lower = preg_match_all("/[a-z]/", $var6);
        echo "<p>Didziosios: $upper | Mazosios: $lower</p>";
    }
}

function6('Funkcija 6');
breakline();

echo '47. Parašyti funkciją, kuri priimtų du kintamuosius. Atliktų testą ar kintamieji yra tekstai. Palyginti kuris tekstas yra ilgesnis.<br>';

function function7($var7, $var72) {
    if (is_string($var7) && is_string($var72)) {
        if (strlen($var7) > strlen($var72)) {
            echo "$var7 yra ilgesnis";
        } elseif (strlen($var7) === strlen($var72)) {
            echo 'Stringai yra lygus';
        } else {
            echo "$var7 yra trumpesnis";
        }
    }
}

function7('aaaa', 'aaa');
breakline();

echo '48. Parašyti funkciją, kuri priimtų du kintamuosius. Atliktų testą ar kintamieji yra tekstai. Palyginti kuris tekstas yra turi daugiau didžiųjų raidžių.<br>';

function function8($var1, $var2) {
    if (is_string($var1) && is_string($var2)) {
        if (preg_match_all("/[A-Z]/", $var1) > preg_match_all("/[A-Z]/", $var2)) {
            echo "$var1 turi daugiau didziuju raidziu";
        } elseif (preg_match_all("/[A-Z]/", $var1) === preg_match_all("/[A-Z]/", $var2)) {
            echo 'Didziuju raidziu po lygiai';
        } else {
            echo "$var1 turi maziau didziuju raidziu";
        }
    }
}

function8('Go', 'GG');
breakline();

echo '49. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Funckija turi grąžinti tekstą, kur žodžiai būtų sukeisti vietomis, tai yra pirmas žodis taptų paskutinis, antras – priešpaskutinis ir t.t. Pačių žodžių keisti nereikia.<br>';
echo '---------------------------TODO----------------------------<br>';

function function9($var1) {
    if (is_string($var1)) {
        $temp=substr($var1, 0, strlen($var1));
        echo $temp;
    }
}

function9('kas kodel');
breakline();

echo '50. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Kiekvienam simboliui sugeneruoti atsitiktinę spalvą ir atvaizduoti pagražintą spalvotą tekstą.<br>';
echo '---------------------------TODO----------------------------<br>';


function function10($var1) {
    if (is_string($var1)) {
        foreach (count_chars($var1, 1) as $i => $value) {
            $color = '#' . rand(000000, 999999);
            $temp = chr($i);
           echo "<span style='color: $color'>$temp</span>";
        }
    }
}

function10('grazu');

?>