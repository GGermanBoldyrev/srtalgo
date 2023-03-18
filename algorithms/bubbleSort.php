<?php

// Исходный массив который надо отсортировать
$arrayToSort = [14, 2, 4, 1, 3, 7, 13, 6, 8, 11, 9, 10, 12, 5, 15];

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