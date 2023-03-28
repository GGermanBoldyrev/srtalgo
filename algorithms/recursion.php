<?php

// Число для поиска фокториала
$factorialOf = 5;

// Функция для поиска факториала числа, которое мы в нее передаем
function factorial($n)
{
    if ($n == 1) {
        return 1;
    } else {
       return 0;
    }
}

// Выводим факториал числа
echo factorial($factorialOf);