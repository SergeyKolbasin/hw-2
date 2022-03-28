<?php
/**
 * Основные математические операции
 * В адресной строке браузера можно вызвать: http://3.php?a=3&b=-7
 */
    // Заголовки страницы
    $title = 'Математика';
    $h4 = 'Основные математические операции:';

    // Получение значений аргументов из GET-запроса
    $arg1 = $_GET['a'] ?? 0;
    $arg2 = $_GET['b'] ?? 0;

    /**
     * Функция сложения двух аргументов
     * @param   $arg1   number  аргумент мат.операции
     * @param   $arg2   number  аргумент мат.операции
     * @return          string  результат мат.операции
     */
    function addFunction($arg1 = 0, $arg2 = 0)
    {
        return (string)($arg1 + $arg2);
    }

    /**
     * Функция вычитания аргументов
     * @param   $arg1   number  аргумент мат.операции
     * @param   $arg2   number  аргумент мат.операции
     * @return          string  результат мат.операции
     */
    function subFunction($arg1 = 0, $arg2 = 0)
    {
        return (string)($arg1 - $arg2);
    }

    /**
     * Функция умножения аргументов
     * @param   $arg1   number  аргумент мат.операции
     * @param   $arg2   number  аргумент мат.операции
     * @return          string  результат мат.операции
     */
    function mulFunction($arg1 = 0, $arg2 = 0)
    {
        return (string)($arg1 * $arg2);
    }

    /**
     * Функция деления аргументов
     * @param   $arg1   number  аргумент мат.операции
     * @param   $arg2   number  аргумент мат.операции
     * @return          string  результат мат.операции
     */
    function divFunction($arg1 = 0, $arg2 = 1)
        {
            if ($arg2 == 0) {
                return (string)'ошибка, на 0 делить нельзя!';
            }
            return (string)($arg1 / $arg2);
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
    <span><?= "Сложение: $arg1 + $arg2 = " . addFunction($arg1, $arg2) . '<br>' ?></span>
    <span><?= "Вычитание: $arg1 - $arg2 = " . subFunction($arg1, $arg2) . '<br>' ?></span>
    <span><?= "Умножение: $arg1 * $arg2 = " . mulFunction($arg1, $arg2) . '<br>' ?></span>
    <span><?= "Деление: $arg1 / $arg2 = " . divFunction($arg1, $arg2) . '<br>' ?></span>
</body>
</html>