<?php

// Массив в котором ищем нужный элемент     c
$arrayToSearch = [14, 2, 4, 1, 3, 7, 13, 6, 8, 11, 9, 10, 12, 5, 15, 16];
// Искомый элемент
$item = 11;

// Функция бинарного поиска
function bunarySearch($array, $item) {
    $count = 0;
    // Задаем координаты начала, конца и середины массива
    $start = 0;
    $end = count($array) - 1;
    $center = round(count($array) / 2, 0, PHP_ROUND_HALF_DOWN);
    // Если число находится в середине, возращаем
    if ($array[$center] === $item) {
        $count++;
        return $center . ' ' . $count;
    }
    // Проходимся по массиву до тех пор, пока не дойдем до середины
    while ($end > $start) {
        $count++;
        // Если числа в итерации совпадают с искомым числом, то возвращвем позицию элемента
        if ($array[$start] === $item) {
            return $start . ' ' . $count;
        } elseif ($array[$end] === $item) {
            return $end . ' ' . $count;
        }
        $start += 1;
        $end -= 1;
    }
    // Если числа в массиве не оказалось, возвращаем
    return $item . "net v massive";
}

// Вызываем функцию
echo bunarySearch($arrayToSearch, $item);