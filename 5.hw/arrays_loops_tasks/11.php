<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 13.09.2016
 * Time: 8:50
 */
//11. Выведите столбец четных чисел в промежутке от нуля до 100.

for ($i = 1; $i <= 100 ; $i++){
    $q = $i % 2;
    if ($q != 1){
        echo $i . '<br>';
    }

}
