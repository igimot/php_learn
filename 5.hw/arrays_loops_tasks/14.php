<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>14</title>
</head>

<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 13.09.2016
 * Time: 11:43
 */
/*14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
    проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
    выведите на экран 'Есть!', иначе выведите 'Нет!'.
*/
echo '<p>Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
    проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
    выведите на экран \'Есть!\', иначе выведите \'Нет!\'.</p>';
$arr = array(4, 2, 5, 19, 13, 0, 10);
$arr1 = array(2, 3, 4);
$arr1_count = count($arr1);
$a = 0;
///                                 !!!не доделана!!!
/*
 * foreach ($arr as $item){
    foreach ($arr1 as $e){
        if( $item == $e){

            echo  $item . ' Есть! ' . '<br>';

        }
    }
    echo $item . ' Нет ' . '<br>';

}
*/
foreach ($arr as $item){
    for ($i = 0; $i <= $arr1_count; $i++){
        $e = $arr1[$i];
        if ($item == $e) {
            echo $item . ' Есть! ' . '<br>';
        }
        else{
            echo $item . ' Нет ' . '<br>';
        }
    }



}