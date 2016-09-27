<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 27.09.2016
 * Time: 10:27
 */
function viewResult()
{

    if (!empty($_POST['push_true'])) {
        $len_word = $_POST['leng_word'];
        if (is_numeric($len_word)) {
            addTextToFile(explode(" ", $_POST['input_text']));
            viewText();
            delWord();

        } else {
            echo '<br>' . '"' . $len_word . '"' . ' - это не число, введите число';
        }

    }
}

function addTextToFile($a)
{
    file_put_contents('file.dat', "\n" . implode(" ", $a), FILE_APPEND);
}

function viewText()
{
    if (!empty($_POST['push_true'])) {
        echo 'Было' . '<br>';
        $str = file_get_contents('file.dat');
        echo $str . '<br><br>';

    }
}

function clearFile()
{
    if (!empty($_POST['clear_file_true'])) {
        $fp = fopen("file.dat", 'a');
        $fpN = fopen("new_file.dat", 'a');
        ftruncate($fp, 0);
        ftruncate($fpN, 0);
    }
}

function delWord()
{
    $len_word = $_POST['leng_word'];
    $file = file_get_contents('file.dat');
    $arr_text = explode(' ', $file);
    foreach ($arr_text as $word) {
        if (strlen($word) <= $len_word) {
            $new_arr[] = $word;
        }
    }
    $new_str = implode(" ", $new_arr);
    file_put_contents('new_file.dat', $new_str);
    $new_file = file_get_contents('new_file.dat');
    echo 'Стало' . '<br>';
    echo $new_file;
}


