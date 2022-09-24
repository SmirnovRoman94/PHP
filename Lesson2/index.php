<?php

$question = (int)readline('В каком году в России отменили крепостное право ?  1861; 1881; 1681 (Введите дату)');
 if($question !== 1861 || $question !== 1881  || $question !== 1681){
     $returnQuesion = (int)readline('В каком году в России отменили крепостное право ?  1861; 1881; 1681 (Введите дату)');
     if($returnQuesion == 1861 ){
         echo "Поздравляем! вы ответили правильно!".PHP_EOL;
     }else{
         echo "Ответ не верный!".PHP_EOL;
     }
 }elseif($question == 1861){
     echo "Поздравляем! вы ответили правильно!".PHP_EOL;
 }else{
     echo "Ответ не верный!".PHP_EOL;
 }


 