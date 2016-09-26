<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>25</title>
    <h3>
        Создадим масив, наполним его случайными значениями, найдем максимальное и минимальное значение, а потом поменяем их местами
    </h3>
    <form method="post" action="index.php"><br><br>Ёмкость масива. Введите любое число, от 10 до 30:
        <input name="input_number_arr" type="text" maxlength="20" size="25" value=""/>
        <input name="push_true" type=submit value="Создать ;)">
    </form>
<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 14:07
 */
/*25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
        найти максимальное и минимальное значение и поменять их местами.
*/
include "gen_arr_numb.php";