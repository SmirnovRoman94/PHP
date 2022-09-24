<?php
$name = readline('Вас зовут? ');
$age = readline('Сколько Вам лет? ');
if(is_numeric($age) == 1){
    echo "Вас зовут $name, вам $age лет".PHP_EOL;
}else{
    echo "Введите целое число".PHP_EOL;
}

$nameWork = '';
$time = '';
$allTime = 0;
for ($i = 1; ; $i++) {
    if ($i > 3) {
        echo"$name, сегодня у вас запланировано 3 приоритетных задачи на день:
        - $nameWork[1] ($time[1])
        - $nameWork[2] ($time[2])
        - $nameWork[3] ($time[3])
        Примерное время выполнения плана = $allTime
        ";
        break;
    }
    $nameWork[$i] = readline('Какая задача стоит перед вами сегодня? ');
    $time[$i] = readline('Сколько примерно времени эта задача займет?');
    $allTime += $time[$i];
}

