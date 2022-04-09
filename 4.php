<?php
/*
 * Задача №4
 *
 * Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2,
 * $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием
 * операции. В зависимости от переданного значения операции выполните одну из
 * арифметических операций (используйте функции из пункта 4) и верните полученное значение (используйте switch).
 *
 * В адресной строке браузера можно вызвать: http://4.php?arg1=3&arg2=-7
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

    // Получение значений аргументов из GET-запроса
    $arg1 = $_GET['arg1'] ?? 0;
    $arg2 = $_GET['arg2'] ?? 0;

    /**
     * Функция вызова математических операций
     * @param   $arg1   number  аргумент мат.операции
     * @param   $arg2   number  аргумент мат.операции
     * @return          string  результат мат.операции
     */
    function mathOperation(
        int     $arg1 = 0,              // аргумент 1
        int     $arg2 = 0,              // аргумент 2
        string  $operation = ''         // математическая операция
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