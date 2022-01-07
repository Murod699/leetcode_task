<?php
$x = 0.0001;
$n = 2;
function pow2( $x, $n){
    if($x == 0) return $x;
    $s = 1;
    if($n < 0)
        $temp = -1 * $n;
    else
    $temp = $n;
    
    
     for($i = $temp; $i != 0; $i = $i/2) {
         if($i % 2 != 0){
         $s = $s * $x; 
         }  
        
        $x = $x * $x;
        }
    if($n < 0)
    return 1 / $s;

    return $s;
       
}
echo pow2($x, $n);