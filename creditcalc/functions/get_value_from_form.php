<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 01.12.2016
 * Time: 10:09
 */
$tc_val = 'Стандарт';
$cost_car = $_POST['cost_car'];
$initial_fee = $_POST['initial_fee'];
$credit_term = $_POST['credit_term'];
$type_credit = $_POST['type_credit'];
if($type_credit != 'tc_standart'){
    $tc_val = 'Аннуитет';
}
