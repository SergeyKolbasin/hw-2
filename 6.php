<?php
/**
 * С помощью рекурсии организуйте функцию возведения числа в степень. Формат:
 * function power($val, $pow), где $val – заданное число, $pow – степень.
 *
 * В адресной строке браузера можно вызвать: http://6.php?v=2&p=3
 */

    /**
     * Функция возведения числа в степень
     *
     * @param   $val    number  число, возводимое в степень
     * @param   $pow    number  степень числа
     * Возвращает число $val, возведенное в степень &pow
     */
    function power($val, $pow)
    {
        if ($pow == 0) {                        // степень = 0
            return 1;
        }
        if ($pow == 1) {                        // степеннь = 1
            return $val;
        }
        if ($pow < 0) {                         // степень < 0
            return power(1 / $val, -$pow);
        }
        return $val * power($val, $pow - 1);    // степень > 0
    }

    $title = 'Рекурсия';
    $h4 = 'Возведение в степень:';

    // Получение значений аргументов из GET-запроса
    $value = $_GET['v'] ?? 0;
    $power = $_GET['p'] ?? 0;

    $result = power($value, $power);    // результат
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
    <h4><?= $h4 ?></h4>
    <span><?= "Число $value в степени $power = $result <br>" ?> </span>
</body>
</html>
