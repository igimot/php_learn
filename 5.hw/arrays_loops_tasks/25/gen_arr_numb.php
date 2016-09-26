<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 14:08
 */

$push = $_POST['push_true'];
$number_arr = $_POST['input_number_arr'];
if (!empty($_POST['push_true'])) {
    if (is_numeric($number_arr)) {
        if ($number_arr >= 10 && $number_arr <= 30) {
            while ($i < $number_arr) {
                $i++;
                $arr[] = rand();
            }
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
            echo '<br>';
            $max_arr = max($arr);
            $min_arr = min($arr);
            foreach ($arr as $value => $item) {
                if ($item === $max_arr) {
                    $key_max = $value;
                }
                if ($item === $min_arr) {
                    $key_min = $value;
                }
            }
            echo 'Минимальное число = ' . $min_arr . ' - с ключом ' . $key_min . '<br>' .
                'Максимальное число = ' . $max_arr . ' - с ключом ' . $key_max;
            $buf = $arr[$key_min];
            $arr[$key_min] = $arr[$key_max];
            $arr[$key_max] = $buf;
            echo '<br><br>' . 'Меняем их местами' . '<br>';
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        }
        else {
            echo '<br>' . 'Вы ввели число вне указанного диапазона от 10 до 30' . '<br>' . 'Попробуйте еще раз';
        }
    }
    else {
        echo '<br>' . '"' . $number_arr . '"' . ' - это не число, введите число';
    }
}