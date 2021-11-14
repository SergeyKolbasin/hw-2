<?php
    $title = 'Факториал';
    $h4 = 'Вычисление n-факториала:';
    $n = 7;                                 // исходное число

    // Рекурсивная функция вычисления n-факториала
    function factorial(
        int $n
    ): int
    {
        if ($n === 0) return 1;
        return ($n * factorial($n -1 ));
    }

    // Вычисление факториала
    if (is_int($n) && $n>=0) {              // если n число целое и больше или равно нулю
        $nFactorial = factorial($n);
    }else{
        $nFactorial = 'исходное число должно быть целым и положительным!';
    }
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<h4><?= $h4 ?></h4>
    <span><?= "$n! = $nFactorial <br>" ?> </span>
</body>
</html>
