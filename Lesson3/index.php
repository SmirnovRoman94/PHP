<?php

// первое задание
$arrayOne = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arrayTwo = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// первый способ
foreach ($arrayOne as $key => $item){
    foreach ($arrayTwo as $keyTwo => $itemTwo){
        if($key == $keyTwo){
           $arrayOne[$key] = $item * $itemTwo;
        }
    }
}
print_r($arrayOne);

//второй способ
$arrayResult = array_map(function ($a, $b){
    return ($a * $b);
}, $arrayOne, $arrayTwo);
print_r($arrayResult);


//второе задание

$whoName = readline('Как Вас зовут?');
if($whoName){
    echo "С днем рождения, $whoName".PHP_EOL;
}

//третье  задание
$global = [
    ['классного', 'красивой', 'крепкого', 'веселого', 'интересной', 'незабываемых', 'веселых'],
    ['здоровья', 'настроения', 'приключений', 'возможностей', 'планов', 'друзей', 'путешествий']
];

$res = [];
$whoName = readline('Как Вас зовут?');
if($whoName){
    for($i = 0; $i < 6; $i++){
        $rand = mt_rand(0, 6);
        if($i & 1){
            array_push($res, $global[1][$rand]);

        }else{
            array_push($res, $global[0][$rand]);

        }
    }
    echo "Дорогой $whoName, от всего сердца поздравляю тебя с днем рождения, желаю $res[0] $res[1], $res[2] $res[3], $res[4] $res[5]".PHP_EOL;
}

// четвертое задание

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Морозова Софья' => 5,
        'Тарасов Максим' => 4,
        'Сидоров Матвей' => 2,
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Иванов Иван' => 2,
        'Семенов Семен' => 2,
        'Драгих Никита' => 5,
        'Труба Кристина' => 5,
    ],
    'КВ20' => [
        'Антонов Кирилл' => 5,
        'Иванова Виктория' => 5,
        'Семенова Анастасия' => 3,
        'Сидоров Никита' => 2,
        'Верных Кристина' => 2,
    ]
];
$maxArray = [];
//средний балл
foreach ($students as  $key => $arifmet){
    $maxArray[$key] = array_sum($arifmet)/ count($arifmet);
    echo 'Группа '. $key. ' '. 'средний балл: '. array_sum($arifmet)/ count($arifmet).PHP_EOL;
}
//название группы с самым большим вычисленным значением успеваемости
echo 'Группа с самым большим вычисленным значением успеваемости '.array_search(max($maxArray), $maxArray).PHP_EOL;

// список на отчисление
$outArray = [];
foreach ($students as $key => $out) {
    $outArray[$key] = $out;
    foreach ($outArray[$key] as $keyUser => $item) {
        if ($item > 2) {
            unset($outArray[$key][$keyUser]);
        }
    }
}
print_r($outArray);

