<style>
    table {
        border-collapse: collapse;
    }
    td, tr {
        padding: 10px;
        border: 3px solid #FFFFFF;
    }
</style>
<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 17:19
 */
/*27. Создать генератор случайных таблиц. Есть переменные:
$row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
В каждой ячейке должно находиться случайное число. <br><br>
*/
$push = $_POST['push_true'];
$number_row = $_POST['input_number_row'];
$number_cols = $_POST['input_number_cols'];
$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');
$count = count($colors) - 1;
if (!empty($_POST['push_true'])) {
    if (empty($_POST['input_number_row'])){
        echo '<br>' . 'Поле "Кол-во строк в таблице" пустое. Пожалуйста введите число';
    }
    if (empty($_POST['input_number_cols'])){
        echo '<br>' . 'Поле "Кол-во столбцов в таблице" пустое. Пожалуйста введите число';
    }
    if (is_numeric($number_row) && is_numeric($number_cols)) {
        if (($number_row >= 5 && $number_row <= 40) && ($number_cols >= 5 && $number_cols <= 40)) {
            echo "<table>";
            for ($q = 1; $q <= $number_cols; $q++) {
                echo '<tr>';
                for ($r = 1; $r <= $number_row; $r++) {
                    $max_random_color = rand(0, $count);
                    $sum = rand();
                    $color = $colors[$max_random_color];
                    echo "<td style='background-color:" . $color . "'>" . $sum . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        else {
            echo '<br>' . 'Вы ввели число вне указанного диапазона от 5 до 40' . '<br>' . 'Попробуйте еще раз';
        }
    }
    else {
        if (!empty($_POST['input_number_row'])) {
            if (!is_numeric($number_row)) {
                echo '<br>' . '"' . $number_row . '"' . ' - это не число, введите число' . '<br>' . 'Попробуйте еще раз';
            }
        }
        if (!empty($_POST['input_number_cols'])) {
            if (!is_numeric($number_cols)) {
                echo '<br>' . '"' . $number_cols . '"' . ' - это не число, введите число' . '<br>' . 'Попробуйте еще раз';
            }
        }
    }
}
