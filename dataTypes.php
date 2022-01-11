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

    <?php

    //////////////// String function //////////////////////
    $text = 'Nullam nec est massa. Cras ut odio in urna condimentum sollicitudin. Etiam vel efficitur erat, eu pulvinar dui. Nunc pulvinar vitae massa id viverra. Cras in erat eu ipsum ornare porttitor. Duis volutpat odio nulla, a elementum augue tempor sagittis.';

    // Simboliu skaiciavimas
    echo 'Sakinio ilgis yra ' . strlen($text) . '---';

    // Zodziu skaiciavimas
    echo 'Zodziu yra' . str_word_count($text). '---';

    // Reverse string
    echo strrev($text) . '---';

    // Word search
    echo strpos($text, 'Cras');
    echo strpos($text, 'Langas');

    var_dump(strpos($text, 'Langas'));
    echo '<br>';

    // Replacing word
    echo str_replace('Nullam', 'Labas', $text) . '<br>';
    echo $text;
    echo '<br>';

    // String to integer or float
    $price = 1.99;
    $priceInt = (int)$price;
    echo $priceInt;
    echo '<br>';

    $height = '187.45';
    $heightInt = (int)$height;
    echo $heightInt;

    echo '<br>';
    $heightFloat = floatval($height);
    echo $heightFloat;
    echo '<br>';

    ///////////Matematika///////////////////
    echo pi();

    echo '<br>';
    echo 'Maziausias skaicius yra ' . min(15, 84, 4, 100) . '<br>';
    echo 'Didziuasias skaicius yra ' . max(15, 84, 4, 100) . '<br>';

    // Saknis
    echo sqrt($price) . '<br>';

    echo abs(-99). '<br>';

    echo round($price) . '<br>';

    echo (rand(0, 10)/getrandmax());

    // Konstanta
    define('ROOT_FOLDER', '/scripts');
    $path = ROOT_FOLDER . '/create';


    ?>

</body>
</html>