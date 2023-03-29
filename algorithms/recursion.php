<?php

// Число для поиска фокториала
$number = 5;

// Функция для поиска факториала числа, которое мы в нее передаем
function factorial($n): int
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Выводим факториал числа
echo factorial($number);