<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 03.12.2016
 * Time: 16:31
 * = первоначальный взнос в грн./стоимость
 *
 * авто*100 и отображается в %, поле
 *
 * заблокировано для изменений.
 */

function percent_initial_fee($car, $fee)
    /*функция просчета начисленных процентов*/
{
    $percent_initial_fee = ($fee / $car) * 100;
    return floor($percent_initial_fee);
}

function summ_credit($car, $fee)
{
    /*функция просчета суммы кредита*/
    $res = $car - $fee;
    return number_format($res, 2, ',', ' ');
}

$summ_credit = summ_credit($cost_car, $initial_fee);
function standart_type_credit($cost_car, $initial_fee, $term_credit, $percent_lot)
{
    $sum_credit = $cost_car - $initial_fee;
    $sum_debt_per_month_pay = $sum_credit / $term_credit;
    $percent_lot_in_month = $percent_lot / $term_credit;
    for ($i = 1; $i <= $term_credit; $i++) {
        echo '<tr>';
        $accrued_interest = $sum_credit / 100 * $percent_lot_in_month;
        $sum_pay_per_month = $sum_debt_per_month_pay + $accrued_interest;
        echo '<td>' . $i . '</td>' .
            '<td>' . round($sum_credit, 2) . '</td>' .
            '<td>' . round($percent_lot_in_month, 2) . '</td>' .
            '<td> ' . round($sum_debt_per_month_pay, 2) . '</td>' .
            '<td>' . round($accrued_interest, 2) . '</td>' .
            '<td> ' . round($sum_pay_per_month, 2) . '</td>';
        $sum_credit = $sum_credit - $sum_debt_per_month_pay;
        $arr[] = $accrued_interest;
        echo '</tr>';
        if ($i == $term_credit) {
            echo 'Удорожание кредита на ' . round(array_sum($arr), 2) . ' грн <br>';
        }
    }
}

function annuity_type_credit($cost_car, $initial_fee, $term_credit, $percent_lot)
{
    $sum_credit = $cost_car - $initial_fee;
    /*месячная процентная ставка по кредиту*/
    $percent_lot_in_month = ($percent_lot / 12) / 100;
    $r1 = $percent_lot_in_month * pow((1 + $percent_lot_in_month), $term_credit);
    $r2 = pow((1 + $percent_lot_in_month), $term_credit) - 1;
    $monthly_annuity_payment = round(($sum_credit * ($r1 / $r2)), 2);
    $sum_credit_old = ($monthly_annuity_payment * $term_credit) - $sum_credit;
    for ($i = 0; $i <= ($term_credit); $i++) {
        $percent_for_credit = $sum_credit * $percent_lot_in_month;
        $body_credit = $monthly_annuity_payment - $percent_for_credit;
        if ($i != 0) {
            echo '<tr><td>' . $i . '</td>' . //Месяц
                '<td>' . round($monthly_annuity_payment, 2) . '</td>' . //Размер аннуитета
                '<td>' . round($percent_for_credit, 2) . '</td>' . //Процент по кредиту
                '<td>' . round($body_credit, 2) . '</td>' . //Тело кредита
                '<td>' . round($sum_credit, 2) . '</td>'; //Остаток задолженности
        }
        $sum_credit = $sum_credit - $body_credit;
        echo '</tr>';
    }
    echo 'Месячный платеж по аннуитету ' . $monthly_annuity_payment . ' грн <br>';
    echo 'Удорожание кредита на ' . $sum_credit_old . ' грн';
}