<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 13.09.2016
 * Time: 17:06
 */

/*20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
    рядов, а не 5.<br><br>
    x<br>
    xx<br>
    xxx<br>
    xxxx<br>
    xxxxx</p>
*/

for ($i=0; $i <= 20; $i++){
    $q = 'x';
    for ($w = 0; $w <= $i; $w++){
        echo $q;
    }
    echo '<br>';
}