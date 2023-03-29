<?php

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
echo factorial(5);

echo '<br>';

// Функция для поиска числа Фибоначчи, которое мы в нее передаем
function fibonacci($num): int
{
    if ($num == 0) {
        return 0;
    } else if ($num == 1) {
        return 1;
    } else {
        return fibonacci($num - 1) + fibonacci($num - 2);
    }
}

// Вызываем функцию
echo fibonacci(12);