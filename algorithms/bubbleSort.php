<?php

// Исходный массив который надо отсортировать
$arrayToSort = [1, 3, 2, 5, 4, 12, 10];

// Выводим изначальный массив
echo '<pre>';
print_r($arrayToSort);

// Функция для фортировки массива
function bubbleSort($array)
{
    for ($j = count($array) - 1; $j > 0; $j--) {
        for ($i = 0; $i < $j; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $temp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $temp;
            }
        }
    }
    return $array;
}

// Присваиваем переменной функцию, которая сразу же и вызовется
$sortedArray = bubbleSort($arrayToSort);

// Выводим отсортированный массив
print_r($sortedArray);