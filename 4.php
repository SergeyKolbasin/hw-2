<?php
/*
 * Задача №4
 *
 * Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2,
 * $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием
 * операции. В зависимости от переданного значения операции выполните одну из
 * арифметических операций (используйте функции из пункта 4) и верните полученное значение (используйте switch).
 */
    require_once('math.php');   // подключение модуля математических операций
    // константы математических операций
    define("MATH_ADD", '+');
    define("MATH_SUB", '-');
    define("MATH_MUL", '*');
    define("MATH_DIV", '/');

    // заголовки страницы
    $title = 'Математика';
    $h4 = 'Математические операции в одной функции:';

    // аргументы для выполнения математических операций
    $arg1 = 12;
    $arg2 = 5;
/*
    // Функция сложения
    function addFunction($arg1 = 0, $arg2 = 0):string
    {
        return (string)($arg1 + $arg2);
    }

    // Функция вычитания
    function subFunction($arg1 = 0, $arg2 = 0):string
    {
        return (string)($arg1 - $arg2);
    }

    // Функция умножения
    function mulFunction($arg1 = 0, $arg2 = 0):string
    {
        return (string)($arg1 * $arg2);
    }

    // Функция деления
    function divFunction($arg1 = 0, $arg2 = 1):string
    {
        if ($arg2 == 0) {
            return 'Ошибка, на 0 делить нельзя!';
        }
        return (string)($arg1 / $arg2);
    }
*/
    /* Функция, выполняющая четыре математические операции: +, -, * и /
    * $arg1         -   первый операнд
    * $arg2         -   второй операнд
    * $operation    -   математическая операция
    * return        -   результат математической операции типа string
    */
    // Функция математических операций
    function mathOperation(
        $arg1 = 0,
        $arg2 = 0,
        $operation = ''         // математическая операция
    ):string
    {
        switch ($operation) {
            case MATH_ADD:
                return addFunction($arg1, $arg2);
            case MATH_SUB:
                return subFunction($arg1, $arg2);
            case MATH_MUL:
                return mulFunction($arg1, $arg2);
            case MATH_DIV:
                return divFunction($arg1, $arg2);
            default:
                return 'неизвестная операция';
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
    <span>Операнды: <?= "\$arg1 = $arg1, \$arg2 = $arg2 <br><br>" ?> </span>
    <span><?= "Сложение: $arg1 + $arg2 = " . mathOperation($arg1, $arg2, MATH_ADD) . '<br>' ?></span>
    <span><?= "Вычитание: $arg1 - $arg2 = " . mathOperation($arg1, $arg2, MATH_SUB) . '<br>' ?></span>
    <span><?= "Умножение: $arg1 * $arg2 = " . mathOperation($arg1, $arg2, MATH_MUL) . '<br>' ?></span>
    <span><?= "Деление: $arg1 / $arg2 = " . mathOperation($arg1, $arg2, MATH_DIV) . '<br>' ?></span>
</body>
</html>