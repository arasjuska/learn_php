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

// Data
echo date('Y-m-d');
echo('<br>');
echo date('l');
echo('<br>');
echo date('Y');
echo('<br>');
echo date('m');
echo('<br>');
echo date('d');
echo('<br>');

// Laikas
echo date('H:i:s');
echo('<br>');
echo date('h:i:sa');
echo('<br>');

// String to time
$birthday = '1999/01/01';
$birthdayDate = strtotime($birthday);
//var_dump($birthdayDate);
echo date('Y-m-d', $birthdayDate);
echo('<br>');

$tomorrow = strtotime('tomorrow');
echo date('Y-m-d', $tomorrow);
echo('<br>');

$dateFormat = 'Y-m-d';
$today = date($dateFormat);
$christmas = strtotime('2022-12-25');
echo ($christmas - strtotime($today)) / (60 * 60 * 24);
echo('<br>');



?>

<!--    Dinaminis tinklapio copywrite-->
<p>&copy; <?php echo date('Y'); ?></p>
</body>
</html>