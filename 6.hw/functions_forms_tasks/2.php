<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1</title>
<h5> Введите в поля любой текст, можно большой. Программа выводит ТОП3 длинных слов в тексте</h5>
<form method="post" action="2.php">
    <textarea required name="input_text" rows="20" cols="50" placeholder="Первый текст "></textarea>
    <br><br>
    <input name="push_true" type=submit value="Показать ТОП-3 ;)">
</form><?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 22:29
 */
/*2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
*/
$in_text = $_POST['input_text'];
$arr_text = explode(" ", $_POST['input_text']);
if (!empty($_POST['push_true'])){
    $e = 'error';
    echo strlen($e) . '<br>';

    foreach ($arr_text as $key => $word){
        $key1 = strlen($word);
        $new_arr[] = array($key1 => $word);
        echo $word . ' => ' . strlen($word) . '<br>';

    }
    ksort($new_arr);
    echo '<pre>';
    print_r($new_arr);
    echo  '</pre>';

}
