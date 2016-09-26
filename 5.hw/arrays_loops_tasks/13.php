<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по массивам и циклам</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td, th {
            padding: 10px;
            border: 1px solid #000000;
        }
    </style>
</head>

<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 13.09.2016
 * Time: 10:44
 */
/*13. Вывести таблицу умножения*/

echo "<table><tr>";
for ($q = 1; $q <= 9; $q++) {
    for ($r = 1; $r <= 10; $r++) {
        if ($r === 1) {
            echo "<td>";
        }
        $sum = $q * $r;
        echo $q . ' * ' . $r . ' = ' . $sum . "<br>";
        if ($r === 10) {
            echo "</td>";
        }
    }
}
echo " </tr></table>";