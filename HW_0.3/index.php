<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 06.09.2016
 * Time: 13:07
 */
/*Думаю пока этого хватит.
для примера вот то что сделал на
UNIT 7: FUNCTIONS IN PHP, PART I
8 этапе
*/

// Create an array and push on the names
// of your closest family and friends (решил использовать список не семьи, а муз групп)
     $fav_bands = array();
    array_push($fav_bands, "Maroon 5");
    array_push($fav_bands, "Bruno Mars");
    array_push($fav_bands, "Nickelback");
    array_push($fav_bands, "Katy Perry");
    array_push($fav_bands, "Macklemore");
    array_push($fav_bands, "Moby");
    array_push($fav_bands, "Dodo");
    array_push($fav_bands, "Limp bizkit");
    array_push($fav_bands, "linkin park");
    array_push($fav_bands, "Boombox");
    $count_item = count($fav_bands);
    // проверял что происходит print "count_array = " . $count_item;

// Sort the list
	sort($fav_bands);
	// проверял что происходит print "<br>" . $fav_bands[5];

// Randomly select a winner!
	$ran_count_bands = rand(1,$count_item);
	// проверял что происходит print "<br>" . $fav_bands[$ran_count_bands];

// Print the winner's name in ALL CAPS
	print "<br>" . strtoupper($fav_bands[$ran_count_bands]);

