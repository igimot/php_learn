<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 10.09.2016
 * Time: 16:13
 */
//8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'.

$arr = array(
    1, 2, 3, 4, 5, 6, 7, 8, 9
);
$q = count($arr);

foreach ($arr as $value){
    echo '-' . $value;
    if ($q === $value){
        echo '-';
    }
}
