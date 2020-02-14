<?php
/************ Program By Abzal - +919790338959 - abzalsmart@gmail.com ************/

/********* Challenge *********
Write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print "Linio". For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print "Linianos". But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.
********* Challenge *********/
$check_1 = 3;
$check_2 = 5;
$check_3 = $check_1 * $check_2;
$start = 1;
$limit = 100;
foreach(range($check_1,$limit,$check_1) as $divbyfirst) {
	$primary_array[$divbyfirst] = 'Linio';
}
foreach(range($check_2,$limit,$check_2) as $divbysecond) {
	$primary_array[$divbysecond] = 'IT';
}
foreach(range($check_3,$limit,$check_3) as $divbythird) {
	$primary_array[$divbythird] = 'Linianos';
}
$final_array = array();
for($num = $start; $num <= $limit; $num++) {
	$final_array[$num] = $num;
	if(isset($primary_array[$num])) {
		$final_array[$num] = $primary_array[$num];
	}
}
echo '<pre>';
print_r($final_array);
echo '</pre>';
?>