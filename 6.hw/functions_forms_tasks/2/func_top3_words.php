<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 27.09.2016
 * Time: 9:25
 */
function string_sort($a, $b)
{
    if (strlen($a) < strlen($b)) {
        return 1;
    }
    elseif (strlen($a) == strlen($b)) {
        return 0;
    }
    else {
        return -1;
    }
}

function top3Words($arr)
{
    usort($arr, 'string_sort');
    return array_slice($arr, 0, 3);
}