<?php
// первое задание
$array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$full = function (int $item): string
{
    if($item % 2 === 0){
        return 'четное';
    }  else{
        return 'нечетное';
    }
};

$qw = array_map($full, $array);
print_r($qw);
// Array
//(
//[0] => четное
//[1] => нечетное
//[2] => нечетное
//[3] => четное
//[4] => нечетное
//[5] => четное
//[6] => нечетное
//[7] => четное
//[8] => нечетное
//[9] => нечетное
//[10] => четное
//)


//второе задание

function funArray (array $arrays): array
{
    $result = [];
    array_unshift($result, 'max'. '- '. max($arrays) ) ;
    array_push($result, 'min'. '- '.  min($arrays) ) ;
    array_push($result, 'avg'. '- '.  array_sum($arrays)/ count($arrays) ) ;


    return $result;

};
$as = funArray($array);
print_r($as);