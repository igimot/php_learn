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
 * Time: 12:14
 */

//3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива.
// Результат запишите переменную $result.
//http://metanit.com/web/php/2.9.php
$array = array(26, 17, 136, 12, 79, 15);


foreach ($array as $nub){
    $result+= $nub * $nub;
    echo 'Квадрат числа ' . $nub . ' равен: ' . $result . '<br>';
}
?>

