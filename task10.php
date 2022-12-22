<?php
// Создать скрипт который генерирует массив с рандомными числами. Длина массива 50 элементов.
for ($i = 0; $i <= 50; $i++){
    $arr[] = rand(0, 100);
}
print_r($arr);
echo '<br>';

// Посчитать сумму элементов массива с помощью функции php и без.
echo array_sum($arr);
echo '<br>';

$sum = 0;
foreach ($arr as $value){
    $sum += $value;
}
echo $sum;
echo '<br>';

//Посчитать произведение элементов массива с помощью функции и без.
echo array_product($arr);
echo '<br>';

$prod = 1;
foreach ($arr as $value){
    $prod = $prod * $value;
}
echo $prod;
echo '<br>';

// Достать минимальное число с массива.
echo min($arr);
echo '<br>';

// Достать максимальное число с массива.
echo max($arr);
echo '<br>';
// Разделить массив на два массива, один будет содержать только четные числа, второй только нечетные.
$arr1 = [];
$arr2 = [];
foreach ($arr as $value){
    if ($value % 2 != 0){
        $arr1[] = $value;
    }else{
        $arr2[] = $value;
    }
}
print_r($arr1);
echo '<br>';
print_r($arr2);

