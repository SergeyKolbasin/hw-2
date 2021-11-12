<?php
    $title = 'Условия';
    $h4 = 'Оператор if:';
    $a = 1;
    $b = -1;
    $strResult = '';                // строка результата
    if ($a>=0 && $b>=0) {           // $a и $b положительные
        $strResult = '$a и $b положительные, их разность = ' . ($a-$b);
    } elseif ($a<0 && $b<0) {       // $a и $b отрицательные
        $strResult = '$a и $b отрицательные, их произведение = ' . ($a*$b);
    } elseif (($a>=0 && $b<0) || ($a<0 && $b>=0))  {
        $strResult = '$a и $b разных знаков, их сумма = ' . ($a-$b);
    }
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <h4><?= $h4; ?></h4>
    <span>Заданы переменные: <?= "\$a = $a, \$b = $b. "; ?></span>
    <span><?= $strResult; ?></span>
</body>
</html>