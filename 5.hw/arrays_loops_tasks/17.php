<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>17</title>
<style>
    .select {
        font-weight: 800;
    }
</style>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 13.09.2016
 * Time: 15:05
 */
/*17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
    месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
*/

$arr = array('январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь');

$now_month = 'сентябрь';

foreach ($arr as $item) {
    $p1 = '</span><br>';
    if ($item === $now_month) {
        $p = '<span class="select">' ;
    }
    else{
        $p = '<span>';
    }
    echo $p . $item . $p1;
}