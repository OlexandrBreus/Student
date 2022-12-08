<?php
//Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер
//которого передан параметром во всех вложенных массивах.
function array_func(array $arr, $k = 'null')
{foreach ($arr as $value){
    if (is_array($value)){
        $keys = array_keys($value);
        if (isset($keys[$k])){
            print_r($value[$keys[$k]]);
        }
    }
}
}

//Создать функцию которая считает все буквы b в переданной строке, в случае если передается
//не строка функция должна возвращать false
function str_counter(string $string)
{
    echo substr_count($string, 'b'). '<br>';
}

//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
function arr_counter(array $arr)
{
    $sum = array_sum($arr);
    foreach ($arr as $value){
        if (is_array($value)){
            $sum += array_sum($value);
        }
    }
    echo $sum. '<br>';
}
//Создать функцию которая определит сколько квадратов меньшего размера можно вписать
//в квадрат большего размера размер возвращать в float
function num_sc(float $big, $small)
{
    $num = (intdiv($big, pow($small, 2))) * 4;
    echo $num. '<br>';
}

