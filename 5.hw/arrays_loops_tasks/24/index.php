<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>24</title>
    <h3>Программа, считает количество вхождений
        какой­нибуть выбранной вами цифры в выбранном вами числе. <br>Например: цифра 5 в числе
        442158755745 встречается 4 раза.
    </h3>
    <form method="post" action="index.php"><br><br>Введите любое число, минимум 8 символов:
        <input name="input_number" type="text" maxlength="100" size="25" value=""/>
        <br><br>Введите любую цифру введенном рание числе:
        <input name="search_number" type="text" maxlength="1" size="25" value=""/>
        <br><br>
        <input name="push_true" type=submit value="Проверить сколько раз встречается число">
    </form>

<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 13:00
 */
/*24. Вам нужно разработать программу, которая считала бы количество вхождений
    какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
    442158755745 встречается 4 раза.
*/
include "how_many_numbers.php";