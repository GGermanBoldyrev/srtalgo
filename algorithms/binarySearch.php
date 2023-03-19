<?php

// Массив в котором ищем нужный элемент
$arrayToSearch = [14, 2, 4, 1, 3, 7, 13, 6, 8, 11, 9, 10, 12, 5, 15];
// Искомый элемент
$item = 12;

// Функция бинарного поиска
function bunarySearch($array, $item) {
    $center = round(count($array) / 2);
    $start = 0;
    $end = count($array) - 1;
    if ($array[$center] === $item) {
        return $center;
    }
    while ($end > $start) {
        if ($array[$start] === $item) {
            return $start;
        }
        if ($array[$end] === $item) {
            return $end;
        }
        $start += 1;
        $end -= 1;
    }
    return null;
}

// Вызываем функцию
echo bunarySearch($arrayToSearch, $item);