<?php
//посчитать длину массива
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
print_r (count($arr));
//переместить первые 4 элемента массива в конец массива
$arr_sliced = array_slice($arr, 0, 4);
$arr_temp = array_merge($arr, $arr_sliced);
$arr_new = array_slice($arr_temp, 4, 9);
print_r ($arr_new);
//получить сумму 4,5,6 элемента
$arr_sum = array_slice($arr, 3, 3);
print_r(array_sum($arr_sum));

$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];
//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
print_r (array_diff_key ($secondArr, $firstArr));
//найти все элементы которые присутствую в первом и отсутствуют во втором
print_r(array_diff_key ($firstArr, $secondArr));
//найти все элементы значения которых совпадают
print_r(array_intersect($firstArr, $secondArr));
//найти все элементы значения которых отличаются
print_r(array_diff ($firstArr, $secondArr));

$firstArr1 = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];









