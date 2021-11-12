<?php
    /*
    * Напишите функцию, которая вычисляет текущее время и возвращает его в формате
    * 21 час 43 минуты и т.д.
    */
    $title = 'Время';
    $h4 = 'Системное время:';
    $strTime = '';              // время в правильном склонении

    //Функция определения правильного склонения русского языка для часов
    //Исходя из постановки задачи гарантированно корректно обрабатывает интервал от 0 до 24 часов
    function decHour($hour = 0):string
    {
        if (($hour == 1) || ($hour == 21)) {
            $hours = 'час';
        }
        elseif ((($hour >= 2) && ($hour <= 4)) || (($hour >= 22) && ($hour <= 24))) {
            $hours = 'часа';
        }
        else {
            $hours = 'часов';
        }
        return $hours;
    }

    //Функция определения правильного склонения русского языка для минут
    //Исходя из постановки задачи гарантированно корректно обрабатывает интервал от 0 до 60 минут
    function decMinute($minute = 0):string
    {
        $remDiv = $minute % 10;
        if (($remDiv == 1) && ($minute != 11)) {
            $minutes = 'минута';
        }
        elseif (($remDiv == 0) || (($remDiv >= 5) && ($remDiv <= 9)) || (($minute >= 11) && ($minute <= 14))) {
            $minutes = 'минут';
        }
        else  {
            $minutes = 'минуты';
        }
        return $minutes;
    }

    //Функция вычисляет текущее время и возвращает его в формате правильного склонения в строковую переменную
    function rightTime():string
    {
        return date('G') . ' ' . decHour(date('G')) . ' ' . date('i') . ' ' . decMinute(date('i'));
    }

    date_default_timezone_set('Asia/Irkutsk');          // установка временной зоны
    $strTime = rightTime();
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
    <h4><?= $h4 ?></h4>
    <span><?= "Текущее системное время $strTime <br>" ?> </span>
</body>
</html>
