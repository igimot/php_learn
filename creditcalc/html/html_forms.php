<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 29.11.2016
 * Time: 20:34
 */
function html_head_from_all_pagest()
{
    $ht_head = '
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Кредитный калькулятор</title>
            <link rel="stylesheet" href="css/style.css">
            <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
            <script src="js/script.js"></script>   
             <style>
             body{
             font-family: "Segoe UI Light";
             }
             #tr{
                 
                  font-size: x-large;
                }
              
             span {
                 font-weight: 700;
                  font-size: large;
                }
              </style> 
        </head>';
    echo $ht_head;
}

function html_form_for_input_value()
{
    echo ' <form action="index.php" method="POST">
                <label> Укажите полную стоимость автомобиля</label>
                <input name="cost_car" type="text" maxlength="8" size="25" id="cost_car" value= "' . $cost_car . '" placeholder="Полная стоимость авто грн">
                <p>
                <label> Укажите сумму первоначального взноса</label>
                <input name="initial_fee" type="text" maxlength="8" size="25" id="initial_fee"  value="' . $initial_fee . '" placeholder="Первоначальный взнос грн">
                <p>
                    <label>Срок кредита</label>
                    <select name="credit_term">
                        <option value="12">12</option>
                        <option value="24">24</option>
                        <option value="36">36</option>
                        <option value="48">48</option>
                        <option value="60">60</option>
                        <option value="72">72</option>
                    </select>
                <p>
                    <label>Тип кредита</label>
                    <select name="type_credit">
                        <option value="tc_standart">Стандарт</option>
                        <option value="tc_anuitet">Аннуитет</option>
                    </select>
                <p>
                <input name="send_submit" type="submit" size="15" value="Расчитать">
                <div id="contenCost_car"></div>
                <p id="contenInitial_fee"></p>
            </form>
        ';
}
function what_user_input_to_form($cost_car, $initial_fee, $credit_term, $type_credit)
{
    echo '<div>
            <h2> Вы ввели </h2>
            <h5> <p>Сумма кредита: <span id="tr">' . summ_credit($cost_car, $initial_fee) . ' грн.</span> 
                 <p>Полная стоимость авто: <span>' . number_format($cost_car, 2, ',', ' ') . ' грн. </span> </p>
                 <p>Первоначальный взнос: <span>' . number_format($initial_fee, 2, ',', ' ') . ' грн. </span>(~' . percent_initial_fee($cost_car, $initial_fee) . '% от стоимости авто)</p>
                 
                 <p>Срок кредита: <span>' . $credit_term . ' мес.</span></p>
                 <p>Тип кредита: <span>' . $type_credit . '</span></p>
             </h5>
          </div>';
}
function input_error_is_not_numeric()
{
    echo '<div> 
            <h5 style="color: red"> Упс что то не так. 
            В полях "Полная стоимость авто грн" и  "Первоначальный взнос грн" нужно вводить цифры<br>
            Попробуйте еще раз ввести данные ;)
            </h5>
            
            </div>
            ';
}

