<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2</title>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 09.09.2016
 * Time: 11:52
 */
//2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
$array1 = array(1, 20, 15, 17, 24, 35);
echo 'сумму элементов этого массива [ ';
foreach ($array1 as $num){
     $result = $result + $num;
    echo $num . ', ';
};
echo ' ]' . ' = ' . $result;