<?php

// Массив в котором ищем нужный элемент
$arrayToSearch = [14, 2, 4, 1, 3, 7, 13, 6, 8, 11, 9, 10, 12, 5, 15];
// Искомый элемент
$item = 12;

// Функция линейного поиска
function linearSearch($array, $item) {
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $item) {
            return "Индекс искомого числа - " . $i;
        }
    }
    return "Заданного числа $item нет в массиве.";
}

// Вызываем функцию
echo linearSearch($arrayToSearch, $item);