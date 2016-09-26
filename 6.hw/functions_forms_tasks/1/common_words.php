<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 18:46
 */
/* 1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
    Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
*/


function getCommonWords($a, $b)
{

    foreach ($a as $first_text) {
        foreach ($b as $second_text) {
            if ($first_text === $second_text) {

                $new_text_arr[] = $second_text;
            }
        }
    }
    $result_arr = array_unique($new_text_arr);
    return $result_arr;
}