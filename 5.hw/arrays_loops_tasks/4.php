<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по массивам и циклам</title>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 09.09.2016
 * Time: 21:34
 */
//4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
//помощью второго — столбец элементов.</p>

$arr = array(
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой');

foreach ($arr as $key => $value){
    echo $key . '<br>';
}
foreach ($arr as $key => $value){
    echo $value . '<br>';
}