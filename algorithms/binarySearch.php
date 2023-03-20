<?php

// Отсортированный массив в котором ищем нужный элемент
$arrayToSearch = [0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
// Искомый элемент
$item = 12;

// Функция бинарного поиска
function binarySearch($array, $item): int
{
    $start = 0;
    $end = count($array) - 1;
    while ($start <= $end) {
        // Для каждой итерации находим центр массива
        $middle = round(($start + $end) / 2);
        // Возвращаем найденное значение если оно находится в центре массива
        if ($item === $array[$middle]) {
            return $middle;
        // Если искомый элемент меньше середины, то сокращаем правую часть
        } else if ($item < $array[$middle]) {
            $end = $middle - 1;
        // Если искомый элемент больше середины, то сокращаем левую часть
        } else {
            $start = $middle + 1;
        }
    }
    return -1;
}

// Вызываем функцию
echo binarySearch($arrayToSearch, $item);