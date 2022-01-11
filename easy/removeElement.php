<?php

function removeElement($nums, $val){

    foreach($nums as $i=>$num){
        if($val == $num){
            unset($nums[$i]);
        }
    }
    return count($nums);
}

 