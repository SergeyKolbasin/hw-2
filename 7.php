<?php
    /*
    * Напишите функцию, которая вычисляет текущее время и возвращает его в формате
    * 21 час 43 минуты и т.д.
    */

    $title = 'Время';
    $h4 = 'Системное время:';
    $strTime = '';              // время в правильном склонении

    /** Функция определения правильного склонения суффиксов русского языка для чисел
     * @param   int $number
     * @param   string  $suffix1
     * @param   string  $suffix2
     * @param   string  $suffix3
     * @return  string
     */
    //
    function numberSuffix(
            int     $number = 0,    // число, у которого необходимо определить правильный суффикс
            string  $suffix1 = '',  // пример суффикса "час/минута"
            string  $suffix2 = '',  // пример суффикса "часа/минуты"
            string  $suffix3 = ''   // пример суффикса "часов/минут"
    ): string
    {
        // Определение суффиксов, в зависимости от числа
        $remDiv10 = $number % 10;       // остаток от деления на 10
        $remDiv100 = $number % 100;     // остаток от деления на 100

        if ($remDiv100 > 10 && $remDiv100 < 20) {
            return $suffix3;
        } else if ($remDiv10 == 1) {
            return $suffix1;
        }   else if ($remDiv10 > 1 && $remDiv10 < 5) {
            return $suffix2;
        } else {
            return $suffix3;
        }
    }

    date_default_timezone_set('Asia/Irkutsk');          // установка временной зоны
    $strTime = date('G') . ' ' . numberSuffix(date('G'), 'час', 'часа', 'часов') . ' ' .
               date('i') . ' ' . numberSuffix(date('i'), 'минута', 'минуты', 'минут');
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
