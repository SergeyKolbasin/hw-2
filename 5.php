<?php
/*
 * Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи
 * встроенных функций PHP.
 */
$title = 'Функции PHP';
$h4 = 'Функции PHP:';
$date = date('d.m.Y');              // Дата
$year = date('Y');                  // Год

?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<h4><?= $h4 ?></h4>
<!-- Контент -->
<p>
    Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Рекламных, текст
    заглавных подзаголовок большой дороге на берегу прямо своих он залетают. Несколько алфавит бросил текст
    взгляд пунктуация то инициал ее скатился. Лучше свою диких букв сбить, языкового ты предложения рекламных
    возвращайся риторический рот домах города они! Знаках от всех рыбного ему осталось эта одна букв пор
    предложения.
</p>
<!-- Подвал -->
<hr>
<span><?= "Дата формирования страницы: $date" ?></span><br>
<span><?= "Год формирования страницы: $year" ?></span><br>
<hr>
</body>
</html>