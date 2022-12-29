<?php
$wishes = ['здоровья' ,'удачи', 'счастья',];
$epit = ['наилучшего','постоянного', 'неверотяного'];
$name = readline('введите ваше имя');
$rand = array_rand($wishes);
$rands = array_rand($epit);
echo "дорогой $name поздравляю тебя с днем рождения желаю $epit[$rands] $wishes[$rand]";

<?php
$arr1 = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$multi = [];
foreach ($arr1 as $key => $value) {
    $multi[] = $value * $arr2[$key];
}

print_r($multi);
