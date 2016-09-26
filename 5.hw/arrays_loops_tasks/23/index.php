<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>23</title>
    <form method="post" action="index.php"><br><br>Введите число, например 123:
        <input name="input_number" type="text" maxlength="20" size="25" value=""/>
        <br><br>
        <input type=submit value="Вычислить сумму введеного числа">
    </form>
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
include "in_number.php";