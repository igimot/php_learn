<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 13.09.2016
 * Time: 14:45
 */
/*15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
    элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
    5, 19, 13, 0, 10.
*/
$arr = array(4, 2,
    5, 19, 13, 0, 10);

foreach ($arr as $item){
    $q ++;
}
echo $q;