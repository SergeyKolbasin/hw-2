<?php
    $title = 'Условия';
    $h4 = 'Оператор case:';
    $a = random_int(0, 15);                    // псевдослучайное число
    $strResult = '';                        // результат вычисления
        switch ($a) {
            case 0:
                $strResult .= '0 ';
            case 1:
                $strResult .= '1 ';
            case 2:
                $strResult .= '2 ';
            case 3:
                $strResult .= '3 ';
            case 4:
                $strResult .= '4 ';
            case 5:
                $strResult .= '5 ';
            case 6:
                $strResult .= '6 ';
            case 7:
                $strResult .= '7 ';
            case 8:
                $strResult .= '8 ';
            case 9:
                $strResult .= '9 ';
            case 10:
                $strResult .= '10 ';
            case 11:
                $strResult .= '11 ';
            case 12:
                $strResult .= '12 ';
            case 13:
                $strResult .= '13 ';
            case 14 :
                $strResult .= '14 ';
            case 15:
                $strResult .= '15';
        }
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
    <h4><?= $h4 ?></h4>
    <span>Сгенерирована псевдослучайная переменная: <?= "\$a = $a<br>" ?></span>
    <span><?= "Числа от \$a = $a до 15: $strResult<br>" ?></span>
</body>
</html>