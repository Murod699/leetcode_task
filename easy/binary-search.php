<?php

$a = [5];
$b = 5;
// echo count($a);
function binarySearch($nums, $target){
    if(count($nums) == 0)   return -1;
    $l = 0;
    $h = count($nums)-1;
    while ($l <= $h) {
        $mid = $l + floor(($h-$l)/2);
        if($nums[$mid] == $target){ return $mid;}
        elseif($nums[$mid] > $target){ $h = $mid-1;}
        else {
            $l = $mid +1;
        }
    }
    return -1;
      
    
       
        
       
}
 echo binarySearch($a, $b);