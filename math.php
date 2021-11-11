<?php
    // Заголовки страницы
    $title = 'Математика';
    $h4 = 'Основные математические операции:';
    // Аргументы для выполнения математических операций
    $arg1 = 12;
    $arg2 = 1.5;
    // Функция сложения
    function addFunction($arg1 = 0, $arg2 = 0)
    {
        return (string)($arg1 + $arg2);
    }
    // Функция вычитания
    function subFunction($arg1 = 0, $arg2 = 0)
    {
        return (string)($arg1 - $arg2);
    }
    // Функция умножения
    function mulFunction($arg1 = 0, $arg2 = 0)
    {
        return (string)($arg1 * $arg2);
    }
    // Функция деления
    function divFunction($arg1 = 0, $arg2 = 1)
    {
        if ($arg2 == 0) {
            return (string)'Ошибка, на 0 делить нельзя!';
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