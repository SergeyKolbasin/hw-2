<?php
/*
    С помощью рекурсии организуйте функцию возведения числа в степень. Формат:
    function power($val, $pow), где $val – заданное число, $pow – степень.
 */
    $title = 'Рекурсия';
    $h4 = 'Возведение в степень:';
    $value = 2;                         // число
    $power = 3;                         // степень
    $result = power($value, $power);    // результат
    /*
     * Функция возведения числа в степень.
     * $value - число, возводимое в степень
     * $power - степень числа
     * Возвращает число $val, возведенное в степень &pow
     */
    function power($val, $pow)
    {
        if ($pow === 0) {
            return 1;
        }
        if ($pow < 0) {
            return power(1 / $val, -$pow);
        }
        return $val * power($val, $pow - 1);
    }
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
    <h4><?= $h4 ?></h4>
    <span><?php echo "Число $value в степени $power = $result <br>" ?> </span>
</body>
</html>
