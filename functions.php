<?php

/* Составьте функцию вычисления дискриминанта квадратного уравнения.
Используя эту функцию, напишите программу, которая решает квадратное уравнение. Оформите красивый вывод решения. */
function discriminant(int $a, int $b, int $c)
{
    return $disc = $b**2 - (4* $a * $c);
}

/* Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь угадать по имени
(null - если угадать не удалось). Вам придется самостоятельно найти нужные вам строковые функции. */
function getGuessGender(string $name)
{
    $lastWord = mb_substr($name, -1);

    if('Саша' == $name || 'Женя' == $name){
        return null;
    }elseif ('Кристи' == $name || 'Гали' == $name){
        return 'Вы указали имя ' . $name . ' и ваш пол женский';
    }elseif ('а' == $lastWord || 'я' == $lastWord){
        return 'Вы указали имя ' . $name . ' и ваш пол женский';
    }

    switch (true){
        case 'й' == $lastWord:
            return 'Вы указали имя ' . $name . ' и ваш пол мужской';
            break;
        case 'н' == $lastWord:
            return 'Вы указали имя ' . $name . ' и ваш пол мужской';
            break;
        case 'л' == $lastWord:
            return 'Вы указали имя ' . $name . ' и ваш пол мужской';
            break;
        case 'т' == $lastWord:
            return 'Вы указали имя ' . $name . ' и ваш пол мужской';
            break;
        case 'ь' == $lastWord:
            return 'Вы указали имя ' . $name . ' и ваш пол мужской';
            break;
        case 'р' == $lastWord:
            return 'Вы указали имя ' . $name . ' и ваш пол мужской';
            break;
        case 'с' == $lastWord:
            return 'Вы указали имя ' . $name . ' и ваш пол мужской';
            break;
        default:
            return null;
            break;
    }
}


/* Функция получения массива картинок */

function getGallery()
{
    return [
        1 => 'php.jpg',
        2 => 'css.jpg',
        3 => 'html.jpg',
    ];
}