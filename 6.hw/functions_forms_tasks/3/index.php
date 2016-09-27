<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3</title>
</head>
<body>
<title>3</title>
<h5> Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.<p>
        Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</h5>
<form method="post" action="index.php">
    <textarea required name="input_text" rows="20" cols="50"
              placeholder="Введите текст, он добавится в файл File.dat для дальнейших манипуляций "></textarea>

    <br><br>
    <input required type="text" name="leng_word" size="48" class="form-control"
           placeholder="Введите длину слова для удаления из текста">
    <br><br>
    <input name="push_true" type=submit value="Показать ;)">

</form>
<form method="post" action="index.php">
    <input name="clear_file_true" type=submit value="Отчистить файл File.dat :(">
</form>


<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 27.09.2016
 * Time: 9:42
 */
/*3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
*/

include "func.php";
viewResult();
clearFile();
