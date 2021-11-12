<?php
    $title = 'Условия';
    $h4 = 'Оператор case:';
    $a = random_int(0, 15);                    // псевдослучайное число
    $strResult = '';                        // результат вычисления
    for ($i=$a; $i<=15; $i++) {
        switch ($i) {
            case 0:
                $strResult .= '0 ';
                break;
            case 1:
                $strResult .= '1 ';
                break;
            case 2:
                $strResult .= '2 ';
                break;
            case 3:
                $strResult .= '3 ';
                break;
            case 4:
                $strResult .= '4 ';
                break;
            case 5:
                $strResult .= '5 ';
                break;
            case 6:
                $strResult .= '6 ';
                break;
            case 7:
                $strResult .= '7 ';
                break;
            case 8:
                $strResult .= '8 ';
                break;
            case 9:
                $strResult .= '9 ';
                break;
            case 10:
                $strResult .= '10 ';
                break;
            case 11:
                $strResult .= '11 ';
                break;
            case 12:
                $strResult .= '12 ';
                break;
            case 13:
                $strResult .= '13 ';
                break;
            case 14 :
                $strResult .= '14 ';
                break;
            case 15:
                $strResult .= '15';
                break;
            default:
                $strResult = 'Извините, но что-то пошло не так!';
        }
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