<?php

// Исходный массив который надо отсортировать
$arrayToSort = [14, 2, 4, 1, 3, 7, 13, 6, 8, 11, 9, 10, 12, 5, 15];

// Функция для сортировки массива
function selectionSort($array)
{
    // Итерируемся по всему массиву
    for ($i = 0; $i < count($array); $i++) {
        // Задаем начальынй индекс минимального элемента
        $indexMin = $i;
        // Итерируемся по части ($i + 1), чтобы найти миннимальный индекс
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$indexMin]) {
                $indexMin = $j;
            }
        }
        // Меняем числа местами, минимальное в начало, большее на место минимального
        $temp = $array[$i];
        $array[$i] = $array[$indexMin];
        $array[$indexMin] = $temp;
    }
    // Возвращаем отсортированный массив
    return $array;
}

// Выводим отсортированный массив
echo '<pre>';
print_r(selectionSort($arrayToSort));