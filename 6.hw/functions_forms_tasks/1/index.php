<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1</title>
    <h3>
        1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые
        есть и в первом и во втором поле ввода.<br>
        Реализацию этой логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с
        общими словами.
    </h3>
    <h5> Введите в поля любой текст, можно большой. Программа выводит повторяющиеся слова</h5>
    <form method="post" action="index.php">
        <textarea required name="input_text_first" rows="20" cols="50" placeholder="Первый текст "></textarea>
        <textarea required name="input_text_second" rows="20" cols="50" placeholder="Второй текст"></textarea>
        <br><br>
        <input name="push_true" type=submit value="Сравнить ;)">
    </form>

<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 18:44
 */
include "common_words.php";
if (!empty($_POST['push_true'])) {
    $arr_text_first = explode(" ", $_POST['input_text_first']);
    $arr_text_second = explode(" ", $_POST['input_text_second']);
    echo '<strong>Повторяющиеся слова в введенных текстах</strong>';
    echo '<pre>';
    print_r(getCommonWords($arr_text_first, $arr_text_second));
    echo '</pre>';
    echo 'Первый текст:' . '<br>' . $_POST['input_text_first'] . '<br><br>' . 'Второй текст:' . '<br>' . $_POST['input_text_second'] . '<br><br>';
}