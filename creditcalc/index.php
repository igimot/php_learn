<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 29.11.2016
 * Time: 20:23
 */
/*подгрузка файла инклуд где все инклуды*/
require_once('include.php');
/*подтягиваем форму хтмл хед*/
html_head_from_all_pagest();
/*выводим форму ввода*/
echo html_form_for_input_value();
/* проверяем если есть пост, то выполнить то что внутри*/
if (!empty($_POST[send_submit])) {
    /*пост есть проверяем введены ли данные правильно*/
    if (check_what_user_input_to_form($cost_car, $initial_fee) == true) {
        $percent_lot = $otp_percent_lot;
        $credit_type_value = 'Стандарт';
        /*данные введены правильно отображаем что ввел пользователь*/
        what_user_input_to_form($cost_car, $initial_fee, $credit_term, $tc_val);
        if ($credit_type_value === $tc_val) {
            echo '<table>
           <caption>Расчет кредита</caption>
           <tr>
                <th>Месяц</th>
                <th>Остаток по кредиту</th>
                <th>Проценты</th>
                <th>Погашение долга</th>
                <th>Сумма процентов</th>
                <th>Ежемесячный платеж</th>
           </tr>';
            standart_type_credit($cost_car, $initial_fee, $credit_term, $percent_lot);
            echo '</table>';
        } else {
            echo '<table>
           <caption>Расчет кредита</caption>
           <tr>
                <th>Месяц</th>
                <th>Размер аннуитета </th>
                <th>Процент по кредиту </th>
                <th>Тело кредита </th>
                <th>Остаток задолженности </th>                
           </tr>';
            annuity_type_credit($cost_car, $initial_fee, $credit_term, $percent_lot);
            echo '</table>';
        }
    } else {
        /* введенные данные не правильны отображаем ошибку*/
        input_error_is_not_numeric();
    }
}

