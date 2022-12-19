<?php
$time = (int)readline("«В каком году произошло крещение Руси?» 810 988 740");
if ($time == 988) {
    echo "правильно,молодец";
} elseif ($time !== 988) {
    echo "не правильно";
};
<?php
do {
    $num = (int)readline("сколько задач у вас запланирова
} while ($num <= 0);
$res = 0;
$sum = 0;

for($i = 1; $i <= $num; $i++) {
$task = readline("какая у вас задача на сегодня");
$time = (int)readline("сколько времени у вас это займет")
$out .= "- $task ({$time}ч).\n";
$sum += $time;
}
echo "сегодня у вас в планах: $num важныч заданий у вас н
echo $res;
echo "всего времени:{$sum}ч.";


<?php
do {
    $number = (int)readline("номер пальца?");
} while ($number <= 0);
echo "счет остановлен на пальце номер";
$number %=8;
switch (true) {
    case $number == 1:
        echo 1;
        break;
        case $number == 2 || $number == 0:
            echo 2;
            break;
            case $number == 3 || $number == 7:
                echo 3;
                break;
                case $number == 4 || $number == 6:
                    echo 4;
                    break;
                    default:
                    echo 5;

}
switch ($number % 8) {
    case 1:
        $finger = '1';
        break;
        case 2:
            case 0:
                $finger = '2';
                break;
                case 3:
                    case 7:
                        $finger = '3';
                        break;
                        case 4:
                            case 6:
                                $finger = '4';
                                break;
                                case 5:
                                    $finger = '5';
                                    break;

}
do {
    $number = (int)readline('введите число которое больше нуля');
}
    while ($number <= 0);
    $finger_num = $number % 8;
    if ($finger_num == 0) {
        $finger_num = 2;
    } elseif ($finger_num > 5) {
        $finger_num = 10 - $finger_num;

    } 
echo "номер пальца:$finger_num";







