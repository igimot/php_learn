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
 * Date: 13.09.2016
 * Time: 9:20
 */
/*12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
    меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
    этого (итерации — это количество проходов цикла), и запишите его в переменную $num.
*/
$n = 1000;

for ($q = 0 ; $q <= $n; $q++){
    $num++;
    $n = $n / 2;

    if ($n <= 50){
        echo ' сумма меньше 50 - ' . $n ;
        break;
    }
    else{
        echo $n . '<br>';
    }
}

echo '<br>' . 'количество циклов - ' . $num;
?>