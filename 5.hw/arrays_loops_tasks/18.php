<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>18</title>
    <style>
        .holyday {
            font-weight: 800;
        }
    </style>

<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 13.09.2016
 * Time: 16:51
 */

/*18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
    выходные дни следует вывести жирным.
*/

$arr = array(
    'понедельник',
    'вторник',
    'среда',
    'четверг',
    'пятница',
    'суббота',
    'воскресенье');


foreach ($arr as $item => $value) {
    $p1 = '</span><br>';
    if ($item === 5 || $item === 6 ) {
        $p = '<span class="holyday">' ;
    }
    else{
        $p = '<span>';
    }
    echo $p . $value . $p1;
}