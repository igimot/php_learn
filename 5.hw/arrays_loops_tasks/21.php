<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 13.09.2016
 * Time: 17:19
 */
/*21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
    рядов, а не 5.<br><br>
    1<br>
    22<br>
    333<br>
    4444<br>
    55555</p>
*/

for ($i=0; $i <= 9; $i++){
    if ($i != 0) {
        for ($w = 1; $w <= $i; $w++) {
            echo $i;
        }
        echo '<br>';
    }
}