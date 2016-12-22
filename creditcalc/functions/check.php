<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 01.12.2016
 * Time: 11:22
 */
function check_what_user_input_to_form ($car, $fee){
    if(!is_numeric($car) || !is_numeric($fee)){
        return false;
    }else{
        return true;
    }

}
/*function get_push ($push){
    if(!){}

}
*/

