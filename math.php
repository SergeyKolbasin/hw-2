<?php
/*
 * Основные математические функции
 * Все функции возвращают строковый эквивалет результата выполнения операции
 */
/**
 * Функция сложения аргументов
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