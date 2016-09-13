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
 * Time: 22:08
 */
//6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
//    русские — в массив $ru.
//$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
//    $en = array('green', 'red','blue');
//    $ru = array('зеленый', 'красный', 'голубой');</p>

$arr = array(
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой');
$en = array();
$ru = array();

foreach ($arr as $key => $value){
    array_push($en, $key);
    array_push($ru, $value);
}

