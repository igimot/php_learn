<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>17</title>
    <style>
        .day_select {
            font-style: italic;
        }
    </style>
</head>

<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 13.09.2016
 * Time: 16:59
 */
/*19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
    текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
*/

$arr = array(
    'понедельник',
    'вторник',
    'среда',
    'четверг',
    'пятница',
    'суббота',
    'воскресенье');

$day = 'вторник';

foreach ($arr as $item) {
    $p1 = '</span><br>';
    if ($item == $day) {
        $p = '<span class="day_select">';
    }
    else {
        $p = '<span>';
    }
    echo $p . $item . $p1;
}