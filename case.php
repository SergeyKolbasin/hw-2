<?php
    $title = 'Условия';
    $h4 = 'Оператор case';
    $a = rand(0, 15);               // псевдослучайное число
    $strResult = '';                // результат вычисления
    switch ($a) {
        case 0:
            $strResult .= '0';
            break;
        case 1:
            $strResult .= '1';
            break;
        case 2:
            $strResult .= '2';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
        case 0:
            $strResult .= '0';
            break;
    }

?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <h4><?= $h4; ?></h4>
    <span>Сгенерирована псевдослучайная переменная: <?= "\$a = $a.<br>"; ?></span>
    <span><?= $strResult; ?></span>
</body>
</html>