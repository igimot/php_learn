<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 13:04
 */
/*24. Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза.
*/
$push = $_POST['push_true'];
$in_number = $_POST['input_number'];
$find_number = $_POST['search_number'];
$array = str_split($in_number);
if (!empty($_POST['push_true'])) {
    if (is_numeric($in_number)) {
        if (!empty($_POST['input_number']) && !empty($_POST['search_number'])) {
            $count = count($array);
            if ($count >= 8) {
                $i = 0;
                foreach ($array as $value) {
                    if ($value === $find_number) {
                        $i++;
                    }
                }
                echo '<br>' . 'В введенном числе ' . $in_number . ' цифра ' . $find_number . ' встречается ' . $i . ' раз';
            }
            else {
                echo '<br>' . 'Введенное число не отвечает требованиям, меньше 8 символов. Введите число с 8 символами или более';
            }
        }
        else {
            echo '<br>' . 'Одно или все поля ввода пустые, заполните все поля';
        }
    }
    else {
        echo '<br>' . '"' . $in_number . '"' . ' - это не число, введите число';
    }
}