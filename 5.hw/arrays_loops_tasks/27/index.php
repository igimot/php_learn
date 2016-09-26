<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>27</title>
    <h3>
        Создание таблицы, в которой все ячейки будут иметь цвета, <p>цвет выбран случайным образом из массива и в каждой ячейке находиться случайное число
    </h3>
    <form method="post" action="index.php">
        <br><br>Кол-во строк в таблице. Введите любое число, от 5 до 40:
        <input name="input_number_row" type="text" maxlength="20" size="25" value=""/>
        <br><br>Кол-во столбцов в таблице. Введите любое число, от 5 до 40:
        <input name="input_number_cols" type="text" maxlength="20" size="25" value=""/>
        <br><br>
        <input name="push_true" type=submit value="Создать ;)">
    </form>
<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 17:18
 */
/*27. Создать генератор случайных таблиц. Есть переменные:
$row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
В каждой ячейке должно находиться случайное число. <br><br>
*/
include "rand_table.php";