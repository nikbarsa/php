<?php


$number = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$rand = array_rand($number);
if (($number[$rand] % 2) == 0) {
    echo "четное";
}elseif ( ($number[$rand] % 2) !== 0) {
   echo "не четное";
};


$numbers = [4, 5, 1, 4];
$max = max($numbers);
$min = min($numbers);
$numbers = array_filter($numbers);
$average = array_sum($numbers)/count($numbers);
echo $average;
$numm = [$max,$min,$average];
var_dump($numm);

