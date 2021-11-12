<?php
/*
 * Основные математические функции
 * Все функции возвращают строковый эквивалет результата выполнения операции
 */
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
            return (string)'ошибка, на 0 делить нельзя!';
        }
        return (string)($arg1 / $arg2);
    }
