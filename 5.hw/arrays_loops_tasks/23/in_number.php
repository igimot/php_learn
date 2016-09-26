<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 11:38
 */
/*23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
    пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
    2, 3, т. е. 6.
*/
$in_number = $_POST['input_number'];
$array = str_split($in_number);
if (!empty($_POST['input_number'])) {
    if (is_numeric($in_number)) {
        foreach ($array as $value) {
            $item = $value + $value;
        }
        echo 'сумма числа ' . '"' . $in_number . '"' . ' равна ' . $item;
    } else {
        echo '"' . $in_number . '"' . ' - это не число, введите число';
    }
}

