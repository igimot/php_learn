<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2016
 * Time: 11:25
 */
/*22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>
*/

for ($i = 1; $i <= 5; $i++) {
    $a = 'xx';
    for ($w = 1; $w <= $i; $w++) {
        echo $a;
    }
    echo '<br>';
}