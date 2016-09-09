<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 09.09.2016
 * Time: 11:47
 */

///<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>

$array1 = array('html', 'css', 'php', 'js', 'jq');

foreach ($array1 as $ar){
    echo $ar . '<br>';
}