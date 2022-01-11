<?php

function twoSum($nums, $target){
    $size = count($nums);
    $sum = 0;
    $number1 = 0;
    $number2 = 0;
    for($i = 0; $i<$size; $i++){
        $number1 = $nums[$i];
        for($j = 0; $j < $size; $j++){
            if($i ==$j){
                continue;
            }
            $number2 = $nums[$j];
            if(($number1+$number2) == $target){
                break 2;
            }
        }
    }
    return [$i,$j];

}
$a = [1,3];
$b = 4;
echo twoSum($a,$b);