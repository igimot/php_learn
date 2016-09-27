<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 23:14
 */

function three_big_words() {
    $text = $_POST['text'];
    $array = explode(" ", $text);//из полученного текста создаем массив
    usort($array,function($a,$b) { //сортируем массив с помощью пользовательской функции
        return strlen($b) - strlen($a);
    } );
    return array_slice($array,0,3);//возвращаем срез массива от 0 до 3,3 елемент не выводим
}
if(isset($_POST['submit'])) {
    $array = three_big_words();
    echo 'TOP three words: ';
    foreach($array as $value) {
        echo $value . ' ';
    }
}
?>

<form method="POST" action="">
    <textarea name="text"></textarea>
    <input type="submit" name="submit" value="ok"/>
</form>