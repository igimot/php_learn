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
 * Time: 22:17
 * 7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>
 */
$arr = array(
    2, 5, 9, 15, 0, 4
);

foreach ($arr as $value){
    if ($value > 3 && $value < 10){
        echo $value . ', ';
    }
}