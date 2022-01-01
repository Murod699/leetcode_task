<?php


function search_insert($num, $target){
    $size_nums = count($num);
    for($i = 0; $i < $size_nums; $i++){
        if($num[$i]<$target && $target<$num[$i+1]){
            echo $i+1;
        }
        
        if($target == $num[$i]){
            echo $i;
        }
        if($target<min($num)){
            echo 0;
            break;
        }
        if ($target>max($num)) {
            echo $size_nums;
            break;
        }

    }
}
$a = [1,3,5,6];
$t = 2;

search_insert($a, $t);